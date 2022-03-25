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
  class UpdateCustomerPointResponse
    # 会員ID
    attr_accessor :customer_id

    # マイル
    attr_accessor :mile

    # ポイント
    attr_accessor :point

    # ポイント失効予定日：会員必須項目設定で必須項目に設定されている場合必須
    attr_accessor :point_expire_date

    # 更新日時：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD]
    attr_accessor :upd_date_time

    # Attribute mapping from ruby-style variable name to JSON key.
    def self.attribute_map
      {
        :'customer_id' => :'customerId',
        :'mile' => :'mile',
        :'point' => :'point',
        :'point_expire_date' => :'pointExpireDate',
        :'upd_date_time' => :'updDateTime'
      }
    end

    # Returns all the JSON keys this model knows about
    def self.acceptable_attributes
      attribute_map.values
    end

    # Attribute type mapping.
    def self.openapi_types
      {
        :'customer_id' => :'String',
        :'mile' => :'String',
        :'point' => :'String',
        :'point_expire_date' => :'String',
        :'upd_date_time' => :'String'
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
        fail ArgumentError, "The input argument (attributes) must be a hash in `OpenapiClient::UpdateCustomerPointResponse` initialize method"
      end

      # check to see if the attribute exists and convert string to symbol for hash key
      attributes = attributes.each_with_object({}) { |(k, v), h|
        if (!self.class.attribute_map.key?(k.to_sym))
          fail ArgumentError, "`#{k}` is not a valid attribute in `OpenapiClient::UpdateCustomerPointResponse`. Please check the name to make sure it's valid. List of attributes: " + self.class.attribute_map.keys.inspect
        end
        h[k.to_sym] = v
      }

      if attributes.key?(:'customer_id')
        self.customer_id = attributes[:'customer_id']
      end

      if attributes.key?(:'mile')
        self.mile = attributes[:'mile']
      end

      if attributes.key?(:'point')
        self.point = attributes[:'point']
      end

      if attributes.key?(:'point_expire_date')
        self.point_expire_date = attributes[:'point_expire_date']
      end

      if attributes.key?(:'upd_date_time')
        self.upd_date_time = attributes[:'upd_date_time']
      end
    end

    # Show invalid properties with the reasons. Usually used together with valid?
    # @return Array for valid properties with the reasons
    def list_invalid_properties
      invalid_properties = Array.new
      if !@customer_id.nil? && @customer_id.to_s.length < 1
        invalid_properties.push('invalid value for "customer_id", the character length must be great than or equal to 1.')
      end

      if !@mile.nil? && @mile.to_s.length < 1
        invalid_properties.push('invalid value for "mile", the character length must be great than or equal to 1.')
      end

      if !@point.nil? && @point.to_s.length < 1
        invalid_properties.push('invalid value for "point", the character length must be great than or equal to 1.')
      end

      if !@point_expire_date.nil? && @point_expire_date.to_s.length < 1
        invalid_properties.push('invalid value for "point_expire_date", the character length must be great than or equal to 1.')
      end

      if !@upd_date_time.nil? && @upd_date_time.to_s.length < 1
        invalid_properties.push('invalid value for "upd_date_time", the character length must be great than or equal to 1.')
      end

      invalid_properties
    end

    # Check to see if the all the properties in the model are valid
    # @return true if the model is valid
    def valid?
      return false if !@customer_id.nil? && @customer_id.to_s.length < 1
      return false if !@mile.nil? && @mile.to_s.length < 1
      return false if !@point.nil? && @point.to_s.length < 1
      return false if !@point_expire_date.nil? && @point_expire_date.to_s.length < 1
      return false if !@upd_date_time.nil? && @upd_date_time.to_s.length < 1
      true
    end

    # Custom attribute writer method with validation
    # @param [Object] customer_id Value to be assigned
    def customer_id=(customer_id)
      if !customer_id.nil? && customer_id.to_s.length < 1
        fail ArgumentError, 'invalid value for "customer_id", the character length must be great than or equal to 1.'
      end

      @customer_id = customer_id
    end

    # Custom attribute writer method with validation
    # @param [Object] mile Value to be assigned
    def mile=(mile)
      if !mile.nil? && mile.to_s.length < 1
        fail ArgumentError, 'invalid value for "mile", the character length must be great than or equal to 1.'
      end

      @mile = mile
    end

    # Custom attribute writer method with validation
    # @param [Object] point Value to be assigned
    def point=(point)
      if !point.nil? && point.to_s.length < 1
        fail ArgumentError, 'invalid value for "point", the character length must be great than or equal to 1.'
      end

      @point = point
    end

    # Custom attribute writer method with validation
    # @param [Object] point_expire_date Value to be assigned
    def point_expire_date=(point_expire_date)
      if !point_expire_date.nil? && point_expire_date.to_s.length < 1
        fail ArgumentError, 'invalid value for "point_expire_date", the character length must be great than or equal to 1.'
      end

      @point_expire_date = point_expire_date
    end

    # Custom attribute writer method with validation
    # @param [Object] upd_date_time Value to be assigned
    def upd_date_time=(upd_date_time)
      if !upd_date_time.nil? && upd_date_time.to_s.length < 1
        fail ArgumentError, 'invalid value for "upd_date_time", the character length must be great than or equal to 1.'
      end

      @upd_date_time = upd_date_time
    end

    # Checks equality by comparing each attribute.
    # @param [Object] Object to be compared
    def ==(o)
      return true if self.equal?(o)
      self.class == o.class &&
          customer_id == o.customer_id &&
          mile == o.mile &&
          point == o.point &&
          point_expire_date == o.point_expire_date &&
          upd_date_time == o.upd_date_time
    end

    # @see the `==` method
    # @param [Object] Object to be compared
    def eql?(o)
      self == o
    end

    # Calculates hash code according to all attributes.
    # @return [Integer] Hash code
    def hash
      [customer_id, mile, point, point_expire_date, upd_date_time].hash
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
