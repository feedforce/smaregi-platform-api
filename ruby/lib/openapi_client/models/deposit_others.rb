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
  class DepositOthers
    attr_accessor :transaction_head_id

    attr_accessor :no

    attr_accessor :payment_method_id

    attr_accessor :payment_method_name

    attr_accessor :deposit_others

    attr_accessor :payment_unit_price

    attr_accessor :payment_change_flag

    attr_accessor :payment_division

    attr_accessor :payment_securities_flag

    # Attribute mapping from ruby-style variable name to JSON key.
    def self.attribute_map
      {
        :'transaction_head_id' => :'transactionHeadId',
        :'no' => :'no',
        :'payment_method_id' => :'paymentMethodId',
        :'payment_method_name' => :'paymentMethodName',
        :'deposit_others' => :'depositOthers',
        :'payment_unit_price' => :'paymentUnitPrice',
        :'payment_change_flag' => :'paymentChangeFlag',
        :'payment_division' => :'paymentDivision',
        :'payment_securities_flag' => :'paymentSecuritiesFlag'
      }
    end

    # Returns all the JSON keys this model knows about
    def self.acceptable_attributes
      attribute_map.values
    end

    # Attribute type mapping.
    def self.openapi_types
      {
        :'transaction_head_id' => :'String',
        :'no' => :'String',
        :'payment_method_id' => :'String',
        :'payment_method_name' => :'String',
        :'deposit_others' => :'String',
        :'payment_unit_price' => :'String',
        :'payment_change_flag' => :'Float',
        :'payment_division' => :'String',
        :'payment_securities_flag' => :'Float'
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
        fail ArgumentError, "The input argument (attributes) must be a hash in `OpenapiClient::DepositOthers` initialize method"
      end

      # check to see if the attribute exists and convert string to symbol for hash key
      attributes = attributes.each_with_object({}) { |(k, v), h|
        if (!self.class.attribute_map.key?(k.to_sym))
          fail ArgumentError, "`#{k}` is not a valid attribute in `OpenapiClient::DepositOthers`. Please check the name to make sure it's valid. List of attributes: " + self.class.attribute_map.keys.inspect
        end
        h[k.to_sym] = v
      }

      if attributes.key?(:'transaction_head_id')
        self.transaction_head_id = attributes[:'transaction_head_id']
      end

      if attributes.key?(:'no')
        self.no = attributes[:'no']
      end

      if attributes.key?(:'payment_method_id')
        self.payment_method_id = attributes[:'payment_method_id']
      end

      if attributes.key?(:'payment_method_name')
        self.payment_method_name = attributes[:'payment_method_name']
      end

      if attributes.key?(:'deposit_others')
        self.deposit_others = attributes[:'deposit_others']
      end

      if attributes.key?(:'payment_unit_price')
        self.payment_unit_price = attributes[:'payment_unit_price']
      end

      if attributes.key?(:'payment_change_flag')
        self.payment_change_flag = attributes[:'payment_change_flag']
      end

      if attributes.key?(:'payment_division')
        self.payment_division = attributes[:'payment_division']
      end

      if attributes.key?(:'payment_securities_flag')
        self.payment_securities_flag = attributes[:'payment_securities_flag']
      end
    end

    # Show invalid properties with the reasons. Usually used together with valid?
    # @return Array for valid properties with the reasons
    def list_invalid_properties
      invalid_properties = Array.new
      if !@transaction_head_id.nil? && @transaction_head_id.to_s.length < 1
        invalid_properties.push('invalid value for "transaction_head_id", the character length must be great than or equal to 1.')
      end

      if !@no.nil? && @no.to_s.length < 1
        invalid_properties.push('invalid value for "no", the character length must be great than or equal to 1.')
      end

      if !@payment_method_id.nil? && @payment_method_id.to_s.length < 1
        invalid_properties.push('invalid value for "payment_method_id", the character length must be great than or equal to 1.')
      end

      if !@payment_method_name.nil? && @payment_method_name.to_s.length < 1
        invalid_properties.push('invalid value for "payment_method_name", the character length must be great than or equal to 1.')
      end

      if !@deposit_others.nil? && @deposit_others.to_s.length < 1
        invalid_properties.push('invalid value for "deposit_others", the character length must be great than or equal to 1.')
      end

      if !@payment_unit_price.nil? && @payment_unit_price.to_s.length < 1
        invalid_properties.push('invalid value for "payment_unit_price", the character length must be great than or equal to 1.')
      end

      if !@payment_division.nil? && @payment_division.to_s.length < 1
        invalid_properties.push('invalid value for "payment_division", the character length must be great than or equal to 1.')
      end

      invalid_properties
    end

    # Check to see if the all the properties in the model are valid
    # @return true if the model is valid
    def valid?
      return false if !@transaction_head_id.nil? && @transaction_head_id.to_s.length < 1
      return false if !@no.nil? && @no.to_s.length < 1
      return false if !@payment_method_id.nil? && @payment_method_id.to_s.length < 1
      return false if !@payment_method_name.nil? && @payment_method_name.to_s.length < 1
      return false if !@deposit_others.nil? && @deposit_others.to_s.length < 1
      return false if !@payment_unit_price.nil? && @payment_unit_price.to_s.length < 1
      return false if !@payment_division.nil? && @payment_division.to_s.length < 1
      true
    end

    # Custom attribute writer method with validation
    # @param [Object] transaction_head_id Value to be assigned
    def transaction_head_id=(transaction_head_id)
      if !transaction_head_id.nil? && transaction_head_id.to_s.length < 1
        fail ArgumentError, 'invalid value for "transaction_head_id", the character length must be great than or equal to 1.'
      end

      @transaction_head_id = transaction_head_id
    end

    # Custom attribute writer method with validation
    # @param [Object] no Value to be assigned
    def no=(no)
      if !no.nil? && no.to_s.length < 1
        fail ArgumentError, 'invalid value for "no", the character length must be great than or equal to 1.'
      end

      @no = no
    end

    # Custom attribute writer method with validation
    # @param [Object] payment_method_id Value to be assigned
    def payment_method_id=(payment_method_id)
      if !payment_method_id.nil? && payment_method_id.to_s.length < 1
        fail ArgumentError, 'invalid value for "payment_method_id", the character length must be great than or equal to 1.'
      end

      @payment_method_id = payment_method_id
    end

    # Custom attribute writer method with validation
    # @param [Object] payment_method_name Value to be assigned
    def payment_method_name=(payment_method_name)
      if !payment_method_name.nil? && payment_method_name.to_s.length < 1
        fail ArgumentError, 'invalid value for "payment_method_name", the character length must be great than or equal to 1.'
      end

      @payment_method_name = payment_method_name
    end

    # Custom attribute writer method with validation
    # @param [Object] deposit_others Value to be assigned
    def deposit_others=(deposit_others)
      if !deposit_others.nil? && deposit_others.to_s.length < 1
        fail ArgumentError, 'invalid value for "deposit_others", the character length must be great than or equal to 1.'
      end

      @deposit_others = deposit_others
    end

    # Custom attribute writer method with validation
    # @param [Object] payment_unit_price Value to be assigned
    def payment_unit_price=(payment_unit_price)
      if !payment_unit_price.nil? && payment_unit_price.to_s.length < 1
        fail ArgumentError, 'invalid value for "payment_unit_price", the character length must be great than or equal to 1.'
      end

      @payment_unit_price = payment_unit_price
    end

    # Custom attribute writer method with validation
    # @param [Object] payment_division Value to be assigned
    def payment_division=(payment_division)
      if !payment_division.nil? && payment_division.to_s.length < 1
        fail ArgumentError, 'invalid value for "payment_division", the character length must be great than or equal to 1.'
      end

      @payment_division = payment_division
    end

    # Checks equality by comparing each attribute.
    # @param [Object] Object to be compared
    def ==(o)
      return true if self.equal?(o)
      self.class == o.class &&
          transaction_head_id == o.transaction_head_id &&
          no == o.no &&
          payment_method_id == o.payment_method_id &&
          payment_method_name == o.payment_method_name &&
          deposit_others == o.deposit_others &&
          payment_unit_price == o.payment_unit_price &&
          payment_change_flag == o.payment_change_flag &&
          payment_division == o.payment_division &&
          payment_securities_flag == o.payment_securities_flag
    end

    # @see the `==` method
    # @param [Object] Object to be compared
    def eql?(o)
      self == o
    end

    # Calculates hash code according to all attributes.
    # @return [Integer] Hash code
    def hash
      [transaction_head_id, no, payment_method_id, payment_method_name, deposit_others, payment_unit_price, payment_change_flag, payment_division, payment_securities_flag].hash
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