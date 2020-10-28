<?php
  $title = "Forside";
  include "php/header.inc.php";
  include "php/dbh.inc.php";
  $latestSql = mysqli_query($conn, "SELECT * FROM uploads ORDER BY id DESC LIMIT 3");
  $popularSql = mysqli_query($conn, "SELECT * FROM uploads ORDER BY downloads DESC LIMIT 3");
?>

  <!-- Main Content START -->
  <main>

    <!-- Hero START -->
    <div class="hero" style="background-image:url('img/PoliceVehicles.webp');background-repeat:no-repeat;background-size:cover;background-position:center;height:40vh;">
      <div class="h-100 d-flex justify-content-center align-items-center text-white text-center">
        <h1 class="font-weight-bold">AchillesDK PoliceMods<br>
        <span style="font-weight:200;font-size:2rem;">Grand Theft Auto V Skinner & Modeller</span><br>
        <a href="#" class="btn btn-outline-white">Se mit arbejde</a></h1>
      </div>
    </div>
    <!-- Hero END -->

    <!-- Content START -->
    <div class="container mt-3">

      <!-- Intro START -->
      <div class="row pt-5 pb-5 border-bottom" id="intro">
        <div class="col-md text-center">
          <img src="img/PolicePassat.webp" alt="Volkswagen Passat Politibil" class="img-fluid">
        </div>
        <div class="col-md">
          <h2>AchillesDK PoliceMods</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quibusdam quia tenetur ipsa consectetur, repudiandae sapiente? Amet dolor nesciunt aut dignissimos, numquam, ratione quo expedita laudantium in earum voluptates maiores.</p>
          <hr>
          <p>Vær opmærksom på at jeg som udgangspunkt <strong>ikke</strong> laver arbejde for FiveM fællesskaber og lignende.</p>
          <a href="https://discord.com/invite/ECmqWD3" class="btn btn-outline-primary" target="_blank"><i class="fab fa-discord mr-3"></i> Discord</a>
        </div>
      </div>
      <!-- Intro END -->

      <!-- Latest Uploads START -->
      <div class="pt-5 pb-5 border-bottom">
        <h2>Seneste Uploads</h2>
        <div class="row">

          <?php while($latest = mysqli_fetch_array($latestSql)) { ?>

            <script>
              var model = "<?= $latest['title'] ?>";
            </script>
            
            <div class="col-md upload">
              <div class="card hoverable text-center">
                <img src="<?= $latest['photoLink'] ?>" alt="<?= $latest['title'] ?>" class="card-img-top">
                <div class="card-body">
                  <h3 class="card-title" style="font-size:1.25rem;"><?= $latest['title'] ?></h3>
                  <p class="card-text"><?= $latest['info'] ?></p>

                  <div class="row">
                    <div class="col-md upload">
                      <a href="<?= $latest['downloadLink'] ?>" class="btn btn-outline-success" onclick="downloadCount(model)">Download</a>
                    </div>
                    <div class="col-md upload">
                      <a href="<?= $latest['gta5modsLink'] ?>" class="btn btn-outline-info" target="_blank">GTA5Mods</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>

        </div>
        
      </div>
      <!-- Latest Uploads END -->

      <!-- Popular Uploads START -->
      <div class="pt-5 pb-5">
        <h2>Populære Uploads</h2>
        <div class="row">

          <?php while($popular = mysqli_fetch_array($popularSql)) { ?>

            <script>
              var model = "<?= $popular['title'] ?>";
            </script>
            
            <div class="col-md upload">
              <div class="card hoverable text-center">
                <img src="<?= $popular['photoLink'] ?>" alt="<?= $popular['title'] ?>" class="card-img-top">
                <div class="card-body">
                  <h3 class="card-title" style="font-size:1.25rem;"><?= $popular['title'] ?></h3>
                  <p class="card-text"><?= $popular['info'] ?></p>

                  <div class="row">
                    <div class="col-md upload">
                      <a href="<?= $popular['downloadLink'] ?>" class="btn btn-outline-success" onclick="downloadCount(model)">Download</a>
                    </div>
                    <div class="col-md upload">
                      <a href="<?= $popular['gta5modsLink'] ?>" class="btn btn-outline-info" target="_blank">GTA5Mods</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>

        </div>
        
      </div>
      <!-- Popular Uploads END -->

    </div>
    <!-- Content END -->

  <!-- Main Content END -->
  </main>

<?php
  include "php/footer.inc.php";
?>