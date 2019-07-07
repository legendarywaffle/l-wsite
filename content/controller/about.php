<?php
  class about extends controller
  {
    function __construct()
    {
      parent::__construct();
      $this->view->viewserve('about');
    }
  }
?>
