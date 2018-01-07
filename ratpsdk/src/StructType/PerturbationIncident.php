<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerturbationIncident StructType
 * @subpackage Structs
 */
class PerturbationIncident extends AbstractStructBase
{
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The incidentLines
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PerturbationIncidentLine[]
     */
    public $incidentLines;
    /**
     * The messageGlobal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PerturbationMessage
     */
    public $messageGlobal;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * Constructor method for PerturbationIncident
     * @uses PerturbationIncident::setDate()
     * @uses PerturbationIncident::setId()
     * @uses PerturbationIncident::setIncidentLines()
     * @uses PerturbationIncident::setMessageGlobal()
     * @uses PerturbationIncident::setStatus()
     * @param string $date
     * @param string $id
     * @param \StructType\PerturbationIncidentLine[] $incidentLines
     * @param \StructType\PerturbationMessage $messageGlobal
     * @param string $status
     */
    public function __construct($date = null, $id = null, array $incidentLines = array(), \StructType\PerturbationMessage $messageGlobal = null, $status = null)
    {
        $this
            ->setDate($date)
            ->setId($id)
            ->setIncidentLines($incidentLines)
            ->setMessageGlobal($messageGlobal)
            ->setStatus($status);
    }
    /**
     * Get date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDate()
    {
        return isset($this->date) ? $this->date : null;
    }
    /**
     * Set date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $date
     * @return \StructType\PerturbationIncident
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        if (is_null($date) || (is_array($date) && empty($date))) {
            unset($this->date);
        } else {
            $this->date = $date;
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
     * @return \StructType\PerturbationIncident
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
     * Get incidentLines value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PerturbationIncidentLine[]|null
     */
    public function getIncidentLines()
    {
        return isset($this->incidentLines) ? $this->incidentLines : null;
    }
    /**
     * Set incidentLines value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\PerturbationIncidentLine[] $incidentLines
     * @return \StructType\PerturbationIncident
     */
    public function setIncidentLines(array $incidentLines = array())
    {
        foreach ($incidentLines as $perturbationIncidentIncidentLinesItem) {
            // validation for constraint: itemType
            if (!$perturbationIncidentIncidentLinesItem instanceof \StructType\PerturbationIncidentLine) {
                throw new \InvalidArgumentException(sprintf('The incidentLines property can only contain items of \StructType\PerturbationIncidentLine, "%s" given', is_object($perturbationIncidentIncidentLinesItem) ? get_class($perturbationIncidentIncidentLinesItem) : gettype($perturbationIncidentIncidentLinesItem)), __LINE__);
            }
        }
        if (is_null($incidentLines) || (is_array($incidentLines) && empty($incidentLines))) {
            unset($this->incidentLines);
        } else {
            $this->incidentLines = $incidentLines;
        }
        return $this;
    }
    /**
     * Add item to incidentLines value
     * @throws \InvalidArgumentException
     * @param \StructType\PerturbationIncidentLine $item
     * @return \StructType\PerturbationIncident
     */
    public function addToIncidentLines(\StructType\PerturbationIncidentLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PerturbationIncidentLine) {
            throw new \InvalidArgumentException(sprintf('The incidentLines property can only contain items of \StructType\PerturbationIncidentLine, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->incidentLines[] = $item;
        return $this;
    }
    /**
     * Get messageGlobal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PerturbationMessage|null
     */
    public function getMessageGlobal()
    {
        return isset($this->messageGlobal) ? $this->messageGlobal : null;
    }
    /**
     * Set messageGlobal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PerturbationMessage $messageGlobal
     * @return \StructType\PerturbationIncident
     */
    public function setMessageGlobal(\StructType\PerturbationMessage $messageGlobal = null)
    {
        if (is_null($messageGlobal) || (is_array($messageGlobal) && empty($messageGlobal))) {
            unset($this->messageGlobal);
        } else {
            $this->messageGlobal = $messageGlobal;
        }
        return $this;
    }
    /**
     * Get status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }
    /**
     * Set status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $status
     * @return \StructType\PerturbationIncident
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->status);
        } else {
            $this->status = $status;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PerturbationIncident
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
