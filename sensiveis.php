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

#if($_POST['submit'] == "Submit")
#{
	try {
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('SELECT * FROM users');
	$sth->execute();
    $usuarios=$sth->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $e) {
		$msg= "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
		die();
	}
#}

	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('select * from cartoes');
    $sth->execute();
    $cartoes=$sth->fetchAll(PDO::FETCH_ASSOC);
    

	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $dbh->prepare('select AES_DECRYPT(titular,SHA2("verdao",512)) as titular,
                AES_DECRYPT(numero,SHA2("verdao",512)) as numero,
                AES_DECRYPT(validade,SHA2("verdao",512)) as validade,
                AES_DECRYPT(codigo_seguranca,SHA2("verdao",512)) as codigo_seguranca
                from cartoes');
    $sth->execute();
    $decriptografado=$sth->fetchAll(PDO::FETCH_ASSOC);

$smarty->assign('usuarios', $usuarios);
$smarty->assign('cartoes', $cartoes);
$smarty->assign('decriptografado', $decriptografado);
$smarty->assign('msg', $msg);
$smarty->display('sensiveis.tpl');

