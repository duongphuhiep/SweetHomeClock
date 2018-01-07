<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WrPerturbations StructType
 * @subpackage Structs
 */
class WrPerturbations extends AbstractStructBase
{
    /**
     * The argumentMedia
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $argumentMedia;
    /**
     * The argumentSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $argumentSource;
    /**
     * The perturbations
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Perturbation[]
     */
    public $perturbations;
    /**
     * Constructor method for WrPerturbations
     * @uses WrPerturbations::setArgumentMedia()
     * @uses WrPerturbations::setArgumentSource()
     * @uses WrPerturbations::setPerturbations()
     * @param string $argumentMedia
     * @param string $argumentSource
     * @param \StructType\Perturbation[] $perturbations
     */
    public function __construct($argumentMedia = null, $argumentSource = null, array $perturbations = array())
    {
        $this
            ->setArgumentMedia($argumentMedia)
            ->setArgumentSource($argumentSource)
            ->setPerturbations($perturbations);
    }
    /**
     * Get argumentMedia value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArgumentMedia()
    {
        return isset($this->argumentMedia) ? $this->argumentMedia : null;
    }
    /**
     * Set argumentMedia value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $argumentMedia
     * @return \StructType\WrPerturbations
     */
    public function setArgumentMedia($argumentMedia = null)
    {
        // validation for constraint: string
        if (!is_null($argumentMedia) && !is_string($argumentMedia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($argumentMedia)), __LINE__);
        }
        if (is_null($argumentMedia) || (is_array($argumentMedia) && empty($argumentMedia))) {
            unset($this->argumentMedia);
        } else {
            $this->argumentMedia = $argumentMedia;
        }
        return $this;
    }
    /**
     * Get argumentSource value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArgumentSource()
    {
        return isset($this->argumentSource) ? $this->argumentSource : null;
    }
    /**
     * Set argumentSource value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $argumentSource
     * @return \StructType\WrPerturbations
     */
    public function setArgumentSource($argumentSource = null)
    {
        // validation for constraint: string
        if (!is_null($argumentSource) && !is_string($argumentSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($argumentSource)), __LINE__);
        }
        if (is_null($argumentSource) || (is_array($argumentSource) && empty($argumentSource))) {
            unset($this->argumentSource);
        } else {
            $this->argumentSource = $argumentSource;
        }
        return $this;
    }
    /**
     * Get perturbations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Perturbation[]|null
     */
    public function getPerturbations()
    {
        return isset($this->perturbations) ? $this->perturbations : null;
    }
    /**
     * Set perturbations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Perturbation[] $perturbations
     * @return \StructType\WrPerturbations
     */
    public function setPerturbations(array $perturbations = array())
    {
        foreach ($perturbations as $wrPerturbationsPerturbationsItem) {
            // validation for constraint: itemType
            if (!$wrPerturbationsPerturbationsItem instanceof \StructType\Perturbation) {
                throw new \InvalidArgumentException(sprintf('The perturbations property can only contain items of \StructType\Perturbation, "%s" given', is_object($wrPerturbationsPerturbationsItem) ? get_class($wrPerturbationsPerturbationsItem) : gettype($wrPerturbationsPerturbationsItem)), __LINE__);
            }
        }
        if (is_null($perturbations) || (is_array($perturbations) && empty($perturbations))) {
            unset($this->perturbations);
        } else {
            $this->perturbations = $perturbations;
        }
        return $this;
    }
    /**
     * Add item to perturbations value
     * @throws \InvalidArgumentException
     * @param \StructType\Perturbation $item
     * @return \StructType\WrPerturbations
     */
    public function addToPerturbations(\StructType\Perturbation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Perturbation) {
            throw new \InvalidArgumentException(sprintf('The perturbations property can only contain items of \StructType\Perturbation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->perturbations[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WrPerturbations
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
