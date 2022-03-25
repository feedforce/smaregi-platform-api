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
  class PostCreateCoupons
    attr_accessor :coupon_name

    attr_accessor :coupon_division

    attr_accessor :serial_number

    attr_accessor :summary

    attr_accessor :award_type

    attr_accessor :award_value

    attr_accessor :apply_condition_division

    attr_accessor :min_target_price

    attr_accessor :max_target_price

    attr_accessor :start_date

    attr_accessor :end_date

    # Attribute mapping from ruby-style variable name to JSON key.
    def self.attribute_map
      {
        :'coupon_name' => :'couponName',
        :'coupon_division' => :'couponDivision',
        :'serial_number' => :'serialNumber',
        :'summary' => :'summary',
        :'award_type' => :'awardType',
        :'award_value' => :'awardValue',
        :'apply_condition_division' => :'applyConditionDivision',
        :'min_target_price' => :'minTargetPrice',
        :'max_target_price' => :'maxTargetPrice',
        :'start_date' => :'startDate',
        :'end_date' => :'endDate'
      }
    end

    # Returns all the JSON keys this model knows about
    def self.acceptable_attributes
      attribute_map.values
    end

    # Attribute type mapping.
    def self.openapi_types
      {
        :'coupon_name' => :'String',
        :'coupon_division' => :'CouponDivision',
        :'serial_number' => :'String',
        :'summary' => :'String',
        :'award_type' => :'AwardType',
        :'award_value' => :'String',
        :'apply_condition_division' => :'ApplyConditionDivision',
        :'min_target_price' => :'String',
        :'max_target_price' => :'String',
        :'start_date' => :'String',
        :'end_date' => :'String'
      }
    end

    # List of attributes with nullable: true
    def self.openapi_nullable
      Set.new([
      ])
    end

    # Initializes the object
    # @param [Hash] attributes Model attributes in the form of hash
    def initialize(attributes = {})
      if (!attributes.is_a?(Hash))
        fail ArgumentError, "The input argument (attributes) must be a hash in `OpenapiClient::PostCreateCoupons` initialize method"
      end

      # check to see if the attribute exists and convert string to symbol for hash key
      attributes = attributes.each_with_object({}) { |(k, v), h|
        if (!self.class.attribute_map.key?(k.to_sym))
          fail ArgumentError, "`#{k}` is not a valid attribute in `OpenapiClient::PostCreateCoupons`. Please check the name to make sure it's valid. List of attributes: " + self.class.attribute_map.keys.inspect
        end
        h[k.to_sym] = v
      }

      if attributes.key?(:'coupon_name')
        self.coupon_name = attributes[:'coupon_name']
      end

      if attributes.key?(:'coupon_division')
        self.coupon_division = attributes[:'coupon_division']
      end

      if attributes.key?(:'serial_number')
        self.serial_number = attributes[:'serial_number']
      end

      if attributes.key?(:'summary')
        self.summary = attributes[:'summary']
      end

      if attributes.key?(:'award_type')
        self.award_type = attributes[:'award_type']
      end

      if attributes.key?(:'award_value')
        self.award_value = attributes[:'award_value']
      end

      if attributes.key?(:'apply_condition_division')
        self.apply_condition_division = attributes[:'apply_condition_division']
      end

      if attributes.key?(:'min_target_price')
        self.min_target_price = attributes[:'min_target_price']
      end

      if attributes.key?(:'max_target_price')
        self.max_target_price = attributes[:'max_target_price']
      end

      if attributes.key?(:'start_date')
        self.start_date = attributes[:'start_date']
      end

      if attributes.key?(:'end_date')
        self.end_date = attributes[:'end_date']
      end
    end

    # Show invalid properties with the reasons. Usually used together with valid?
    # @return Array for valid properties with the reasons
    def list_invalid_properties
      invalid_properties = Array.new
      if @coupon_name.nil?
        invalid_properties.push('invalid value for "coupon_name", coupon_name cannot be nil.')
      end

      if @coupon_name.to_s.length < 1
        invalid_properties.push('invalid value for "coupon_name", the character length must be great than or equal to 1.')
      end

      if @serial_number.nil?
        invalid_properties.push('invalid value for "serial_number", serial_number cannot be nil.')
      end

      if @serial_number.to_s.length < 1
        invalid_properties.push('invalid value for "serial_number", the character length must be great than or equal to 1.')
      end

      if !@summary.nil? && @summary.to_s.length < 1
        invalid_properties.push('invalid value for "summary", the character length must be great than or equal to 1.')
      end

      if @award_type.nil?
        invalid_properties.push('invalid value for "award_type", award_type cannot be nil.')
      end

      if @award_value.nil?
        invalid_properties.push('invalid value for "award_value", award_value cannot be nil.')
      end

      if @award_value.to_s.length < 1
        invalid_properties.push('invalid value for "award_value", the character length must be great than or equal to 1.')
      end

      if @apply_condition_division.nil?
        invalid_properties.push('invalid value for "apply_condition_division", apply_condition_division cannot be nil.')
      end

      if !@min_target_price.nil? && @min_target_price.to_s.length < 1
        invalid_properties.push('invalid value for "min_target_price", the character length must be great than or equal to 1.')
      end

      if !@max_target_price.nil? && @max_target_price.to_s.length < 1
        invalid_properties.push('invalid value for "max_target_price", the character length must be great than or equal to 1.')
      end

      if !@start_date.nil? && @start_date.to_s.length < 1
        invalid_properties.push('invalid value for "start_date", the character length must be great than or equal to 1.')
      end

      if !@end_date.nil? && @end_date.to_s.length < 1
        invalid_properties.push('invalid value for "end_date", the character length must be great than or equal to 1.')
      end

      invalid_properties
    end

    # Check to see if the all the properties in the model are valid
    # @return true if the model is valid
    def valid?
      return false if @coupon_name.nil?
      return false if @coupon_name.to_s.length < 1
      return false if @serial_number.nil?
      return false if @serial_number.to_s.length < 1
      return false if !@summary.nil? && @summary.to_s.length < 1
      return false if @award_type.nil?
      return false if @award_value.nil?
      return false if @award_value.to_s.length < 1
      return false if @apply_condition_division.nil?
      return false if !@min_target_price.nil? && @min_target_price.to_s.length < 1
      return false if !@max_target_price.nil? && @max_target_price.to_s.length < 1
      return false if !@start_date.nil? && @start_date.to_s.length < 1
      return false if !@end_date.nil? && @end_date.to_s.length < 1
      true
    end

    # Custom attribute writer method with validation
    # @param [Object] coupon_name Value to be assigned
    def coupon_name=(coupon_name)
      if coupon_name.nil?
        fail ArgumentError, 'coupon_name cannot be nil'
      end

      if coupon_name.to_s.length < 1
        fail ArgumentError, 'invalid value for "coupon_name", the character length must be great than or equal to 1.'
      end

      @coupon_name = coupon_name
    end

    # Custom attribute writer method with validation
    # @param [Object] serial_number Value to be assigned
    def serial_number=(serial_number)
      if serial_number.nil?
        fail ArgumentError, 'serial_number cannot be nil'
      end

      if serial_number.to_s.length < 1
        fail ArgumentError, 'invalid value for "serial_number", the character length must be great than or equal to 1.'
      end

      @serial_number = serial_number
    end

    # Custom attribute writer method with validation
    # @param [Object] summary Value to be assigned
    def summary=(summary)
      if !summary.nil? && summary.to_s.length < 1
        fail ArgumentError, 'invalid value for "summary", the character length must be great than or equal to 1.'
      end

      @summary = summary
    end

    # Custom attribute writer method with validation
    # @param [Object] award_value Value to be assigned
    def award_value=(award_value)
      if award_value.nil?
        fail ArgumentError, 'award_value cannot be nil'
      end

      if award_value.to_s.length < 1
        fail ArgumentError, 'invalid value for "award_value", the character length must be great than or equal to 1.'
      end

      @award_value = award_value
    end

    # Custom attribute writer method with validation
    # @param [Object] min_target_price Value to be assigned
    def min_target_price=(min_target_price)
      if !min_target_price.nil? && min_target_price.to_s.length < 1
        fail ArgumentError, 'invalid value for "min_target_price", the character length must be great than or equal to 1.'
      end

      @min_target_price = min_target_price
    end

    # Custom attribute writer method with validation
    # @param [Object] max_target_price Value to be assigned
    def max_target_price=(max_target_price)
      if !max_target_price.nil? && max_target_price.to_s.length < 1
        fail ArgumentError, 'invalid value for "max_target_price", the character length must be great than or equal to 1.'
      end

      @max_target_price = max_target_price
    end

    # Custom attribute writer method with validation
    # @param [Object] start_date Value to be assigned
    def start_date=(start_date)
      if !start_date.nil? && start_date.to_s.length < 1
        fail ArgumentError, 'invalid value for "start_date", the character length must be great than or equal to 1.'
      end

      @start_date = start_date
    end

    # Custom attribute writer method with validation
    # @param [Object] end_date Value to be assigned
    def end_date=(end_date)
      if !end_date.nil? && end_date.to_s.length < 1
        fail ArgumentError, 'invalid value for "end_date", the character length must be great than or equal to 1.'
      end

      @end_date = end_date
    end

    # Checks equality by comparing each attribute.
    # @param [Object] Object to be compared
    def ==(o)
      return true if self.equal?(o)
      self.class == o.class &&
          coupon_name == o.coupon_name &&
          coupon_division == o.coupon_division &&
          serial_number == o.serial_number &&
          summary == o.summary &&
          award_type == o.award_type &&
          award_value == o.award_value &&
          apply_condition_division == o.apply_condition_division &&
          min_target_price == o.min_target_price &&
          max_target_price == o.max_target_price &&
          start_date == o.start_date &&
          end_date == o.end_date
    end

    # @see the `==` method
    # @param [Object] Object to be compared
    def eql?(o)
      self == o
    end

    # Calculates hash code according to all attributes.
    # @return [Integer] Hash code
    def hash
      [coupon_name, coupon_division, serial_number, summary, award_type, award_value, apply_condition_division, min_target_price, max_target_price, start_date, end_date].hash
    end

    # Builds the object from hash
    # @param [Hash] attributes Model attributes in the form of hash
    # @return [Object] Returns the model itself
    def self.build_from_hash(attributes)
      new.build_from_hash(attributes)
    end

    # Builds the object from hash
    # @param [Hash] attributes Model attributes in the form of hash
    # @return [Object] Returns the model itself
    def build_from_hash(attributes)
      return nil unless attributes.is_a?(Hash)
      self.class.openapi_types.each_pair do |key, type|
        if attributes[self.class.attribute_map[key]].nil? && self.class.openapi_nullable.include?(key)
          self.send("#{key}=", nil)
        elsif type =~ /\AArray<(.*)>/i
          # check to ensure the input is an array given that the attribute
          # is documented as an array but the input is not
          if attributes[self.class.attribute_map[key]].is_a?(Array)
            self.send("#{key}=", attributes[self.class.attribute_map[key]].map { |v| _deserialize($1, v) })
          end
        elsif !attributes[self.class.attribute_map[key]].nil?
          self.send("#{key}=", _deserialize(type, attributes[self.class.attribute_map[key]]))
        end
      end

      self
    end

    # Deserializes the data based on type
    # @param string type Data type
    # @param string value Value to be deserialized
    # @return [Object] Deserialized data
    def _deserialize(type, value)
      case type.to_sym
      when :Time
        Time.parse(value)
      when :Date
        Date.parse(value)
      when :String
        value.to_s
      when :Integer
        value.to_i
      when :Float
        value.to_f
      when :Boolean
        if value.to_s =~ /\A(true|t|yes|y|1)\z/i
          true
        else
          false
        end
      when :Object
        # generic object (usually a Hash), return directly
        value
      when /\AArray<(?<inner_type>.+)>\z/
        inner_type = Regexp.last_match[:inner_type]
        value.map { |v| _deserialize(inner_type, v) }
      when /\AHash<(?<k_type>.+?), (?<v_type>.+)>\z/
        k_type = Regexp.last_match[:k_type]
        v_type = Regexp.last_match[:v_type]
        {}.tap do |hash|
          value.each do |k, v|
            hash[_deserialize(k_type, k)] = _deserialize(v_type, v)
          end
        end
      else # model
        # models (e.g. Pet) or oneOf
        klass = OpenapiClient.const_get(type)
        klass.respond_to?(:openapi_one_of) ? klass.build(value) : klass.build_from_hash(value)
      end
    end

    # Returns the string representation of the object
    # @return [String] String presentation of the object
    def to_s
      to_hash.to_s
    end

    # to_body is an alias to to_hash (backward compatibility)
    # @return [Hash] Returns the object in the form of hash
    def to_body
      to_hash
    end

    # Returns the object in the form of hash
    # @return [Hash] Returns the object in the form of hash
    def to_hash
      hash = {}
      self.class.attribute_map.each_pair do |attr, param|
        value = self.send(attr)
        if value.nil?
          is_nullable = self.class.openapi_nullable.include?(attr)
          next if !is_nullable || (is_nullable && !instance_variable_defined?(:"@#{attr}"))
        end

        hash[param] = _to_hash(value)
      end
      hash
    end

    # Outputs non-array value in the form of hash
    # For object, use to_hash. Otherwise, just return the value
    # @param [Object] value Any valid value
    # @return [Hash] Returns the value in the form of hash
    def _to_hash(value)
      if value.is_a?(Array)
        value.compact.map { |v| _to_hash(v) }
      elsif value.is_a?(Hash)
        {}.tap do |hash|
          value.each { |k, v| hash[k] = _to_hash(v) }
        end
      elsif value.respond_to? :to_hash
        value.to_hash
      else
        value
      end
    end

  end

end
