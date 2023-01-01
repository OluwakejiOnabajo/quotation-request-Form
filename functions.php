<?php

include_once 'connection/config.php';

function test_input($text){ 
 $text = trim($text);
  $text = strip_tags($text);
 $text = stripslashes($text);
  return $text;
}

?>