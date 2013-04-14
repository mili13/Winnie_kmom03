<?php
/**
* Holding a instance of CWinnie to enable use of $this in subclasses.
*
* @package WinnieCore
*/
class CObject {

   public $config;
   public $request;
   public $data;

   /**
    * Constructor
    */
   protected function __construct() {
    $win = CWinnie::Instance();
    $this->config   = &$win->config;
    $this->request  = &$win->request;
    $this->data     = &$win->data;
  }

}
