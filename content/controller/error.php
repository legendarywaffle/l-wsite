<?php
  class fault extends controller
  {
    function __construct()
    {
      parent::__construct();
      $this->view->viewserve('error/index');
    }
  }
?>
