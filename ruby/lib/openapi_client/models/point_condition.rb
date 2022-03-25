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
  class PointCondition
    attr_accessor :store_id

    attr_accessor :point_use_division

    attr_accessor :spend_rate

    attr_accessor :point_giving_unit_price

    attr_accessor :point_giving_unit

    attr_accessor :point_giving_division

    attr_accessor :point_use_unit

    attr_accessor :point_spend_division

    attr_accessor :point_spend_limit_division

    attr_accessor :expire_division

    attr_accessor :expire_limit

    attr_accessor :mileage_division

    # Attribute mapping from ruby-style variable name to JSON key.
    def self.attribute_map
      {
        :'store_id' => :'storeId',
        :'point_use_division' => :'pointUseDivision',
        :'spend_rate' => :'spendRate',
        :'point_giving_unit_price' => :'pointGivingUnitPrice',
        :'point_giving_unit' => :'pointGivingUnit',
        :'point_giving_division' => :'pointGivingDivision',
        :'point_use_unit' => :'pointUseUnit',
        :'point_spend_division' => :'pointSpendDivision',
        :'point_spend_limit_division' => :'pointSpendLimitDivision',
        :'expire_division' => :'expireDivision',
        :'expire_limit' => :'expireLimit',
        :'mileage_division' => :'mileageDivision'
      }
    end

    # Returns all the JSON keys this model knows about
    def self.acceptable_attributes
      attribute_map.values
    end

    # Attribute type mapping.
    def self.openapi_types
      {
        :'store_id' => :'String',
        :'point_use_division' => :'PointUseDivision',
        :'spend_rate' => :'String',
        :'point_giving_unit_price' => :'String',
        :'point_giving_unit' => :'String',
        :'point_giving_division' => :'PointGivingDivision',
        :'point_use_unit' => :'String',
        :'point_spend_division' => :'PointSpendDivision',
        :'point_spend_limit_division' => :'PointSpendLimitDivision',
        :'expire_division' => :'ExpireDivision',
        :'expire_limit' => :'String',
        :'mileage_division' => :'MileageDivision'
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
        fail ArgumentError, "The input argument (attributes) must be a hash in `OpenapiClient::PointCondition` initialize method"
      end

      # check to see if the attribute exists and convert string to symbol for hash key
      attributes = attributes.each_with_object({}) { |(k, v), h|
        if (!self.class.attribute_map.key?(k.to_sym))
          fail ArgumentError, "`#{k}` is not a valid attribute in `OpenapiClient::PointCondition`. Please check the name to make sure it's valid. List of attributes: " + self.class.attribute_map.keys.inspect
        end
        h[k.to_sym] = v
      }

      if attributes.key?(:'store_id')
        self.store_id = attributes[:'store_id']
      end

      if attributes.key?(:'point_use_division')
        self.point_use_division = attributes[:'point_use_division']
      end

      if attributes.key?(:'spend_rate')
        self.spend_rate = attributes[:'spend_rate']
      end

      if attributes.key?(:'point_giving_unit_price')
        self.point_giving_unit_price = attributes[:'point_giving_unit_price']
      end

      if attributes.key?(:'point_giving_unit')
        self.point_giving_unit = attributes[:'point_giving_unit']
      end

      if attributes.key?(:'point_giving_division')
        self.point_giving_division = attributes[:'point_giving_division']
      end

      if attributes.key?(:'point_use_unit')
        self.point_use_unit = attributes[:'point_use_unit']
      end

      if attributes.key?(:'point_spend_division')
        self.point_spend_division = attributes[:'point_spend_division']
      end

      if attributes.key?(:'point_spend_limit_division')
        self.point_spend_limit_division = attributes[:'point_spend_limit_division']
      end

      if attributes.key?(:'expire_division')
        self.expire_division = attributes[:'expire_division']
      end

      if attributes.key?(:'expire_limit')
        self.expire_limit = attributes[:'expire_limit']
      end

      if attributes.key?(:'mileage_division')
        self.mileage_division = attributes[:'mileage_division']
      end
    end

    # Show invalid properties with the reasons. Usually used together with valid?
    # @return Array for valid properties with the reasons
    def list_invalid_properties
      invalid_properties = Array.new
      if !@store_id.nil? && @store_id.to_s.length < 1
        invalid_properties.push('invalid value for "store_id", the character length must be great than or equal to 1.')
      end

      if !@spend_rate.nil? && @spend_rate.to_s.length < 1
        invalid_properties.push('invalid value for "spend_rate", the character length must be great than or equal to 1.')
      end

      if !@point_giving_unit_price.nil? && @point_giving_unit_price.to_s.length < 1
        invalid_properties.push('invalid value for "point_giving_unit_price", the character length must be great than or equal to 1.')
      end

      if !@point_giving_unit.nil? && @point_giving_unit.to_s.length < 1
        invalid_properties.push('invalid value for "point_giving_unit", the character length must be great than or equal to 1.')
      end

      if !@point_use_unit.nil? && @point_use_unit.to_s.length < 1
        invalid_properties.push('invalid value for "point_use_unit", the character length must be great than or equal to 1.')
      end

      if !@expire_limit.nil? && @expire_limit.to_s.length < 1
        invalid_properties.push('invalid value for "expire_limit", the character length must be great than or equal to 1.')
      end

      invalid_properties
    end

    # Check to see if the all the properties in the model are valid
    # @return true if the model is valid
    def valid?
      return false if !@store_id.nil? && @store_id.to_s.length < 1
      return false if !@spend_rate.nil? && @spend_rate.to_s.length < 1
      return false if !@point_giving_unit_price.nil? && @point_giving_unit_price.to_s.length < 1
      return false if !@point_giving_unit.nil? && @point_giving_unit.to_s.length < 1
      return false if !@point_use_unit.nil? && @point_use_unit.to_s.length < 1
      return false if !@expire_limit.nil? && @expire_limit.to_s.length < 1
      true
    end

    # Custom attribute writer method with validation
    # @param [Object] store_id Value to be assigned
    def store_id=(store_id)
      if !store_id.nil? && store_id.to_s.length < 1
        fail ArgumentError, 'invalid value for "store_id", the character length must be great than or equal to 1.'
      end

      @store_id = store_id
    end

    # Custom attribute writer method with validation
    # @param [Object] spend_rate Value to be assigned
    def spend_rate=(spend_rate)
      if !spend_rate.nil? && spend_rate.to_s.length < 1
        fail ArgumentError, 'invalid value for "spend_rate", the character length must be great than or equal to 1.'
      end

      @spend_rate = spend_rate
    end

    # Custom attribute writer method with validation
    # @param [Object] point_giving_unit_price Value to be assigned
    def point_giving_unit_price=(point_giving_unit_price)
      if !point_giving_unit_price.nil? && point_giving_unit_price.to_s.length < 1
        fail ArgumentError, 'invalid value for "point_giving_unit_price", the character length must be great than or equal to 1.'
      end

      @point_giving_unit_price = point_giving_unit_price
    end

    # Custom attribute writer method with validation
    # @param [Object] point_giving_unit Value to be assigned
    def point_giving_unit=(point_giving_unit)
      if !point_giving_unit.nil? && point_giving_unit.to_s.length < 1
        fail ArgumentError, 'invalid value for "point_giving_unit", the character length must be great than or equal to 1.'
      end

      @point_giving_unit = point_giving_unit
    end

    # Custom attribute writer method with validation
    # @param [Object] point_use_unit Value to be assigned
    def point_use_unit=(point_use_unit)
      if !point_use_unit.nil? && point_use_unit.to_s.length < 1
        fail ArgumentError, 'invalid value for "point_use_unit", the character length must be great than or equal to 1.'
      end

      @point_use_unit = point_use_unit
    end

    # Custom attribute writer method with validation
    # @param [Object] expire_limit Value to be assigned
    def expire_limit=(expire_limit)
      if !expire_limit.nil? && expire_limit.to_s.length < 1
        fail ArgumentError, 'invalid value for "expire_limit", the character length must be great than or equal to 1.'
      end

      @expire_limit = expire_limit
    end

    # Checks equality by comparing each attribute.
    # @param [Object] Object to be compared
    def ==(o)
      return true if self.equal?(o)
      self.class == o.class &&
          store_id == o.store_id &&
          point_use_division == o.point_use_division &&
          spend_rate == o.spend_rate &&
          point_giving_unit_price == o.point_giving_unit_price &&
          point_giving_unit == o.point_giving_unit &&
          point_giving_division == o.point_giving_division &&
          point_use_unit == o.point_use_unit &&
          point_spend_division == o.point_spend_division &&
          point_spend_limit_division == o.point_spend_limit_division &&
          expire_division == o.expire_division &&
          expire_limit == o.expire_limit &&
          mileage_division == o.mileage_division
    end

    # @see the `==` method
    # @param [Object] Object to be compared
    def eql?(o)
      self == o
    end

    # Calculates hash code according to all attributes.
    # @return [Integer] Hash code
    def hash
      [store_id, point_use_division, spend_rate, point_giving_unit_price, point_giving_unit, point_giving_division, point_use_unit, point_spend_division, point_spend_limit_division, expire_division, expire_limit, mileage_division].hash
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
