<?php


require_once("config.php");


// CARREGA UM USUARIO

//$user = new Usuario();
//$user->loadById(10);
//echo $user;


// CARREGA UMA LISTA DE USUARIOS

//$lista = Usuario::getList();

//echo json_encode($lista);

// CARREGA UM USUARIO ESPECIFICO

//$search = Usuario::search("a");

//echo json_encode($search);

// CARREGA UM USUARIO USANDO LOGIN E SENHA

$usuario = new Usuario();
$usuario->login("Joana", "12345");

echo $usuario;