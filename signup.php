<?php
  include_once("templates/commonFunctions.php");
  include_once("templates/head.php");

  $wallpaper = getRandomWallpaper();
  echo("
	<style>
		body {
			background-image: url('img/backgrounds/$wallpaper') !important;
			background-position: 50%;
			background-size: cover;
		}
	</style>
	");
?>
<header>
<?php include_once("templates/main_navbar.php"); ?>
</header>
<main>

<?php

include_once("templates/form.php");

$fields = [
	["username", "text"],
	["password", "password"],
	["email", "email"]
];

$signup = new SmallForm("Join Us!",$fields,"new_user.php","Register");
$signup->build();

?>

</main>

<?php
  include_once("templates/footer.php");
  include_once("templates/scripts.php");
  include_once("templates/closing.php");
?>
