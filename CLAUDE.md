# CLAUDE.md

SDK PHP ufficiale delle API pubbliche Shellrent (`shellrent/sdk`). Il client si genera con OpenAPI Generator
da `spec/openapi.yaml`; a mano si scrivono solo autenticazione, punto di ingresso, test, documentazione e CI.

## Generato e scritto a mano

- Generati (elenco esatto in `.openapi-generator/FILES`): `src/Api/`, `src/Model/`, `src/ApiException.php`,
  `src/Configuration.php`, `src/FormDataProcessor.php`, `src/HeaderSelector.php`, `src/ObjectSerializer.php`,
  `src/ApiAccessors.php` (dal template `templates/ApiAccessors.mustache`) e `docs/`.
- Scritti a mano: `src/Client.php`, `src/Auth/`, `src/Http/`, `tests/`, `bin/generate`, `templates/`,
  `openapi-generator.yaml`, `.openapi-generator-ignore`, `composer.json`, `phpunit.xml.dist`, README, CHANGELOG, CI.
- Il codice generato non si modifica mai. Per cambiarne il comportamento, in quest'ordine: opzioni in
  `openapi-generator.yaml`, regole `openapiNormalizer`, template custom in `templates/` (ultima risorsa).
- Un nuovo file scritto a mano con un nome che il generatore produce (per esempio `README.md`) va aggiunto a
  `.openapi-generator-ignore`, altrimenti `bin/generate` lo sovrascrive.
- Gli accessor di `Client` (`purchases()`, `ssl()`, ...) vengono dai tag: non scriverli a mano.

## Rigenerazione

- `bin/generate` (serve Docker) cancella i file elencati in `.openapi-generator/FILES` e rigenera con
  `generate -c openapi-generator.yaml`. Non servono passaggi manuali: si committa tutto quello che cambia.
- Versione del generatore fissata in `bin/generate` (`v7.25.0`). Per aggiornarla: cambia il tag, rigenera,
  rivedi il diff, confronta `composer.json` con quello che produrrebbe il generatore, lancia i test.
- `spec/openapi.yaml` è una copia della spec dell'applicazione: non si modifica, i problemi si correggono lì.
- La spec è OpenAPI 3.1, che nel generatore è in beta: nel diff controlla `openAPINullables` e i default
  dei parametri. Limiti noti della 7.25.0:
  - le proprietà prese da un `$ref` in `allOf` o `oneOf` perdono la nullabilità. Per `allOf` c'è la regola
    `REF_AS_PARENT_IN_ALLOF` (il modello estende il padre, es. `ServiceServer extends Service`), ma in
    `docs/` i campi ereditati compaiono solo nella pagina del padre. Per `oneOf` non c'è rimedio: evitarlo;
  - un `default: null` diventa la stringa `'null'`, che l'SDK invia come valore: va tolto dalla spec.

## Versionamento

- SemVer dai tag git (niente `version` in `composer.json`). Nuove operazioni o modelli: minor. operationId
  o modelli rinominati o rimossi: major, perché cambiano nomi di metodi e classi.
- Controlla anche le firme generate: i parametri sono posizionali (obbligatori, poi opzionali nell'ordine
  della spec) e i nomi valgono come named argument. Inserirne uno in mezzo o rinominarlo è una major.
- Ogni modifica va in `CHANGELOG.md` (formato Keep a Changelog, sezione `[Unreleased]`).

## Test e verifica

- `composer test`: test unitari con il `MockHandler` di Guzzle (`tests/Support/FakeHandler` registra i
  delay dei retry senza dormire). I test in `tests/Integration` chiamano l'API reale solo con
  `SHELLRENT_CLIENT_ID` e `SHELLRENT_CLIENT_SECRET` (scope `purchases:read`), altrimenti sono saltati.
- La CI esegue `composer validate --strict`, PHPUnit su PHP 8.1-8.5 e su 8.1 con le dipendenze minime, e
  `bin/generate`, fallendo se il codice rigenerato differisce da quello committato.

## Vincoli

- PHP minimo 8.1, come il codice generato: niente readonly class, tipi DNF, costanti nei trait.
- Nessuna nuova dipendenza di runtime senza un motivo forte. Il minimo di Guzzle e PSR-7 è il primo rilascio
  senza advisory (`composer audit`): Composer non installa versioni vulnerabili, quindi il job con le
  dipendenze minime testa il minimo dichiarato solo se è sicuro. `tests/Support/ArrayCache` deve restare
  compatibile con psr/simple-cache 1, 2 e 3 (parametri `mixed`).
- Il client secret non deve mai finire in cache, nei log o nei messaggi di errore: la chiave di cache non lo
  contiene, `TokenProvider` costruisce il body da sé (così non compare negli stack trace) e
  `ClientCredentials` lo nasconde a `var_dump()`.
- `Http\HttpClientFactory` e le classi in `Auth\` sono usate da `shellrent/internal-sdk`: cambiarne
  l'interfaccia pubblica è una modifica incompatibile (major). La factory non deve dipendere da classi generate.
