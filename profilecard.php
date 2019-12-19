<?php
  include_once("templates/head.php");
?>

<div class="card">
    <div class="card-wrapper p-2 row">
        <div class="col-3">
            <img src="img/blank-profile-picture.png" alt="profile picture" class="img-thumbnail rounded-circle w-100">
        </div>
        <div class="col-9">
            <ul>
                <li><strong>Username:</strong> {username}</li>
                <li><strong>Email:</strong> {email}</li>
            </ul>
        </div>
        <div class="col-12">
            <span><strong>Description:</strong></span>
            <p>{description}</p>
        </div>
    </div>
</div>

<?php
  include_once("templates/closing.php");
?>
