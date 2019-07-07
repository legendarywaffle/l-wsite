<?php
  class home extends controller
  {
    function __construct()
    {
      parent::__construct();
      $this->view->viewserve('home');
    }
  }
?>
