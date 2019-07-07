<?php

class view
{

  function __construct()
  {
    
  }

  public function viewserve($name)
  {
    require 'content/view/' . $name . '.php';
  }
}
?>
