# Pec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pec_id** | **int** |  |
**purchase_id** | **int** | Id of the purchase of the mailbox (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**purchase_name** | **string** | Name of the purchase object, as &#x60;purchase_name.object_name&#x60; of the purchase |
**purchase_status_code** | **string** | Status code of the purchase, for example &#x60;ACTIVE_V2&#x60; or &#x60;NEW_V2&#x60; (not active yet) |
**box_name** | **string** | Name of the mailbox, the part of the address before &#x60;@&#x60;; null until it is chosen |
**full_box_name** | **string** | Address of the mailbox (&#x60;box_name@domain&#x60;); empty until the name is chosen |
**domain** | **string** |  |
**report_email** | **string** | Notification email for the PEC reports of the mailbox |
**report_sms** | **string** | Phone number that receives the SMS notifications of the mailbox; null when the SMS service is not active |
**password_recovery_email** | **string** | Email used to recover the password of the mailbox |
**inbox_usage** | **float** | Space used in the inbox, in MB |
**archive_usage** | **float** | Space used in the archive, in MB |
**extra_inbox** | **int** | Additional inbox space bought, in GB |
**extra_archive** | **int** | Additional archive space bought, in GB |
**transfer_in** | **bool** | Whether the mailbox already existed and was transferred to us (incoming transfer) |
**owner_not_assignable** | **bool** | Whether Aruba, the PEC provider, refused to assign the chosen owner to the mailbox during the activation |
**password_wrong** | **bool** | Whether the password of the mailbox saved for the backups turned out wrong; the backups need the right one |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
