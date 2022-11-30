<?php
error_reporting(0);
require 'config/config.php';
include("db.php");
session_start();
#session_destroy();
if($_POST['submit'] == "Submit")
{
	try {
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('SELECT * FROM users where login=? and senha=sha1(?)');
	$sth->bindParam(1, $_POST["login"]);
	$sth->bindParam(2, $_POST["senha"]);
	$sth->execute();
	$result = $sth->fetch(PDO::FETCH_ASSOC);
	} catch (PDOException $e) {
		$msg= "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
		die();
	}
	if ($sth->rowCount()==0)
	{
		$msg="Usuário/senha inválidos";
    }else{
            $_SESSION['login']=$_POST['login'];
            $_SESSION['senha']=$_POST['senha'];
            header("location:sensiveis.php");
    }	
}

#$smarty->assign('dados', $result);
$smarty->assign('msg', $msg);
$smarty->display('index.tpl');

