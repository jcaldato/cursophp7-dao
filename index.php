<?php

require_once("config.php");

//carrega um usuário específico
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e senha
//$usuario = new Usuario();
//$usuario->login("root","654321");
//echo $usuario;

//insere um novo usuário
//$aluno = new Usuario("aluno","senha");
//$aluno->insert();
//echo $aluno;

/*alteração de usuario
//$usuario = new Usuario();
//$usuario->loadById(12);
//$usuario->update("professor","101010");
echo $usuario;*/

$usuario=new Usuario();
$usuario->loadById(4);
$usuario->delete();
echo $usuario;



?>