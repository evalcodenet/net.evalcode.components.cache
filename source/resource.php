<?php


namespace Components;


  /**
   * Cache_Resource
   *
   * @package net.evalcode.components.cache
   *
   * @author evalcode.net
   *
   * @application cache
   */
  class Cache_Resource extends Rest_Resource
  {
    // OVERRIDES
    /**
     * @GET
     * @POST
     */
    public function clear()
    {
      if(false===Runtime::isManagementAccess())
        throw Http_Exception::forbidden('cache/scriptlet/clear');

      Cache::clear();
      clearstatcache(true);
    }
    //--------------------------------------------------------------------------
  }
?>
