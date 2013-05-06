<?php


namespace Components;


  /**
   * Cache_Scriptlet_Clear
   *
   * @package net.evalcode.components
   * @subpackage cache.scriptlet
   *
   * @author evalcode.net
   */
  class Cache_Scriptlet_Clear extends Http_Scriptlet
  {
    // OVERRIDES
    public function post()
    {
      if(false===isset($_SERVER['REMOTE_ADDR']) || false===in_array($_SERVER['REMOTE_ADDR'], Runtime::getManagementIps()))
        throw new Http_Exception('components/cache/scriptlet/clear', 'Forbidden', Http_Exception::FORBIDDEN);

      Cache::clear();
      clearstatcache(true);
    }

    public function get()
    {
      return $this->post();
    }
    //--------------------------------------------------------------------------
  }
?>
