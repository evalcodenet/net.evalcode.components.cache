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
        throw new Http_Exception('cache/resource', null, Http_Exception::FORBIDDEN);

      Cache::clear();
      clearstatcache(true);
    }
    //--------------------------------------------------------------------------
  }
?>
