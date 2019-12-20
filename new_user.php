<?php

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

// TODO: Verificar que está todo en orden antes de conectarse a la db

include('conexion.php');

$hashed_pass = password_hash($password, PASSWORD_DEFAULT);

if( $query= mysqli_prepare($con, 'INSERT INTO users VALUES(NULL, ?, ?, ?, ?, ?)') ) {
    $defaultDescription = 'Lorem Ipsum Dolor Sit Amet';
    $defaultAvatar = 'img\blank-profile-picture.png';
    mysqli_stmt_bind_param($query,'sssss', $username, $email, $hashed_pass, $defaultDescription, $defaultAvatar);
    $usr_created=mysqli_stmt_execute($query);
}

if(!$usr_created){
	echo "<p class='alert alert-warning'>Error en el registro. <br> Por favor, volvé a realizarlo.</p>";
}else{
	echo "<p class='alert alert-success'>Gracias $username por registrarse</p>";
}