<?php

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

   <?php
if( $_REQUEST["name"] ) {

   $name = $_REQUEST['name'];
   echo "Welcome ". $name;
}

?>
?>