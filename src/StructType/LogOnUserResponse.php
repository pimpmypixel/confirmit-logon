<?php

namespace Confirmit\Logon\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogOnUserResponse StructType
 * @subpackage Structs
 */
class LogOnUserResponse extends AbstractStructBase
{
    /**
     * The LogOnUserResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LogOnUserResult;
    /**
     * Constructor method for LogOnUserResponse
     * @uses LogOnUserResponse::setLogOnUserResult()
     * @param string $logOnUserResult
     */
    public function __construct($logOnUserResult = null)
    {
        $this
            ->setLogOnUserResult($logOnUserResult);
    }
    /**
     * Get LogOnUserResult value
     * @return string|null
     */
    public function getLogOnUserResult()
    {
        return $this->LogOnUserResult;
    }
    /**
     * Set LogOnUserResult value
     * @param string $logOnUserResult
     * @return \Confirmit\Logon\StructType\LogOnUserResponse
     */
    public function setLogOnUserResult($logOnUserResult = null)
    {
        // validation for constraint: string
        if (!is_null($logOnUserResult) && !is_string($logOnUserResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($logOnUserResult)), __LINE__);
        }
        $this->LogOnUserResult = $logOnUserResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Confirmit\Logon\StructType\LogOnUserResponse
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
