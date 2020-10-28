// Login function
function login() {
  var uid = $("#loginUID").val();
  var pswd = $("#loginPswd").val();

  $.post("./php/login.inc.php", {uid: uid, pswd: pswd}, function(data) {
    if(data == "done") {
      window.location.replace("index.php");
    } else {
      console.log(data);
    }
  })
}

// Upload function
function upload() {
  var title = $("#uploadTitle").val();
  var info = $("#uploadInfo").val();
  var link = $("#uploadLink").val();
  var modsLink = $("#upload5ModsLink").val();
  var category = $("#uploadCategory").val();
  var photo = $("#uploadPhoto").val();

  $.post("./php/upload.inc.php", {title: title, info: info, link: link, modsLink: modsLink, category: category, photo: photo}, function(data) {
    if(data == "done") {
      window.location.replace("index.php");
    } else {
      console.log(data);
    }
  });
}

// Download function
function downloadCount(name) {
  var newDownload = 1;

  $.post("./php/download.inc.php", {newDownload: newDownload, name: name}, function(data) {
    if(data == "done") {
      window.location.replace("index.php");
    } else {
      console.log(data);
    }
  })
}