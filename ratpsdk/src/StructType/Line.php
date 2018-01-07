<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Line StructType
 * @subpackage Structs
 */
class Line extends AbstractStructBase
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $code;
    /**
     * The codeStif
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $codeStif;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The image
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $image;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The realm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $realm;
    /**
     * The reseau
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Reseau
     */
    public $reseau;
    /**
     * Constructor method for Line
     * @uses Line::setCode()
     * @uses Line::setCodeStif()
     * @uses Line::setId()
     * @uses Line::setImage()
     * @uses Line::setName()
     * @uses Line::setRealm()
     * @uses Line::setReseau()
     * @param string $code
     * @param string $codeStif
     * @param string $id
     * @param string $image
     * @param string $name
     * @param string $realm
     * @param \StructType\Reseau $reseau
     */
    public function __construct($code = null, $codeStif = null, $id = null, $image = null, $name = null, $realm = null, \StructType\Reseau $reseau = null)
    {
        $this
            ->setCode($code)
            ->setCodeStif($codeStif)
            ->setId($id)
            ->setImage($image)
            ->setName($name)
            ->setRealm($realm)
            ->setReseau($reseau);
    }
    /**
     * Get code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->code) ? $this->code : null;
    }
    /**
     * Set code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \StructType\Line
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->code);
        } else {
            $this->code = $code;
        }
        return $this;
    }
    /**
     * Get codeStif value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodeStif()
    {
        return isset($this->codeStif) ? $this->codeStif : null;
    }
    /**
     * Set codeStif value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codeStif
     * @return \StructType\Line
     */
    public function setCodeStif($codeStif = null)
    {
        // validation for constraint: string
        if (!is_null($codeStif) && !is_string($codeStif)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeStif)), __LINE__);
        }
        if (is_null($codeStif) || (is_array($codeStif) && empty($codeStif))) {
            unset($this->codeStif);
        } else {
            $this->codeStif = $codeStif;
        }
        return $this;
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \StructType\Line
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        return $this;
    }
    /**
     * Get image value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getImage()
    {
        return isset($this->image) ? $this->image : null;
    }
    /**
     * Set image value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $image
     * @return \StructType\Line
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($image)), __LINE__);
        }
        if (is_null($image) || (is_array($image) && empty($image))) {
            unset($this->image);
        } else {
            $this->image = $image;
        }
        return $this;
    }
    /**
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\Line
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        return $this;
    }
    /**
     * Get realm value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRealm()
    {
        return isset($this->realm) ? $this->realm : null;
    }
    /**
     * Set realm value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $realm
     * @return \StructType\Line
     */
    public function setRealm($realm = null)
    {
        // validation for constraint: string
        if (!is_null($realm) && !is_string($realm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($realm)), __LINE__);
        }
        if (is_null($realm) || (is_array($realm) && empty($realm))) {
            unset($this->realm);
        } else {
            $this->realm = $realm;
        }
        return $this;
    }
    /**
     * Get reseau value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Reseau|null
     */
    public function getReseau()
    {
        return isset($this->reseau) ? $this->reseau : null;
    }
    /**
     * Set reseau value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Reseau $reseau
     * @return \StructType\Line
     */
    public function setReseau(\StructType\Reseau $reseau = null)
    {
        if (is_null($reseau) || (is_array($reseau) && empty($reseau))) {
            unset($this->reseau);
        } else {
            $this->reseau = $reseau;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Line
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
