<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top justify-content-between" style="z-index: 1000;">
  <a href="index.php"><span class="navbar-brand mb-0 h1">TableRune</span></a>

  <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') { ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#characteristics">Characteristics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#players">For Players</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#gms">For GMs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#pricing">Pricing</a>
      </li>
    </ul>
  </div>

  <?php } ?>
  <!-- Button trigger modal -->
  <?php
    if (!isset($_SESSION['userid'])) {
  ?>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
  login
  </button>
  
</nav>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark text-white overflow-hidden border-fix">
      <div class="modal-header border-0">
        <h3 class="modal-title" id="loginTitle">Welcome Back</h5>
      </div>
      <div class="modal-body">
        <form action="authenticate.php" method="post">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
              </div>
              <input type="text" class="form-control" placeholder="username" name="username">
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i></div>
              </div>
              <input type="password" class="form-control" placeholder="password" name="password">
            </div>
            <small id="emailHelp" class="form-text"><a href="#">Forgot your password?</a></small>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="recuerdame">
            <label class="form-check-label" for="recuerdame">Remember me</label>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
    } else {
?>

<div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myprofile">
  My Profile
</button>
<a class="btn btn-danger" href="killsesion.php" role="button">Logout</a>
</div>
  
</nav>


<!-- Modal -->
<div class="modal fade" id="myprofile" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark text-white overflow-hidden border-fix">
      <?php include_once("templates/profilecard.php"); ?>
    </div>
  </div>
</div>
<?php
    }
