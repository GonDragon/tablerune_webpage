<?php

$userid = $_SESSION['userid'];

include('conexion.php');

if( $query= mysqli_prepare($con, 'SELECT username, email, description, avatar FROM users WHERE id = ?') ) {
    mysqli_stmt_bind_param($query,'s', $userid);
    mysqli_stmt_execute($query);
    mysqli_stmt_store_result($query);
    if (mysqli_stmt_num_rows($query) > 0) {
        

        mysqli_stmt_bind_result($query, $username, $email, $description, $avatar);
        mysqli_stmt_fetch($query);
        } else {
            $username = '{Unknow Error}';
            $email = '{Unknow Error}';
            $description = '{Unknow Error}';
            $avatar = "img/blank-profile-picture.png";
            die();
        }    
} else {
        $username = '{Unknow Error}';
        $email = '{Unknow Error}';
        $description = '{Unknow Error}';
        $avatar = "img/blank-profile-picture.png";
}

?>

<div class="card bg-dark">
    <div class="card-wrapper p-2 row">
        <div class="col-3"><?php
            echo("<img src='$avatar' alt='profile picture' class='img-thumbnail rounded-circle w-100'>");
            ?>
        </div>
        <div class="col-9">
            <ul>
                <?php
                echo("
                <li><strong>Username:</strong> $username</li>
                <li><strong>Email:</strong> $email</li>");
                ?>
            </ul>
        </div>
        <div class="col-12">
            <span><strong>Description:</strong></span>
            <?php echo("<p>$description</p>"); ?>
        </div>
    </div>
</div>