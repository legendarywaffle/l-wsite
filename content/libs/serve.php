<?php
  class page
  {

    function __construct()
    {
      //vars
      $url = empty($_GET['url']) ? 0 : $_GET["url"];
      $url = rtrim($url, '/');
      $url = explode('/', $url);

      $page = "content/controller/" . $url[0] . ".php";

      if (empty($url[0])) {
        require 'content/controller/home.php';
        $controller = new home();
        return false;
      }

      if (file_exists($page)) {
        require $page;
      } else {
        require 'content/controller/error.php';
        $controller = new fault();
        return false;
      }

      $name = $url[0];
      $controller = new $url[0];
    }
  }
?>
