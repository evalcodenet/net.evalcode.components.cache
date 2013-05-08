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
    public static function dispatch(Http_Scriptlet_Context $context_, Uri $uri_)
    {
      if(false===Runtime::isManagementAccess())
        throw new Http_Exception('components/cache/scriptlet/clear', Http_Exception::FORBIDDEN);

      Cache::clear();
      clearstatcache(true);
    }
    //--------------------------------------------------------------------------
  }
?>
