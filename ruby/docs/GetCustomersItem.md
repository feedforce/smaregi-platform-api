# OpenapiClient::GetCustomersItem

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **customer_id** | **String** |  |  |
| **customer_code** | **String** |  |  |
| **customer_no** | [**AnyType**](.md) |  | [optional] |
| **rank** | [**AnyType**](.md) |  | [optional] |
| **staff_rank** | [**AnyType**](.md) |  | [optional] |
| **first_name** | **String** |  | [optional] |
| **last_name** | **String** |  | [optional] |
| **first_kana** | [**AnyType**](.md) |  | [optional] |
| **last_kana** | [**AnyType**](.md) |  | [optional] |
| **post_code** | **String** |  | [optional] |
| **address** | **String** |  | [optional] |
| **phone_number** | **String** |  | [optional] |
| **fax_number** | [**AnyType**](.md) |  | [optional] |
| **mobile_number** | **String** |  | [optional] |
| **mail_address** | **String** |  | [optional] |
| **mail_address2** | **String** |  | [optional] |
| **mail_address3** | **String** |  | [optional] |
| **company_name** | [**AnyType**](.md) |  | [optional] |
| **department_name** | [**AnyType**](.md) |  | [optional] |
| **managerial_position** | [**AnyType**](.md) |  | [optional] |
| **sex** | [**Sex**](Sex.md) |  | [default to &#39;0&#39;] |
| **birth_date** | [**AnyType**](.md) |  | [optional] |
| **point_expire_date** | [**AnyType**](.md) |  | [optional] |
| **last_come_date_time** | [**AnyType**](.md) |  | [optional] |
| **entry_date** | [**AnyType**](.md) |  | [optional] |
| **leave_date** | **String** |  | [optional] |
| **point_giving_unit_price** | [**AnyType**](.md) |  | [optional] |
| **point_giving_unit** | [**AnyType**](.md) |  | [optional] |
| **pin_code** | [**AnyType**](.md) |  | [optional] |
| **passport_no** | [**AnyType**](.md) |  | [optional] |
| **nationality** | [**AnyType**](.md) |  | [optional] |
| **alphabet_name** | [**AnyType**](.md) |  | [optional] |
| **mail_receive_flag** | [**MailReceiveFlag**](MailReceiveFlag.md) |  | [default to &#39;1&#39;] |
| **note** | [**AnyType**](.md) |  | [optional] |
| **note2** | [**AnyType**](.md) |  | [optional] |
| **favorite_list** | [**AnyType**](.md) |  | [optional] |
| **browsing_list** | [**AnyType**](.md) |  | [optional] |
| **status** | [**Status**](Status.md) |  |  |
| **store_id** | [**AnyType**](.md) |  | [optional] |
| **ins_date_time** | **String** |  |  |
| **upd_date_time** | **String** |  |  |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::GetCustomersItem.new(
  customer_id: null,
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
  last_come_date_time: null,
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
  store_id: null,
  ins_date_time: null,
  upd_date_time: null
)
```

