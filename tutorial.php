<?php
require_once __DIR__ . '/vendor/autoload.php';

$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'logon_18_0.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'logon_18_0.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => false,
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOCATION => 'https://ws.nordic.confirmit.com/confirmit/webservices/current/logon.asmx',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);

$log = new \ServiceType\Log($options);

$pp = new \StructType\LogOnUser(
    $options[\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN],
    $options[\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD]
);

if ($log->LogOnUser($pp) !== false) {
    $key = $log->getResult()->LogOnUserResult;
    echo $key;


} else {
    print_r($log->getLastError());
}
