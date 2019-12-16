<?php
  include_once("templates/head.php");
?>
<header>
<?php include_once("templates/main_navbar.php"); ?>
</header>
<main>
<section class="py-3 bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="d-md-flex flex-column justify-content-around col-lg-6">
            <h1>Tabletop Rol Online</h1>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at erat consequat, fringilla elit sit amet, rutrum purus. Nulla sed sapien pulvinar odio mattis sodales in eu est. Donec cursus sem metus, ac tempus massa consectetur eget.</p>
            <a class="btn btn-primary btn-lg btn-block" href="./signup" role="button"> Join</a>
          </div>
          <div class="media-section col-lg-6 my-3 my-lg-0">
            <img class="img-fluid" style="min-width: 100%;" src="tile-wide.png" alt="Logo">
          </div>
        </div>
      </div>
    </section>
</main>

<?php
  include_once("templates/footer.php");
  include_once("templates/scripts.php");
  include_once("templates/closing.php");
?>
