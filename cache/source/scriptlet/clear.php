<?php


  /**
   * Cache_Scriptlet_Clear
   *
   * @package net.evalcode.components
   * @subpackage cache.scriptlet
   *
   * @author evalcode.net
   */
  class Cache_Scriptlet_Clear extends Scriptlet
  {
    // OVERRIDES/IMPLEMENTS
    public function post()
    {
      if(false===isset($_SERVER['REMOTE_ADDR']) || false===in_array($_SERVER['REMOTE_ADDR'], Runtime::getManagementIps()))
        throw new Runtime_Http_Exception('cache/clear', 'Forbidden', Runtime_Http_Exception::FORBIDDEN);

      Runtime::cache()->clear();
      @clearstatcache(true);
    }

    public function get()
    {
      return $this->post();
    }
    //--------------------------------------------------------------------------
  }
?>
