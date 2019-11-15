<?php
  include_once("templates/head.php");
?>
<header>
<?php include_once("templates/main_navbar.php"); ?>
</header>
<main>

<div class="p-3">
<h3>Registrate en el sitio</h3>		
<form id="formRegistro" class="card w-25 p-3" action="new_user.php" method="post">
	<label>
		Username
		<input type="text" name="username"/>
	</label>
	<label>
        Password
		<input type="password" name="password"/>
	</label>
	<label>
		Email
		<input type="email" name="email" />
	</label>
	<input type="submit" value="signup">
</form>
<p>
Sos usuario?
<a href="#">Ingresá</a>
</p>
</div>

</main>

<?php
  include_once("templates/footer.php");
  include_once("templates/scripts.php");
  include_once("templates/closing.php");
?>
