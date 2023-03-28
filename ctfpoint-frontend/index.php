<html lang="en">
<head>
  <script>
      function getData(form) {
        var formData = new FormData(form);
        return Object.fromEntries(formData)
      }
      function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
      }
    </script>
      <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <title>CTFPoint</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel = "stylesheet" href = "./styles/login.css">
        <link rel = "stylesheet" href = "./styles/daftar.css">
        <style>
          /*Import font-family poppins.*/
          @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap');
          .navbar {
            font-family: 'Poppins', sans-serif;
          }
          section {
            padding-top: 5rem;
          }
          .navbar-transparent {
            opacity: 90%;
          }
          .card-body{
            /*background-color: #FFEBC1;*/
            background-image: linear-gradient(to right, #D5CEA3, #E5E5CB);
          }
          html{
            height: 110%;
          }
          body{
            /*background-image: linear-gradient(to bottom, #8E3200, #D7A86E);*/
            background-color: #3C2A21;
            background-repeat: no-repeat;
            font-family: 'Poppins', sans-serif;
          }
          .dropdown-menu li{
            transition: all 1s ease 0s;
          }
          .dropdown-menu li a:hover {
            background-color: #D7A86E;
            color: black;
          }
        </style>
</head>

<?php
if (isset($_GET["page"])) {
  $page = $_GET["page"];
}
else {
  $page = "event";
}
?>

<body>
  <main>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top navbar-transparent" style="background-image: linear-gradient(to right, #1A120B, #3C2A21);" > <!-- Notes, coba bkin ke right gradasinya.-->
      <!--<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top navbar-transparent" style="background-color: #1A120B" >-->
    <div class="container">
      <a class="navbar-brand fw-bolder" href="#home">CTFPoint</a> <!-- fw-bolder, it makes font size bolder-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto"> <!-- ms-auto class, used to aligned the list in navbar to the right -->
          <li class="nav-item">
            <a class="nav-link me-3 fw-medium" href="ctfpoint-frontend/page=event">Event</a> <!-- adding me-3 to add spaces between the navbar link -->
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 fw-medium" aria-current="page" href="#writeups">WriteUps</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 fw-medium" href="#">Articles</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
        <a href = "">
        <button class="btn btn-dark active" onclick="location.href = location.origin + location.pathname + '?page=login'">
              Login
        </button>
        </a>
        </ul>
      </div>
      </div>
    </div>
  </nav>
    <?php
    if ($page == "register") {
      include('pages/register.php');
    }
    else if ($page == "login") {
      include('pages/login.php');
    }
    else if ($page == "event") {
      include('pages/event.php');
    }
    ?>
  </main>
</body>

<script>

</script>

</html>