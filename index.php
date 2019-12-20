<?php
  include_once("templates/commonFunctions.php");
  include_once("templates/head.php");
?>
<?php include_once("templates/main_navbar.php"); ?>
<main>
  <!-- Notifications -->

  <?php
    if (isset($_GET['mensaje'])) {
      include("templates/messages.php");
      $message = $messageList[$_GET['mensaje']];
    
  ?>
  <div class="toast" style="position: fixed; top: 2rem; right: 2rem; z-index: 1000;" data-delay="1200">
    <div class="toast-header">
      <strong class="mr-auto">Information</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      <?php
      echo($message);
      ?>
    </div>
  </div>
  <?php
    }
  ?>

  <!-- Main Content -->
  <section id="home" class="py-5 text-white">
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
    <?php
      $wallpaper = getRandomWallpaper();
      $backgroundSetting = "img/backgrounds/$wallpaper";
      echo("<div class='parallax-window' data-parallax='scroll' data-image-src='$backgroundSetting'></div>");
    ?>
    <section id="characteristics" class="py-5 text-white">
      <div class="container">
       All the tools you need to create worlds and play your tabletop roleplay adventures.
      </div>
    </section>
    <?php
      $wallpaper = getRandomWallpaper();
      $backgroundSetting = "img/backgrounds/$wallpaper";
      echo("<div class='parallax-window' data-parallax='scroll' data-image-src='$backgroundSetting'></div>");
    ?>
    <section id="players" class="py-5 text-white">
      <div class="container">
        Create and customize your perfect characters using common or custom character sheets, and live epic moments with it. 
      </div>
    </section>
    <?php
      $wallpaper = getRandomWallpaper();
      $backgroundSetting = "img/backgrounds/$wallpaper";
      echo("<div class='parallax-window' data-parallax='scroll' data-image-src='$backgroundSetting'></div>");
    ?>
    <section id="gms" class="py-5 text-white">
      <div class="container">
        Host and prepare great adventures for your players. With our step-by-step system, setting up a game never was easier.
      </div>
    </section>
    <?php
      $wallpaper = getRandomWallpaper();
      $backgroundSetting = "img/backgrounds/$wallpaper";
      echo("<div class='parallax-window' data-parallax='scroll' data-image-src='$backgroundSetting'></div>");
    ?>
    <section id="pricing" class="py-5">
    
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4  text-white">Pricing</h1>
      <p class="lead  text-white">There are several options of to choose from.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center flex-lg-row flex-column">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Join up to 5 games</li>
              <li>1 PJ storage</li>
              <li>Host 1 game</li>
              <li>100mb of space for game assets</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">VIP Player</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$5 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Unlimited amount of games to join</li>
              <li>Unlimited PJ storage.</li>
              <li>Host up to 5 games</li>
              <li>100mb of space for game assets</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">VIP GM</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$10 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Unlimited amount of games to join</li>
              <li>Unlimited PJ storage.</li>
              <li>Unlimited amounts of games to host</li>
              <li>Unlimited space for game assets</li>
              <li>Acces to the random NPC generator</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
          </div>
        </div>
      </div>
    </div>

    </section>
  <?php
  include_once("templates/footer.php");
  ?>
</main>

<?php
  include_once("templates/footer.php");
  include_once("templates/scripts.php");
  include_once("templates/closing.php");
?>
