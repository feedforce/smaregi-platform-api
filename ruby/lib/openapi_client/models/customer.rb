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
  class Customer
    attr_accessor :customer_id

    attr_accessor :customer_code

    attr_accessor :customer_no

    attr_accessor :rank

    attr_accessor :staff_rank

    attr_accessor :first_name

    attr_accessor :last_name

    attr_accessor :first_kana

    attr_accessor :last_kana

    attr_accessor :sex

    attr_accessor :birth_date

    attr_accessor :point_expire_date

    attr_accessor :last_come_date_time

    attr_accessor :entry_date

    attr_accessor :leave_date

    # Attribute mapping from ruby-style variable name to JSON key.
    def self.attribute_map
      {
        :'customer_id' => :'customerId',
        :'customer_code' => :'customerCode',
        :'customer_no' => :'customerNo',
        :'rank' => :'rank',
        :'staff_rank' => :'staffRank',
        :'first_name' => :'firstName',
        :'last_name' => :'lastName',
        :'first_kana' => :'firstKana',
        :'last_kana' => :'lastKana',
        :'sex' => :'sex',
        :'birth_date' => :'birthDate',
        :'point_expire_date' => :'pointExpireDate',
        :'last_come_date_time' => :'lastComeDateTime',
        :'entry_date' => :'entryDate',
        :'leave_date' => :'leaveDate'
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
        :'customer_code' => :'String',
        :'customer_no' => :'String',
        :'rank' => :'String',
        :'staff_rank' => :'String',
        :'first_name' => :'String',
        :'last_name' => :'String',
        :'first_kana' => :'String',
        :'last_kana' => :'String',
        :'sex' => :'String',
        :'birth_date' => :'String',
        :'point_expire_date' => :'String',
        :'last_come_date_time' => :'String',
        :'entry_date' => :'String',
        :'leave_date' => :'String'
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
        fail ArgumentError, "The input argument (attributes) must be a hash in `OpenapiClient::Customer` initialize method"
      end

      # check to see if the attribute exists and convert string to symbol for hash key
      attributes = attributes.each_with_object({}) { |(k, v), h|
        if (!self.class.attribute_map.key?(k.to_sym))
          fail ArgumentError, "`#{k}` is not a valid attribute in `OpenapiClient::Customer`. Please check the name to make sure it's valid. List of attributes: " + self.class.attribute_map.keys.inspect
        end
        h[k.to_sym] = v
      }

      if attributes.key?(:'customer_id')
        self.customer_id = attributes[:'customer_id']
      end

      if attributes.key?(:'customer_code')
        self.customer_code = attributes[:'customer_code']
      end

      if attributes.key?(:'customer_no')
        self.customer_no = attributes[:'customer_no']
      end

      if attributes.key?(:'rank')
        self.rank = attributes[:'rank']
      end

      if attributes.key?(:'staff_rank')
        self.staff_rank = attributes[:'staff_rank']
      end

      if attributes.key?(:'first_name')
        self.first_name = attributes[:'first_name']
      end

      if attributes.key?(:'last_name')
        self.last_name = attributes[:'last_name']
      end

      if attributes.key?(:'first_kana')
        self.first_kana = attributes[:'first_kana']
      end

      if attributes.key?(:'last_kana')
        self.last_kana = attributes[:'last_kana']
      end

      if attributes.key?(:'sex')
        self.sex = attributes[:'sex']
      end

      if attributes.key?(:'birth_date')
        self.birth_date = attributes[:'birth_date']
      end

      if attributes.key?(:'point_expire_date')
        self.point_expire_date = attributes[:'point_expire_date']
      end

      if attributes.key?(:'last_come_date_time')
        self.last_come_date_time = attributes[:'last_come_date_time']
      end

      if attributes.key?(:'entry_date')
        self.entry_date = attributes[:'entry_date']
      end

      if attributes.key?(:'leave_date')
        self.leave_date = attributes[:'leave_date']
      end
    end

    # Show invalid properties with the reasons. Usually used together with valid?
    # @return Array for valid properties with the reasons
    def list_invalid_properties
      invalid_properties = Array.new
      if @customer_id.nil?
        invalid_properties.push('invalid value for "customer_id", customer_id cannot be nil.')
      end

      if @customer_id.to_s.length < 1
        invalid_properties.push('invalid value for "customer_id", the character length must be great than or equal to 1.')
      end

      if !@customer_code.nil? && @customer_code.to_s.length < 1
        invalid_properties.push('invalid value for "customer_code", the character length must be great than or equal to 1.')
      end

      if !@customer_no.nil? && @customer_no.to_s.length < 1
        invalid_properties.push('invalid value for "customer_no", the character length must be great than or equal to 1.')
      end

      if !@rank.nil? && @rank.to_s.length < 1
        invalid_properties.push('invalid value for "rank", the character length must be great than or equal to 1.')
      end

      if !@staff_rank.nil? && @staff_rank.to_s.length < 1
        invalid_properties.push('invalid value for "staff_rank", the character length must be great than or equal to 1.')
      end

      if !@first_name.nil? && @first_name.to_s.length < 1
        invalid_properties.push('invalid value for "first_name", the character length must be great than or equal to 1.')
      end

      if !@last_name.nil? && @last_name.to_s.length < 1
        invalid_properties.push('invalid value for "last_name", the character length must be great than or equal to 1.')
      end

      if !@first_kana.nil? && @first_kana.to_s.length < 1
        invalid_properties.push('invalid value for "first_kana", the character length must be great than or equal to 1.')
      end

      if !@last_kana.nil? && @last_kana.to_s.length < 1
        invalid_properties.push('invalid value for "last_kana", the character length must be great than or equal to 1.')
      end

      if !@sex.nil? && @sex.to_s.length < 1
        invalid_properties.push('invalid value for "sex", the character length must be great than or equal to 1.')
      end

      if !@birth_date.nil? && @birth_date.to_s.length < 1
        invalid_properties.push('invalid value for "birth_date", the character length must be great than or equal to 1.')
      end

      if !@point_expire_date.nil? && @point_expire_date.to_s.length < 1
        invalid_properties.push('invalid value for "point_expire_date", the character length must be great than or equal to 1.')
      end

      if !@last_come_date_time.nil? && @last_come_date_time.to_s.length < 1
        invalid_properties.push('invalid value for "last_come_date_time", the character length must be great than or equal to 1.')
      end

      if !@entry_date.nil? && @entry_date.to_s.length < 1
        invalid_properties.push('invalid value for "entry_date", the character length must be great than or equal to 1.')
      end

      if !@leave_date.nil? && @leave_date.to_s.length < 1
        invalid_properties.push('invalid value for "leave_date", the character length must be great than or equal to 1.')
      end

      invalid_properties
    end

    # Check to see if the all the properties in the model are valid
    # @return true if the model is valid
    def valid?
      return false if @customer_id.nil?
      return false if @customer_id.to_s.length < 1
      return false if !@customer_code.nil? && @customer_code.to_s.length < 1
      return false if !@customer_no.nil? && @customer_no.to_s.length < 1
      return false if !@rank.nil? && @rank.to_s.length < 1
      return false if !@staff_rank.nil? && @staff_rank.to_s.length < 1
      return false if !@first_name.nil? && @first_name.to_s.length < 1
      return false if !@last_name.nil? && @last_name.to_s.length < 1
      return false if !@first_kana.nil? && @first_kana.to_s.length < 1
      return false if !@last_kana.nil? && @last_kana.to_s.length < 1
      return false if !@sex.nil? && @sex.to_s.length < 1
      return false if !@birth_date.nil? && @birth_date.to_s.length < 1
      return false if !@point_expire_date.nil? && @point_expire_date.to_s.length < 1
      return false if !@last_come_date_time.nil? && @last_come_date_time.to_s.length < 1
      return false if !@entry_date.nil? && @entry_date.to_s.length < 1
      return false if !@leave_date.nil? && @leave_date.to_s.length < 1
      true
    end

    # Custom attribute writer method with validation
    # @param [Object] customer_id Value to be assigned
    def customer_id=(customer_id)
      if customer_id.nil?
        fail ArgumentError, 'customer_id cannot be nil'
      end

      if customer_id.to_s.length < 1
        fail ArgumentError, 'invalid value for "customer_id", the character length must be great than or equal to 1.'
      end

      @customer_id = customer_id
    end

    # Custom attribute writer method with validation
    # @param [Object] customer_code Value to be assigned
    def customer_code=(customer_code)
      if !customer_code.nil? && customer_code.to_s.length < 1
        fail ArgumentError, 'invalid value for "customer_code", the character length must be great than or equal to 1.'
      end

      @customer_code = customer_code
    end

    # Custom attribute writer method with validation
    # @param [Object] customer_no Value to be assigned
    def customer_no=(customer_no)
      if !customer_no.nil? && customer_no.to_s.length < 1
        fail ArgumentError, 'invalid value for "customer_no", the character length must be great than or equal to 1.'
      end

      @customer_no = customer_no
    end

    # Custom attribute writer method with validation
    # @param [Object] rank Value to be assigned
    def rank=(rank)
      if !rank.nil? && rank.to_s.length < 1
        fail ArgumentError, 'invalid value for "rank", the character length must be great than or equal to 1.'
      end

      @rank = rank
    end

    # Custom attribute writer method with validation
    # @param [Object] staff_rank Value to be assigned
    def staff_rank=(staff_rank)
      if !staff_rank.nil? && staff_rank.to_s.length < 1
        fail ArgumentError, 'invalid value for "staff_rank", the character length must be great than or equal to 1.'
      end

      @staff_rank = staff_rank
    end

    # Custom attribute writer method with validation
    # @param [Object] first_name Value to be assigned
    def first_name=(first_name)
      if !first_name.nil? && first_name.to_s.length < 1
        fail ArgumentError, 'invalid value for "first_name", the character length must be great than or equal to 1.'
      end

      @first_name = first_name
    end

    # Custom attribute writer method with validation
    # @param [Object] last_name Value to be assigned
    def last_name=(last_name)
      if !last_name.nil? && last_name.to_s.length < 1
        fail ArgumentError, 'invalid value for "last_name", the character length must be great than or equal to 1.'
      end

      @last_name = last_name
    end

    # Custom attribute writer method with validation
    # @param [Object] first_kana Value to be assigned
    def first_kana=(first_kana)
      if !first_kana.nil? && first_kana.to_s.length < 1
        fail ArgumentError, 'invalid value for "first_kana", the character length must be great than or equal to 1.'
      end

      @first_kana = first_kana
    end

    # Custom attribute writer method with validation
    # @param [Object] last_kana Value to be assigned
    def last_kana=(last_kana)
      if !last_kana.nil? && last_kana.to_s.length < 1
        fail ArgumentError, 'invalid value for "last_kana", the character length must be great than or equal to 1.'
      end

      @last_kana = last_kana
    end

    # Custom attribute writer method with validation
    # @param [Object] sex Value to be assigned
    def sex=(sex)
      if !sex.nil? && sex.to_s.length < 1
        fail ArgumentError, 'invalid value for "sex", the character length must be great than or equal to 1.'
      end

      @sex = sex
    end

    # Custom attribute writer method with validation
    # @param [Object] birth_date Value to be assigned
    def birth_date=(birth_date)
      if !birth_date.nil? && birth_date.to_s.length < 1
        fail ArgumentError, 'invalid value for "birth_date", the character length must be great than or equal to 1.'
      end

      @birth_date = birth_date
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
    # @param [Object] last_come_date_time Value to be assigned
    def last_come_date_time=(last_come_date_time)
      if !last_come_date_time.nil? && last_come_date_time.to_s.length < 1
        fail ArgumentError, 'invalid value for "last_come_date_time", the character length must be great than or equal to 1.'
      end

      @last_come_date_time = last_come_date_time
    end

    # Custom attribute writer method with validation
    # @param [Object] entry_date Value to be assigned
    def entry_date=(entry_date)
      if !entry_date.nil? && entry_date.to_s.length < 1
        fail ArgumentError, 'invalid value for "entry_date", the character length must be great than or equal to 1.'
      end

      @entry_date = entry_date
    end

    # Custom attribute writer method with validation
    # @param [Object] leave_date Value to be assigned
    def leave_date=(leave_date)
      if !leave_date.nil? && leave_date.to_s.length < 1
        fail ArgumentError, 'invalid value for "leave_date", the character length must be great than or equal to 1.'
      end

      @leave_date = leave_date
    end

    # Checks equality by comparing each attribute.
    # @param [Object] Object to be compared
    def ==(o)
      return true if self.equal?(o)
      self.class == o.class &&
          customer_id == o.customer_id &&
          customer_code == o.customer_code &&
          customer_no == o.customer_no &&
          rank == o.rank &&
          staff_rank == o.staff_rank &&
          first_name == o.first_name &&
          last_name == o.last_name &&
          first_kana == o.first_kana &&
          last_kana == o.last_kana &&
          sex == o.sex &&
          birth_date == o.birth_date &&
          point_expire_date == o.point_expire_date &&
          last_come_date_time == o.last_come_date_time &&
          entry_date == o.entry_date &&
          leave_date == o.leave_date
    end

    # @see the `==` method
    # @param [Object] Object to be compared
    def eql?(o)
      self == o
    end

    # Calculates hash code according to all attributes.
    # @return [Integer] Hash code
    def hash
      [customer_id, customer_code, customer_no, rank, staff_rank, first_name, last_name, first_kana, last_kana, sex, birth_date, point_expire_date, last_come_date_time, entry_date, leave_date].hash
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
