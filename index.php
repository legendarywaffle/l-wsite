<?php
if (file_exists('content/conf/conf.php')) {
  include 'content/conf/conf.php';
  require 'content/libs/serve.php';
  require 'content/libs/controller.php';
  require 'content/libs/view.php';

  $controller = new page();
} else {
  echo "Something is not good";
}
?>
