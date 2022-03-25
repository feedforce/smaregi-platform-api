=begin
#スマレジ

#No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

The version of the OpenAPI document: 1.0.0

Generated by: https://openapi-generator.tech
OpenAPI Generator version: 5.1.1

=end

require 'date'
require 'time'

module OpenapiClient
  class PointSpendDivision
    FromTaxIncluded = "1".freeze
    FromTaxExcluded = "2".freeze

    # Builds the enum from string
    # @param [String] The enum value in the form of the string
    # @return [String] The enum value
    def self.build_from_hash(value)
      new.build_from_hash(value)
    end

    # Builds the enum from string
    # @param [String] The enum value in the form of the string
    # @return [String] The enum value
    def build_from_hash(value)
      constantValues = PointSpendDivision.constants.select { |c| PointSpendDivision::const_get(c) == value }
      raise "Invalid ENUM value #{value} for class #PointSpendDivision" if constantValues.empty?
      value
    end
  end
end
