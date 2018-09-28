<?php 

require_once("config.php");

$Gabriel = new Usuario();

$Gabriel->loadbyId(1);

echo $Gabriel;

 ?>