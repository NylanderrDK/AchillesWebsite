<?php
  $title = "Log ind";
  include "php/header.inc.php";
?>

  <!-- Main Content START -->
  <main>

    <!-- Hero START -->
    <div class="hero" style="background-image:url('img/PoliceVehicles.webp');background-repeat:no-repeat;background-size:cover;background-position:center;height:40vh;">
      <div class="h-100 d-flex justify-content-center align-items-center text-white text-center">
        <h1 class="font-weight-bold">AchillesDK PoliceMods<br>
        <span style="font-weight:200;font-size:2rem;">Log ind</span></h1>
      </div>
    </div>
    <!-- Hero END -->

    <!-- Content START -->
    <div class="container mt-3">

      <div class="text-center" id="center">
        
        <div class="md-form">
          <input type="text" id="loginUID" name="loginUID" class="form-control">
          <label for="loginUID">Brugernavn / E-Mail</label>
        </div>

        <div class="md-form">
          <input type="password" id="loginPswd" name="loginPswd" class="form-control">
          <label for="loginPswd">Kodeord</label>
        </div>

        <button type="button" id="loginBtn" name="loginBtn" class="btn btn-block btn-outline-success" onclick="login()">Log ind</button>

      </div>

    </div>
    <!-- Content END -->

  <!-- Main Content END -->
  </main>
  
<?php
  include "php/footer.inc.php";
?>