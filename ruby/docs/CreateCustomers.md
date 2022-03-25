# OpenapiClient::CreateCustomers

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **customer_code** | **String** |  |  |
| **customer_no** | **String** |  | [optional] |
| **rank** | **String** |  | [optional] |
| **staff_rank** | **String** |  | [optional] |
| **first_name** | **String** |  |  |
| **last_name** | **String** |  |  |
| **first_kana** | **String** |  | [optional] |
| **last_kana** | **String** |  | [optional] |
| **post_code** | **String** |  | [optional] |
| **address** | **String** |  | [optional] |
| **phone_number** | **String** |  | [optional] |
| **fax_number** | **String** |  | [optional] |
| **mobile_number** | **String** |  | [optional] |
| **mail_address** | **String** |  | [optional] |
| **mail_address2** | **String** |  | [optional] |
| **mail_address3** | **String** |  | [optional] |
| **company_name** | **String** |  | [optional] |
| **department_name** | **String** |  | [optional] |
| **managerial_position** | **String** |  | [optional] |
| **sex** | [**Sex**](Sex.md) |  | [optional][default to &#39;0&#39;] |
| **birth_date** | **String** |  | [optional] |
| **point_expire_date** | **String** |  | [optional] |
| **entry_date** | **String** |  | [optional] |
| **leave_date** | **String** |  | [optional] |
| **point_giving_unit_price** | **String** |  | [optional] |
| **point_giving_unit** | **String** |  | [optional] |
| **pin_code** | **String** |  | [optional] |
| **passport_no** | **String** |  | [optional] |
| **nationality** | **String** |  | [optional] |
| **alphabet_name** | **String** |  | [optional] |
| **mail_receive_flag** | [**MailReceiveFlag**](MailReceiveFlag.md) |  | [optional][default to &#39;1&#39;] |
| **note** | **String** |  | [optional] |
| **note2** | **String** |  | [optional] |
| **favorite_list** | **String** |  | [optional] |
| **browsing_list** | **String** |  | [optional] |
| **status** | [**Status**](Status.md) |  | [optional] |
| **store_id** | **String** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::CreateCustomers.new(
  customer_code: null,
  customer_no: null,
  rank: null,
  staff_rank: null,
  first_name: null,
  last_name: null,
  first_kana: null,
  last_kana: null,
  post_code: null,
  address: null,
  phone_number: null,
  fax_number: null,
  mobile_number: null,
  mail_address: null,
  mail_address2: null,
  mail_address3: null,
  company_name: null,
  department_name: null,
  managerial_position: null,
  sex: null,
  birth_date: null,
  point_expire_date: null,
  entry_date: null,
  leave_date: null,
  point_giving_unit_price: null,
  point_giving_unit: null,
  pin_code: null,
  passport_no: null,
  nationality: null,
  alphabet_name: null,
  mail_receive_flag: null,
  note: null,
  note2: null,
  favorite_list: null,
  browsing_list: null,
  status: null,
  store_id: null
)
```

