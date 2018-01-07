<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerturbationMessage StructType
 * @subpackage Structs
 */
class PerturbationMessage extends AbstractStructBase
{
    /**
     * The mediaSpecific
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $mediaSpecific;
    /**
     * The text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $text;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The updated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $updated;
    /**
     * Constructor method for PerturbationMessage
     * @uses PerturbationMessage::setMediaSpecific()
     * @uses PerturbationMessage::setText()
     * @uses PerturbationMessage::setType()
     * @uses PerturbationMessage::setUpdated()
     * @param bool $mediaSpecific
     * @param string $text
     * @param string $type
     * @param bool $updated
     */
    public function __construct($mediaSpecific = null, $text = null, $type = null, $updated = null)
    {
        $this
            ->setMediaSpecific($mediaSpecific)
            ->setText($text)
            ->setType($type)
            ->setUpdated($updated);
    }
    /**
     * Get mediaSpecific value
     * @return bool|null
     */
    public function getMediaSpecific()
    {
        return $this->mediaSpecific;
    }
    /**
     * Set mediaSpecific value
     * @param bool $mediaSpecific
     * @return \StructType\PerturbationMessage
     */
    public function setMediaSpecific($mediaSpecific = null)
    {
        // validation for constraint: boolean
        if (!is_null($mediaSpecific) && !is_bool($mediaSpecific)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mediaSpecific)), __LINE__);
        }
        $this->mediaSpecific = $mediaSpecific;
        return $this;
    }
    /**
     * Get text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getText()
    {
        return isset($this->text) ? $this->text : null;
    }
    /**
     * Set text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $text
     * @return \StructType\PerturbationMessage
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        if (is_null($text) || (is_array($text) && empty($text))) {
            unset($this->text);
        } else {
            $this->text = $text;
        }
        return $this;
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \StructType\PerturbationMessage
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
        }
        return $this;
    }
    /**
     * Get updated value
     * @return bool|null
     */
    public function getUpdated()
    {
        return $this->updated;
    }
    /**
     * Set updated value
     * @param bool $updated
     * @return \StructType\PerturbationMessage
     */
    public function setUpdated($updated = null)
    {
        // validation for constraint: boolean
        if (!is_null($updated) && !is_bool($updated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($updated)), __LINE__);
        }
        $this->updated = $updated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PerturbationMessage
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
