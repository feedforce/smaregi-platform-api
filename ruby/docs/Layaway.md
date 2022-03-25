# OpenapiClient::Layaway

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **transaction_head_id** | **String** |  | [optional] |
| **pick_up_date** | **String** |  | [optional] |
| **status** | **String** |  | [optional] |
| **part_payment** | **String** |  | [optional] |
| **part_payment_class** | **String** |  | [optional] |
| **pick_up_transaction_head_id** | **String** |  | [optional] |
| **disabled_edit** | **String** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::Layaway.new(
  transaction_head_id: null,
  pick_up_date: null,
  status: null,
  part_payment: null,
  part_payment_class: null,
  pick_up_transaction_head_id: null,
  disabled_edit: null
)
```

