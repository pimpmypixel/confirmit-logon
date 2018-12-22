<?php

namespace Confirmit\Logon;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'LogOnUser' => '\\Confirmit\\Logon\\StructType\\LogOnUser',
            'LogOnUserResponse' => '\\Confirmit\\Logon\\StructType\\LogOnUserResponse',
        );
    }
}
