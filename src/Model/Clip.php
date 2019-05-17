<?php
/**
 * Clip
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * shotstack
 *
 * The Shotstack API is a video editing service that allows for the programatic creation of videos using JSON.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Shotstack\Client\Model;

use \ArrayAccess;
use \Shotstack\Client\ObjectSerializer;

/**
 * Clip Class Doc Comment
 *
 * @category Class
 * @description A clip is a container for a specific type of asset, i.e. a title, photo or video. You use a Clip to define when an asset will display on the timeline, how long it will play for and transitions and effects to apply to it.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Clip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Clip';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asset' => 'OneOfTitleAssetImageAssetVideoAsset',
        'start' => 'float',
        'length' => 'float',
        'transition' => '\OpenAPI\Client\Model\Transition',
        'effect' => 'string',
        'filter' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'asset' => null,
        'start' => null,
        'length' => null,
        'transition' => null,
        'effect' => null,
        'filter' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'asset' => 'asset',
        'start' => 'start',
        'length' => 'length',
        'transition' => 'transition',
        'effect' => 'effect',
        'filter' => 'filter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset' => 'setAsset',
        'start' => 'setStart',
        'length' => 'setLength',
        'transition' => 'setTransition',
        'effect' => 'setEffect',
        'filter' => 'setFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset' => 'getAsset',
        'start' => 'getStart',
        'length' => 'getLength',
        'transition' => 'getTransition',
        'effect' => 'getEffect',
        'filter' => 'getFilter'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const EFFECT_ZOOM_IN = 'zoomIn';
    const EFFECT_ZOOM_OUT = 'zoomOut';
    const EFFECT_SLIDE_LEFT = 'slideLeft';
    const EFFECT_SLIDE_RIGHT = 'slideRight';
    const EFFECT_SLIDE_UP = 'slideUp';
    const EFFECT_SLIDE_DOWN = 'slideDown';
    const FILTER_BOOST = 'boost';
    const FILTER_CONTRAST = 'contrast';
    const FILTER_DARKEN = 'darken';
    const FILTER_GREYSCALE = 'greyscale';
    const FILTER_LIGHTEN = 'lighten';
    const FILTER_MUTED = 'muted';
    const FILTER_NEGATIVE = 'negative';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEffectAllowableValues()
    {
        return [
            self::EFFECT_ZOOM_IN,
            self::EFFECT_ZOOM_OUT,
            self::EFFECT_SLIDE_LEFT,
            self::EFFECT_SLIDE_RIGHT,
            self::EFFECT_SLIDE_UP,
            self::EFFECT_SLIDE_DOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFilterAllowableValues()
    {
        return [
            self::FILTER_BOOST,
            self::FILTER_CONTRAST,
            self::FILTER_DARKEN,
            self::FILTER_GREYSCALE,
            self::FILTER_LIGHTEN,
            self::FILTER_MUTED,
            self::FILTER_NEGATIVE,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['asset'] = isset($data['asset']) ? $data['asset'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['transition'] = isset($data['transition']) ? $data['transition'] : null;
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['asset'] === null) {
            $invalidProperties[] = "'asset' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['length'] === null) {
            $invalidProperties[] = "'length' can't be null";
        }
        $allowedValues = $this->getEffectAllowableValues();
        if (!is_null($this->container['effect']) && !in_array($this->container['effect'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'effect', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFilterAllowableValues();
        if (!is_null($this->container['filter']) && !in_array($this->container['filter'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'filter', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets asset
     *
     * @return OneOfTitleAssetImageAssetVideoAsset
     */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
     * Sets asset
     *
     * @param OneOfTitleAssetImageAssetVideoAsset $asset The type of asset to display for the duration of this Clip. Value must be one of <b>TitleAsset</b>, <b>ImageAsset</b> or <b>VideoAsset</b>.
     *
     * @return $this
     */
    public function setAsset($asset)
    {
        $this->container['asset'] = $asset;

        return $this;
    }

    /**
     * Gets start
     *
     * @return float
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param float $start The start position of the Clip on the timeline, in seconds.
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets length
     *
     * @return float
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float $length The length, in seconds, the Clip should play for.
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets transition
     *
     * @return \OpenAPI\Client\Model\Transition|null
     */
    public function getTransition()
    {
        return $this->container['transition'];
    }

    /**
     * Sets transition
     *
     * @param \OpenAPI\Client\Model\Transition|null $transition transition
     *
     * @return $this
     */
    public function setTransition($transition)
    {
        $this->container['transition'] = $transition;

        return $this;
    }

    /**
     * Gets effect
     *
     * @return string|null
     */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
     * Sets effect
     *
     * @param string|null $effect A motion effect to apply to the Clip.
     *
     * @return $this
     */
    public function setEffect($effect)
    {
        $allowedValues = $this->getEffectAllowableValues();
        if (!is_null($effect) && !in_array($effect, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'effect', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['effect'] = $effect;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return string|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param string|null $filter A filter effect to apply to the Clip.
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $allowedValues = $this->getFilterAllowableValues();
        if (!is_null($filter) && !in_array($filter, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'filter', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['filter'] = $filter;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


