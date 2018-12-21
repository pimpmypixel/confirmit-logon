<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Log ServiceType
 * @subpackage Services
 */
class Log extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named LogOnUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LogOnUser $parameters
     * @return \StructType\LogOnUserResponse|bool
     */
    public function LogOnUser(\StructType\LogOnUser $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->LogOnUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\LogOnUserResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
