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
	$titular = test_input($_POST["titular"]);
	$numero = test_input($_POST["numero"]);
	$validade = test_input($_POST["validade"]);
	$codigo_seguranca = test_input($_POST["codigo_seguranca"]);
	try {
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
#	$sth = $dbh->prepare('insert into users(login,senha,nome,email) values(?,sha1(?), ?, ?)');
	$sth = $dbh->prepare('insert into cartoes(titular,numero,validade,codigo_seguranca) values(AES_ENCRYPT(?,SHA2("verdao",512)),AES_ENCRYPT(?,SHA2("verdao",512)),AES_ENCRYPT(?,SHA2("verdao",512)),AES_ENCRYPT(?,SHA2("verdao",512)))');
	$sth->bindParam(1, $titular);
	$sth->bindParam(2, $numero);
	$sth->bindParam(3, $validade);
	$sth->bindParam(4, $codigo_seguranca);
	$sth->execute();
	$result = $sth->fetch(PDO::FETCH_ASSOC);
	$msg="Cartao ". $titular. " - cadastrado com sucesso";
	} catch (PDOException $e) {
		$msg= "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
		die();
	}
}

$smarty->assign('dados', $result);
$smarty->assign('msg', $msg);
$smarty->display('cad_cartao.tpl');

