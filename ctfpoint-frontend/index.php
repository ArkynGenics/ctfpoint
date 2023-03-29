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
        <!--<link rel = "stylesheet" href = "./styles/login.css">-->
        <!-- <link rel = "stylesheet" href = "./styles/daftar.css">-->
        <style>
          /*get import family poppins */
          @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap');
          .navbar {
            font-family: 'Poppins', sans-serif;
          }

          section {
            padding-top: 5rem;
          }
          /*
          body {
            background-image: linear-gradient(to right, #6e0919, #e50d2f);
          }
          */
          .navbar-transparent {
            opacity: 90%;
          }

          .card-body{
            /*background-color: #FFEBC1;*/
            background-image: linear-gradient(to right, #D5CEA3, #E5E5CB);
          }
          
          html{
            height: 100%;
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

          .transition-btn{
            transition: background-color 0.3s ease-in-out;
          }

          .transition-btn:hover{
            background-color: rgb(28, 225, 169);
            color: black;
          }

          .form{
              text-align: center;
              display: flex;
              flex-direction: column;
              padding-top: 150px;
              position: inline;
              margin-left: 100px;
              margin-right: 100px;
              
          }

          .verif{
              padding-top: 50px;
          }

          .judulutama{
              margin-right: 100px;
              margin-left: 100px;
          }

          .input-title{
              text-align: center;
              padding-top: 20px;
              margin-bottom: 8px;
              margin-right: 100px;
              margin-left: 100px;
              position: relative;
          }
          .formbtn{
              width: 250px;
              height: 30px;
              align-self: center;
              margin:center;
              border: 1px solid;
              margin-top: 20px;
              background-color: #3C2A21;
              border-color: black;
              font-size: 18px;
              font-weight: 600;
              color: white;
              cursor: pointer;
          }
          .form-text input{
              font-size: 14px;
              height: 30px;
              background: none;
              color: white;
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
          <a class="nav-link <?php if ($page == "event"){ ?>
active
<?php } ?> me-3 fw-medium" aria-current="page" href="/ctfpoint/ctfpoint-frontend/?page=event">Events</a> <!-- adding me-3 to add spaces between the navbar link -->
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($page == "writeup"){ ?>
active
<?php } ?> me-3 fw-medium" href="/ctfpoint/ctfpoint-frontend/?page=writeup">WriteUps</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($page == "article"){ ?>
active
<?php } ?> me-3 fw-medium" href="/ctfpoint/ctfpoint-frontend/?page=article">Articles</a>
        </li>
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            arkoov
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Subscription</a></li>
            <li><a class="dropdown-item" href="/ctfpoint/ctfpoint-frontend/?page=login">Log out</a></li>
          </ul>
        </li>
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
    else if ($page == "writeup") {
      include('pages/writeup.php');
    }
    else if ($page == "article") {
      include('pages/article.php');
    }
    else if ($page == "writeup-content") {
      include('pages/writeup-content.php');
    }
    else if ($page == "article-content") {
      include('pages/article-content.php');
    }
    else if ($page == "article-content-edit") {
      include('pages/article-content-edit.php');
    }
    else if ($page == "writeup-content-edit") {
      include('pages/writeup-content-edit.php');
    }
    else if ($page == "writeup-edit") {
      include('pages/writeup-edit.php');
    } 
    else if ($page == "article-edit") {
      include('pages/article-edit.php');
    }

    ?>
  </main>
</body>
<script>
  window.addEventListener('load', e => {
    // verifyUser()
  })
  function verifyUser() {
  $.ajax({
    type: 'GET',
    url: 'http://localhost:8000/api/user/verify',
    success: (data) => {
      console.log(data)
    }
    ,
    error: (xhr, status, error) => {
      if(!location.search.includes('login')){
        location.replace(location.href = location.origin + location.pathname + '?page=login')
      }
    }
  })
}
  
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>