<?php

$username=$_POST['username'];
$password=$_POST['password'];

if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}

include('conexion.php');

if( $query= mysqli_prepare($con, 'SELECT id, password FROM users WHERE username = ?') ) {
    mysqli_stmt_bind_param($query,'s', $username);
    mysqli_stmt_execute($query);
    mysqli_stmt_store_result($query);

    if (mysqli_stmt_num_rows($query) > 0) {
        mysqli_stmt_bind_result($query, $dbid, $dbpassword);
        mysqli_stmt_fetch($query);

        if (password_verify($password, $dbpassword)) {
            echo '<span>Password Verificado</span>';
        } else {
            echo '<span>Password Incorrecto</span>';
        }
    } else {
        echo '<span>Username inexistente</span>';
    }
}

mysqli_close($con);