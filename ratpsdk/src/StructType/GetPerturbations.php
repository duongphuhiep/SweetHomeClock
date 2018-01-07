<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPerturbations StructType
 * @subpackage Structs
 */
class GetPerturbations extends AbstractStructBase
{
    /**
     * The perturbation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Perturbation
     */
    public $perturbation;
    /**
     * The isXmlText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $isXmlText;
    /**
     * Constructor method for getPerturbations
     * @uses GetPerturbations::setPerturbation()
     * @uses GetPerturbations::setIsXmlText()
     * @param \StructType\Perturbation $perturbation
     * @param bool $isXmlText
     */
    public function __construct(\StructType\Perturbation $perturbation = null, $isXmlText = null)
    {
        $this
            ->setPerturbation($perturbation)
            ->setIsXmlText($isXmlText);
    }
    /**
     * Get perturbation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Perturbation|null
     */
    public function getPerturbation()
    {
        return isset($this->perturbation) ? $this->perturbation : null;
    }
    /**
     * Set perturbation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Perturbation $perturbation
     * @return \StructType\GetPerturbations
     */
    public function setPerturbation(\StructType\Perturbation $perturbation = null)
    {
        if (is_null($perturbation) || (is_array($perturbation) && empty($perturbation))) {
            unset($this->perturbation);
        } else {
            $this->perturbation = $perturbation;
        }
        return $this;
    }
    /**
     * Get isXmlText value
     * @return bool|null
     */
    public function getIsXmlText()
    {
        return $this->isXmlText;
    }
    /**
     * Set isXmlText value
     * @param bool $isXmlText
     * @return \StructType\GetPerturbations
     */
    public function setIsXmlText($isXmlText = null)
    {
        // validation for constraint: boolean
        if (!is_null($isXmlText) && !is_bool($isXmlText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isXmlText)), __LINE__);
        }
        $this->isXmlText = $isXmlText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetPerturbations
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
