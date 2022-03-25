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
  class Layaway
    attr_accessor :transaction_head_id

    attr_accessor :pick_up_date

    attr_accessor :status

    attr_accessor :part_payment

    attr_accessor :part_payment_class

    attr_accessor :pick_up_transaction_head_id

    attr_accessor :disabled_edit

    # Attribute mapping from ruby-style variable name to JSON key.
    def self.attribute_map
      {
        :'transaction_head_id' => :'transactionHeadId',
        :'pick_up_date' => :'pickUpDate',
        :'status' => :'status',
        :'part_payment' => :'partPayment',
        :'part_payment_class' => :'partPaymentClass',
        :'pick_up_transaction_head_id' => :'pickUpTransactionHeadId',
        :'disabled_edit' => :'disabledEdit'
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
        :'pick_up_date' => :'String',
        :'status' => :'String',
        :'part_payment' => :'String',
        :'part_payment_class' => :'String',
        :'pick_up_transaction_head_id' => :'String',
        :'disabled_edit' => :'String'
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
        fail ArgumentError, "The input argument (attributes) must be a hash in `OpenapiClient::Layaway` initialize method"
      end

      # check to see if the attribute exists and convert string to symbol for hash key
      attributes = attributes.each_with_object({}) { |(k, v), h|
        if (!self.class.attribute_map.key?(k.to_sym))
          fail ArgumentError, "`#{k}` is not a valid attribute in `OpenapiClient::Layaway`. Please check the name to make sure it's valid. List of attributes: " + self.class.attribute_map.keys.inspect
        end
        h[k.to_sym] = v
      }

      if attributes.key?(:'transaction_head_id')
        self.transaction_head_id = attributes[:'transaction_head_id']
      end

      if attributes.key?(:'pick_up_date')
        self.pick_up_date = attributes[:'pick_up_date']
      end

      if attributes.key?(:'status')
        self.status = attributes[:'status']
      end

      if attributes.key?(:'part_payment')
        self.part_payment = attributes[:'part_payment']
      end

      if attributes.key?(:'part_payment_class')
        self.part_payment_class = attributes[:'part_payment_class']
      end

      if attributes.key?(:'pick_up_transaction_head_id')
        self.pick_up_transaction_head_id = attributes[:'pick_up_transaction_head_id']
      end

      if attributes.key?(:'disabled_edit')
        self.disabled_edit = attributes[:'disabled_edit']
      end
    end

    # Show invalid properties with the reasons. Usually used together with valid?
    # @return Array for valid properties with the reasons
    def list_invalid_properties
      invalid_properties = Array.new
      if !@transaction_head_id.nil? && @transaction_head_id.to_s.length < 1
        invalid_properties.push('invalid value for "transaction_head_id", the character length must be great than or equal to 1.')
      end

      if !@pick_up_date.nil? && @pick_up_date.to_s.length < 1
        invalid_properties.push('invalid value for "pick_up_date", the character length must be great than or equal to 1.')
      end

      if !@status.nil? && @status.to_s.length < 1
        invalid_properties.push('invalid value for "status", the character length must be great than or equal to 1.')
      end

      if !@part_payment.nil? && @part_payment.to_s.length < 1
        invalid_properties.push('invalid value for "part_payment", the character length must be great than or equal to 1.')
      end

      if !@part_payment_class.nil? && @part_payment_class.to_s.length < 1
        invalid_properties.push('invalid value for "part_payment_class", the character length must be great than or equal to 1.')
      end

      if !@pick_up_transaction_head_id.nil? && @pick_up_transaction_head_id.to_s.length < 1
        invalid_properties.push('invalid value for "pick_up_transaction_head_id", the character length must be great than or equal to 1.')
      end

      if !@disabled_edit.nil? && @disabled_edit.to_s.length < 1
        invalid_properties.push('invalid value for "disabled_edit", the character length must be great than or equal to 1.')
      end

      invalid_properties
    end

    # Check to see if the all the properties in the model are valid
    # @return true if the model is valid
    def valid?
      return false if !@transaction_head_id.nil? && @transaction_head_id.to_s.length < 1
      return false if !@pick_up_date.nil? && @pick_up_date.to_s.length < 1
      return false if !@status.nil? && @status.to_s.length < 1
      return false if !@part_payment.nil? && @part_payment.to_s.length < 1
      return false if !@part_payment_class.nil? && @part_payment_class.to_s.length < 1
      return false if !@pick_up_transaction_head_id.nil? && @pick_up_transaction_head_id.to_s.length < 1
      return false if !@disabled_edit.nil? && @disabled_edit.to_s.length < 1
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
    # @param [Object] pick_up_date Value to be assigned
    def pick_up_date=(pick_up_date)
      if !pick_up_date.nil? && pick_up_date.to_s.length < 1
        fail ArgumentError, 'invalid value for "pick_up_date", the character length must be great than or equal to 1.'
      end

      @pick_up_date = pick_up_date
    end

    # Custom attribute writer method with validation
    # @param [Object] status Value to be assigned
    def status=(status)
      if !status.nil? && status.to_s.length < 1
        fail ArgumentError, 'invalid value for "status", the character length must be great than or equal to 1.'
      end

      @status = status
    end

    # Custom attribute writer method with validation
    # @param [Object] part_payment Value to be assigned
    def part_payment=(part_payment)
      if !part_payment.nil? && part_payment.to_s.length < 1
        fail ArgumentError, 'invalid value for "part_payment", the character length must be great than or equal to 1.'
      end

      @part_payment = part_payment
    end

    # Custom attribute writer method with validation
    # @param [Object] part_payment_class Value to be assigned
    def part_payment_class=(part_payment_class)
      if !part_payment_class.nil? && part_payment_class.to_s.length < 1
        fail ArgumentError, 'invalid value for "part_payment_class", the character length must be great than or equal to 1.'
      end

      @part_payment_class = part_payment_class
    end

    # Custom attribute writer method with validation
    # @param [Object] pick_up_transaction_head_id Value to be assigned
    def pick_up_transaction_head_id=(pick_up_transaction_head_id)
      if !pick_up_transaction_head_id.nil? && pick_up_transaction_head_id.to_s.length < 1
        fail ArgumentError, 'invalid value for "pick_up_transaction_head_id", the character length must be great than or equal to 1.'
      end

      @pick_up_transaction_head_id = pick_up_transaction_head_id
    end

    # Custom attribute writer method with validation
    # @param [Object] disabled_edit Value to be assigned
    def disabled_edit=(disabled_edit)
      if !disabled_edit.nil? && disabled_edit.to_s.length < 1
        fail ArgumentError, 'invalid value for "disabled_edit", the character length must be great than or equal to 1.'
      end

      @disabled_edit = disabled_edit
    end

    # Checks equality by comparing each attribute.
    # @param [Object] Object to be compared
    def ==(o)
      return true if self.equal?(o)
      self.class == o.class &&
          transaction_head_id == o.transaction_head_id &&
          pick_up_date == o.pick_up_date &&
          status == o.status &&
          part_payment == o.part_payment &&
          part_payment_class == o.part_payment_class &&
          pick_up_transaction_head_id == o.pick_up_transaction_head_id &&
          disabled_edit == o.disabled_edit
    end

    # @see the `==` method
    # @param [Object] Object to be compared
    def eql?(o)
      self == o
    end

    # Calculates hash code according to all attributes.
    # @return [Integer] Hash code
    def hash
      [transaction_head_id, pick_up_date, status, part_payment, part_payment_class, pick_up_transaction_head_id, disabled_edit].hash
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
