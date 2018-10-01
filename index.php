<?php 

require_once("config.php");
//carrega 1 usuario
//$Gabriel = new Usuario();
//$Gabriel->loadbyId(1);
//echo $Gabriel;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega lista de usuarios buscando pelo login
//$search = Usuario::search("Ga");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Gabriel", "3273082");
//echo $usuario;

//criando um novo usuario
//$aluno = new Usuario("Gabriel", "5698");
//$aluno-> insert();
//echo $aluno;

//Alterar um usuario
//$usuario = new Usuario();
//$usuario->loadbyId(8);
//$usuario->update("professor", "99564118884");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadbyId(5);
$usuario->delete();
echo $usuario;

 ?>