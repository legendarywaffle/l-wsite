<?php
  class portfolio extends controller
  {
    function __construct()
    {
      parent::__construct();
      $this->view->viewserve('portfolio');
    }
  }
?>
