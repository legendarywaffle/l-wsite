<?php
  class contact extends controller
  {
    function __construct()
    {
      parent::__construct();
      $this->view->viewserve('contact');
    }
  }
?>
