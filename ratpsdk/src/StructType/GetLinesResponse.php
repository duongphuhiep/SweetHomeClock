<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLinesResponse StructType
 * @subpackage Structs
 */
class GetLinesResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line[]
     */
    public $return;
    /**
     * Constructor method for getLinesResponse
     * @uses GetLinesResponse::setReturn()
     * @param \StructType\Line[] $return
     */
    public function __construct(array $return = array())
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Line[]|null
     */
    public function getReturn()
    {
        return isset($this->return) ? $this->return : null;
    }
    /**
     * Set return value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Line[] $return
     * @return \StructType\GetLinesResponse
     */
    public function setReturn(array $return = array())
    {
        foreach ($return as $getLinesResponseReturnItem) {
            // validation for constraint: itemType
            if (!$getLinesResponseReturnItem instanceof \StructType\Line) {
                throw new \InvalidArgumentException(sprintf('The return property can only contain items of \StructType\Line, "%s" given', is_object($getLinesResponseReturnItem) ? get_class($getLinesResponseReturnItem) : gettype($getLinesResponseReturnItem)), __LINE__);
            }
        }
        if (is_null($return) || (is_array($return) && empty($return))) {
            unset($this->return);
        } else {
            $this->return = $return;
        }
        return $this;
    }
    /**
     * Add item to return value
     * @throws \InvalidArgumentException
     * @param \StructType\Line $item
     * @return \StructType\GetLinesResponse
     */
    public function addToReturn(\StructType\Line $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Line) {
            throw new \InvalidArgumentException(sprintf('The return property can only contain items of \StructType\Line, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->return[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetLinesResponse
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
