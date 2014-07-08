<?php
namespace providers;


interface InterfaceProvider {

    /**
     * @param string $strKey
     * @param string $strValue
     * @return bool
     */
    public function set($strKey, $strValue);

    /**
     * @param string $strKey
     * @return mixed|null
     */
    public function get($strKey);
}