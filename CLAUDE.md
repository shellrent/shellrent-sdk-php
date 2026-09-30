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
  `openapi-generator.yaml`, regole `openapiNormalizer`, template custom in `templates/` (ultima risorsa:
  un file con il nome di un template del generatore lo sostituisce).
- Un nuovo file scritto a mano con un nome che il generatore produce (per esempio `README.md`) va aggiunto a
  `.openapi-generator-ignore`, altrimenti `bin/generate` lo sovrascrive.
- Gli accessor di `Client` (`purchases()`, `ssl()`, ...) vengono dai tag: un tag nuovo aggiunge il suo metodo
  in `ApiAccessors` alla rigenerazione. Non scrivere accessor a mano.

## Rigenerazione

- `bin/generate` (serve Docker) cancella i file elencati in `.openapi-generator/FILES` e rigenera con
  `generate -c openapi-generator.yaml`. Non servono passaggi manuali: si committa tutto quello che cambia.
- Versione del generatore fissata in `bin/generate` (`openapitools/openapi-generator-cli:v7.25.0`). Per
  aggiornarla: cambia il tag, lancia `bin/generate`, rivedi il diff, confronta `composer.json` con il
  `composer.json` che il generatore produrrebbe (versione PHP, estensioni, Guzzle), lancia i test e annota
  l'aggiornamento in `CHANGELOG.md`.
- `spec/openapi.yaml` è una copia della spec prodotta dall'applicazione Shellrent: qui non si modifica. I
  problemi si correggono nell'applicazione e poi si ricopia il file.

## Versionamento

- SemVer dai tag git (niente `version` in `composer.json`). Nuove operazioni o modelli: minor. operationId
  o modelli rinominati o rimossi: major, perché cambiano nomi di metodi e classi.
- Nel diff controlla anche le firme dei metodi generati: i parametri sono posizionali (prima gli obbligatori,
  poi gli opzionali nell'ordine della spec) e i loro nomi valgono come named argument. Un parametro inserito
  in mezzo o rinominato rompe il codice di chi chiama: è una major.
- Ogni modifica va in `CHANGELOG.md` (formato Keep a Changelog, sezione `[Unreleased]`).

## Test e verifica

- `composer test`: test unitari dello strato scritto a mano con il `MockHandler` di Guzzle
  (`tests/Support/FakeHandler` registra i delay dei retry senza dormire). Il test in `tests/Integration`
  chiama l'API reale solo se ci sono `SHELLRENT_CLIENT_ID` e `SHELLRENT_CLIENT_SECRET` (e opzionalmente
  `SHELLRENT_API_URL`), altrimenti viene saltato.
- Dopo ogni modifica a `composer.json`: `composer validate --strict`.
- La CI (`.github/workflows/ci.yml`) esegue `composer validate --strict`, PHPUnit su PHP 8.1-8.5 e
  `bin/generate`, fallendo se il codice rigenerato differisce da quello committato.

## Vincoli

- PHP minimo 8.1, come il codice generato: niente readonly class, tipi DNF, costanti nei trait.
- Nessuna nuova dipendenza di runtime senza un motivo forte (oggi: guzzle, psr7, psr/simple-cache,
  composer-runtime-api).
- Il client secret non deve mai finire in cache, nei log o nei messaggi di errore: la chiave di cache non lo
  contiene, `TokenProvider` costruisce il body da sé (così non compare negli stack trace) e
  `ClientCredentials` lo nasconde a `var_dump()`.
- `Http\HttpClientFactory` e le classi in `Auth\` sono usate da `shellrent/internal-sdk`: cambiarne
  l'interfaccia pubblica è una modifica incompatibile (major). La factory non deve dipendere da classi generate.
