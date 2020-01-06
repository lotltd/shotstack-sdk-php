<?php
/**
 * Timeline
 *
 * PHP version 5
 *
 * @category Class
 * @package  Shotstack\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shotstack
 *
 * The Shotstack API is a video editing service that allows for the programatic creation of videos using JSON. You can configure an edit and POST it to the Shotstack API which will render your video and provide a file location when complete. For more details check https://shotstack.io
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.1
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
 * Timeline Class Doc Comment
 *
 * @category Class
 * @description A timeline represents the contents of a video edit over time, in seconds. A timeline consists of layers called tracks. Tracks are composed of titles, images or video segments referred to as clips which are placed along the track at specific starting point and lasting for a specific amount of time.
 * @package  Shotstack\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Timeline implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Timeline';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'soundtrack' => '\Shotstack\Client\Model\Soundtrack',
        'background' => 'string',
        'fonts' => '\Shotstack\Client\Model\Font[]',
        'tracks' => '\Shotstack\Client\Model\Track[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'soundtrack' => null,
        'background' => null,
        'fonts' => null,
        'tracks' => null
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
        'soundtrack' => 'soundtrack',
        'background' => 'background',
        'fonts' => 'fonts',
        'tracks' => 'tracks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'soundtrack' => 'setSoundtrack',
        'background' => 'setBackground',
        'fonts' => 'setFonts',
        'tracks' => 'setTracks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'soundtrack' => 'getSoundtrack',
        'background' => 'getBackground',
        'fonts' => 'getFonts',
        'tracks' => 'getTracks'
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
        $this->container['soundtrack'] = isset($data['soundtrack']) ? $data['soundtrack'] : null;
        $this->container['background'] = isset($data['background']) ? $data['background'] : null;
        $this->container['fonts'] = isset($data['fonts']) ? $data['fonts'] : null;
        $this->container['tracks'] = isset($data['tracks']) ? $data['tracks'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tracks'] === null) {
            $invalidProperties[] = "'tracks' can't be null";
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
     * Gets soundtrack
     *
     * @return \Shotstack\Client\Model\Soundtrack|null
     */
    public function getSoundtrack()
    {
        return $this->container['soundtrack'];
    }

    /**
     * Sets soundtrack
     *
     * @param \Shotstack\Client\Model\Soundtrack|null $soundtrack soundtrack
     *
     * @return $this
     */
    public function setSoundtrack($soundtrack)
    {
        $this->container['soundtrack'] = $soundtrack;

        return $this;
    }

    /**
     * Gets background
     *
     * @return string|null
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     *
     * @param string|null $background A hexidecimal value for the timeline background colour. Defaults to black (#000000).
     *
     * @return $this
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

        return $this;
    }

    /**
     * Gets fonts
     *
     * @return \Shotstack\Client\Model\Font[]|null
     */
    public function getFonts()
    {
        return $this->container['fonts'];
    }

    /**
     * Sets fonts
     *
     * @param \Shotstack\Client\Model\Font[]|null $fonts An array of custom fonts to be downloaded for use by the HTML assets.
     *
     * @return $this
     */
    public function setFonts($fonts)
    {
        $this->container['fonts'] = $fonts;

        return $this;
    }

    /**
     * Gets tracks
     *
     * @return \Shotstack\Client\Model\Track[]
     */
    public function getTracks()
    {
        return $this->container['tracks'];
    }

    /**
     * Sets tracks
     *
     * @param \Shotstack\Client\Model\Track[] $tracks A timeline consists of an array of tracks, each track containing clips. Tracks are layered on top of each other in the same order they are added to the array with the top most track layered over the top of those below it. Ensure that a track containing titles is the top most track so that it is displayed above videos and images.
     *
     * @return $this
     */
    public function setTracks($tracks)
    {
        $this->container['tracks'] = $tracks;

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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


