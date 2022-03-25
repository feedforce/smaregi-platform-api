=begin
#スマレジ

#No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

The version of the OpenAPI document: 1.0.0

Generated by: https://openapi-generator.tech
OpenAPI Generator version: 5.1.1

=end

# Common files
require 'openapi_client/api_client'
require 'openapi_client/api_error'
require 'openapi_client/version'
require 'openapi_client/configuration'

# Models
require 'openapi_client/models/apply_condition_division'
require 'openapi_client/models/award_type'
require 'openapi_client/models/cancel_division'
require 'openapi_client/models/coupon'
require 'openapi_client/models/coupon_division'
require 'openapi_client/models/coupon_items_for_transactions'
require 'openapi_client/models/coupons_for_transactions'
require 'openapi_client/models/create_customers'
require 'openapi_client/models/customer'
require 'openapi_client/models/customer_group'
require 'openapi_client/models/customers_response_of_create'
require 'openapi_client/models/deposit_others'
require 'openapi_client/models/dispose_division'
require 'openapi_client/models/error'
require 'openapi_client/models/expire_division'
require 'openapi_client/models/get_customer_point_list_item'
require 'openapi_client/models/get_customers_item'
require 'openapi_client/models/get_layaway_by_id'
require 'openapi_client/models/get_layaway_list_item'
require 'openapi_client/models/get_stores_response_item'
require 'openapi_client/models/get_stores_response_item_receipt_print_info'
require 'openapi_client/models/get_transaction_id'
require 'openapi_client/models/get_transaction_item'
require 'openapi_client/models/layaway'
require 'openapi_client/models/layaway_pick_up'
require 'openapi_client/models/mail_receive_flag'
require 'openapi_client/models/mileage_division'
require 'openapi_client/models/patch_customers'
require 'openapi_client/models/point_condition'
require 'openapi_client/models/point_giving_division'
require 'openapi_client/models/point_spend_division'
require 'openapi_client/models/point_spend_limit_division'
require 'openapi_client/models/point_use_division'
require 'openapi_client/models/post_create_coupons'
require 'openapi_client/models/product_division'
require 'openapi_client/models/return_sales'
require 'openapi_client/models/sales_division'
require 'openapi_client/models/sex'
require 'openapi_client/models/sort'
require 'openapi_client/models/staff'
require 'openapi_client/models/status'
require 'openapi_client/models/store'
require 'openapi_client/models/store_division'
require 'openapi_client/models/tax_division'
require 'openapi_client/models/transaction_detail'
require 'openapi_client/models/transaction_detail_division'
require 'openapi_client/models/transaction_head_division'
require 'openapi_client/models/update_customer_point_request'
require 'openapi_client/models/update_customer_point_response'
require 'openapi_client/models/update_store_request'
require 'openapi_client/models/update_store_request_receipt_print_info'
require 'openapi_client/models/update_store_response'
require 'openapi_client/models/update_store_response_receipt_print_info'
require 'openapi_client/models/with_details'
require 'openapi_client/models/with_enum'

# APIs
require 'openapi_client/api/default_api'

module OpenapiClient
  class << self
    # Customize default settings for the SDK using block.
    #   OpenapiClient.configure do |config|
    #     config.username = "xxx"
    #     config.password = "xxx"
    #   end
    # If no block given, return the default Configuration object.
    def configure
      if block_given?
        yield(Configuration.default)
      else
        Configuration.default
      end
    end
  end
end