<?php
  $title = "Upload";
  include "php/header.inc.php";
?>

  <!-- Main Content START -->
  <main>

    <!-- Hero START -->
    <div class="hero" style="background-image:url('img/PoliceVehicles.webp');background-repeat:no-repeat;background-size:cover;background-position:center;height:40vh;">
      <div class="h-100 d-flex justify-content-center align-items-center text-white text-center">
        <h1 class="font-weight-bold">AchillesDK PoliceMods<br>
        <span style="font-weight:200;font-size:2rem;">Upload</span></h1>
      </div>
    </div>
    <!-- Hero END -->

    <!-- Content START -->
    <div class="container mt-3">

      <div class="text-center" id="center">
        
        <div class="md-form">
          <input type="text" id="uploadTitle" name="uploadTitle" class="form-control">
          <label for="uploadTitle">Titel</label>
        </div>

        <div class="md-form">
          <textarea id="uploadInfo" name="uploadInfo" rows="3" class="md-textarea form-control"></textarea>
          <label for="uploadInfo">Info</label>
        </div>

        <div class="md-form">
          <input type="text" id="uploadLink" name="uploadLink" class="form-control">
          <label for="uploadLink">Direkte Download</label>
        </div>

        <div class="md-form">
          <input type="text" id="upload5ModsLink" name="upload5ModsLink" class="form-control">
          <label for="upload5ModsLink">GTA5Mods Link</label>
        </div>

        <div class="md-form">
          <select id="uploadCategory" name="uploadCategory" class="browser-default custom-select">
            <option selected>Vælg en kategori</option>
            <option value="emergency">Beredskabet</option>
            <option value="police">Politi</option>
            <option value="parts">Dele</option>
            <option value="civilian">Civil</option>
            <option value="publictransport">Offentlig Transport</option>
          </select>
        </div>

        <div class="md-form">
          <input type="text" id="uploadPhoto" name="uploadPhoto" class="form-control">
          <label for="uploadPhoto">Billede</label>
        </div>

        <button id="uploadBtn" class="btn btn-block btn-outline-success" onclick="upload()">Upload</button>

      </div>

    </div>
    <!-- Content END -->

  <!-- Main Content END -->
  </main>
  
<?php
  include "php/footer.inc.php";
?>