<?php
/**
 * Criterion
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Moosend API
 *
 * TODO: Add a description
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Criterion Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Criterion implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Criterion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comparer' => 'double',
        'custom_field_id' => 'string',
        'date_from' => 'string',
        'date_to' => 'string',
        'field' => 'double',
        'id' => 'double',
        'properties' => 'string',
        'segment_id' => 'double',
        'subscriteria' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comparer' => 'double',
        'custom_field_id' => null,
        'date_from' => null,
        'date_to' => null,
        'field' => 'double',
        'id' => 'double',
        'properties' => null,
        'segment_id' => 'double',
        'subscriteria' => null,
        'value' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'comparer' => 'Comparer',
        'custom_field_id' => 'CustomFieldID',
        'date_from' => 'DateFrom',
        'date_to' => 'DateTo',
        'field' => 'Field',
        'id' => 'ID',
        'properties' => 'Properties',
        'segment_id' => 'SegmentID',
        'subscriteria' => 'Subscriteria',
        'value' => 'Value'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'comparer' => 'setComparer',
        'custom_field_id' => 'setCustomFieldId',
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'field' => 'setField',
        'id' => 'setId',
        'properties' => 'setProperties',
        'segment_id' => 'setSegmentId',
        'subscriteria' => 'setSubscriteria',
        'value' => 'setValue'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'comparer' => 'getComparer',
        'custom_field_id' => 'getCustomFieldId',
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'field' => 'getField',
        'id' => 'getId',
        'properties' => 'getProperties',
        'segment_id' => 'getSegmentId',
        'subscriteria' => 'getSubscriteria',
        'value' => 'getValue'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['comparer'] = isset($data['comparer']) ? $data['comparer'] : null;
        $this->container['custom_field_id'] = isset($data['custom_field_id']) ? $data['custom_field_id'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['segment_id'] = isset($data['segment_id']) ? $data['segment_id'] : null;
        $this->container['subscriteria'] = isset($data['subscriteria']) ? $data['subscriteria'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets comparer
     * @return double
     */
    public function getComparer()
    {
        return $this->container['comparer'];
    }

    /**
     * Sets comparer
     * @param double $comparer 
     * @return $this
     */
    public function setComparer($comparer)
    {
        $this->container['comparer'] = $comparer;

        return $this;
    }

    /**
     * Gets custom_field_id
     * @return string
     */
    public function getCustomFieldId()
    {
        return $this->container['custom_field_id'];
    }

    /**
     * Sets custom_field_id
     * @param string $custom_field_id 
     * @return $this
     */
    public function setCustomFieldId($custom_field_id)
    {
        $this->container['custom_field_id'] = $custom_field_id;

        return $this;
    }

    /**
     * Gets date_from
     * @return string
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     * @param string $date_from 
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     * @return string
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     * @param string $date_to 
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets field
     * @return double
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     * @param double $field 
     * @return $this
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

        return $this;
    }

    /**
     * Gets id
     * @return double
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param double $id 
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets properties
     * @return string
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     * @param string $properties 
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets segment_id
     * @return double
     */
    public function getSegmentId()
    {
        return $this->container['segment_id'];
    }

    /**
     * Sets segment_id
     * @param double $segment_id 
     * @return $this
     */
    public function setSegmentId($segment_id)
    {
        $this->container['segment_id'] = $segment_id;

        return $this;
    }

    /**
     * Gets subscriteria
     * @return string
     */
    public function getSubscriteria()
    {
        return $this->container['subscriteria'];
    }

    /**
     * Sets subscriteria
     * @param string $subscriteria 
     * @return $this
     */
    public function setSubscriteria($subscriteria)
    {
        $this->container['subscriteria'] = $subscriteria;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value 
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


