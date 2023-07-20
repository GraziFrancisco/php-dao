<?php


require_once("config.php");

$user = new Usuario();
$user->loadById(10);

echo $user;