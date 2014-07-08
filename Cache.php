<?php
use providers\InterfaceProvider;

class Cache {

    /**
     * @var InterfaceProvider
     */
    private $_provider;

    /**
     * @param string $strProviderClass
     */
    public function __construct($strProviderClass)
    {
        $this->_provider = '\\provider\\' . $strProviderClass;
    }

    /**
     * @param string $strKey
     * @param string $strValue
     * @return bool
     */
    public function set($strKey, $strValue)
    {
        return $this->_provider->set($strKey, $strValue);
    }

    /**
     * @param string $strKey
     * @return mixed|null
     */
    public function get($strKey)
    {
        return $this->_provider->get($strKey);
    }

} 