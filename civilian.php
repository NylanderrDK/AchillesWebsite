<?php
  $title = "Civil";
  include "php/header.inc.php";
  include "php/dbh.inc.php";
  $latestSql = mysqli_query($conn, "SELECT * FROM uploads WHERE category = 'civilian' ORDER BY id DESC LIMIT 3");
  $popularSql = mysqli_query($conn, "SELECT * FROM uploads WHERE category = 'civilian' ORDER BY downloads DESC LIMIT 3");
?>

  <!-- Main Content START -->
  <main>

    <!-- Hero START -->
    <div class="hero" style="background-image:url('img/VolkswagenArteon.webp');background-repeat:no-repeat;background-size:cover;background-position:center;height:40vh;">
      <div class="h-100 d-flex justify-content-center align-items-center text-white text-center">
        <h1 class="font-weight-bold">AchillesDK PoliceMods<br>
        <span style="font-weight:200;font-size:2rem;">Civil</span></h1>
      </div>
    </div>
    <!-- Hero END -->

    <!-- Content START -->
    <div class="container mt-3">

      <!-- Latest Uploads START -->
      <div class="pt-5 pb-5 border-bottom">
        <h2>Seneste Uploads</h2>
        <div class="row">

        <?php while($latest = mysqli_fetch_array($latestSql)) { ?>
            
            <div class="col-md upload">
              <div class="card hoverable text-center">
                <img src="<?= $latest['photoLink'] ?>" alt="<?= $latest['title'] ?>" class="card-img-top">
                <div class="card-body">
                  <h3 class="card-title" style="font-size:1.25rem;"><?= $latest['title'] ?></h3>
                  <p class="card-text"><?= $latest['info'] ?></p>

                  <div class="row">
                    <div class="col-md upload">
                      <a href="<?= $latest['downloadLink'] ?>" class="btn btn-outline-success">Download</a>
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
      <div class="pt-5 pb-5 border-bottom">
        <h2>Populære Uploads</h2>
        <div class="row">

        <?php while($popular = mysqli_fetch_array($popularSql)) { ?>
            
            <div class="col-md upload">
              <div class="card hoverable text-center">
                <img src="<?= $popular['photoLink'] ?>" alt="<?= $popular['title'] ?>" class="card-img-top">
                <div class="card-body">
                  <h3 class="card-title" style="font-size:1.25rem;"><?= $popular['title'] ?></h3>
                  <p class="card-text"><?= $popular['info'] ?></p>

                  <div class="row">
                    <div class="col-md upload">
                      <a href="<?= $popular['downloadLink'] ?>" class="btn btn-outline-success">Download</a>
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