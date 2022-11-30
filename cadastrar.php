<?php
error_reporting(0);
require 'config/config.php';
include("db.php");

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
  }

$logado = $_SESSION['login'];
$msg="";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_POST['submit'] == "Submit")
{
	$login = test_input($_POST["login"]);
	$senha = test_input($_POST["senha"]);
	$nome = test_input($_POST["nome"]);
	$email = test_input($_POST["email"]);
	try {
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('insert into users(login,senha,nome,email) values(?,sha1(?), ?, ?)');
	$sth->bindParam(1, $login);
	$sth->bindParam(2, $senha);
	$sth->bindParam(3, $nome);
	$sth->bindParam(4, $email);
	$sth->execute();
	$result = $sth->fetch(PDO::FETCH_ASSOC);
	$msg="Usuário ". $nome. " - cadastrado com sucesso";
	} catch (PDOException $e) {
		$msg= "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
		die();
	}
}

#$smarty->assign('dados', $result);
$smarty->assign('msg', $msg);
$smarty->display('cadastrar.tpl');

