<?php
include 'connection_db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE EMAIL = '$email' and PASSWORD = '$password'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){

	session_start();
	$_SESSION['login'] = true;
	$_SESSION['email'] = $email;
header('location:../system.php');
}
else{
    echo 'falha';
	header('location:index.php?erro');
}