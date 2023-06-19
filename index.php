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
            /*background-color: #D5CEA3;*/
            /*background-image: linear-gradient(to right, #D5CEA3, #E5E5CB);*/
            background-color: #E6E6E6;
          }

          .kartu-bekgron{
            background-image: linear-gradient(to right, #D5CEA3, #E5E5CB);
          }
          
          html{
            height: 100%;
          }

          body{
            /*background-image: linear-gradient(to bottom, #8E3200, #D7A86E);*/
            /*background-color: #B85C38;*/
            background-color: rgb(101,67,33);

            background-repeat: repeat;
            font-family: 'Poppins', sans-serif;
          }
          .bekgron-add-wu{
            /*background-image: linear-gradient(to right, #884A39, #C38154);*/
            /*background-image: linear-gradient(to right, #603601, #CC9544);*/
            background-image: url('assets/cafe.gif');
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
            background-color: rgb(101, 67, 33);
            color: light;
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

          .jumbotron {
              padding-top: 6rem; /* atas bawh 2 rem, kri kanan 1 rem */
              background-color: #d8c9c3;
            }

          #projects {
              background-color: #d8c9c3;
          }

          .bg-brown {
              background-color: #a52a2a;
          }

          section {
              padding-top: 5rem; /* pas ke direct kesni, jadi pas keliatannya */
          }

          .form-control:focus {
              box-shadow: none;
              border-color: #C38154;
          }
          .bekgron-wu{
            background-image: url('assets/cafe.gif');
          }

          .bekgron-add-wu{
            /*background-image: linear-gradient(to right, #884A39, #C38154);*/
            background-image: url("assets/cafe.gif");
          }

          .card-header {
            padding: .5rem 1rem;
            margin-bottom: 0;
            background-color: rgba(0,0,0,.03);
            border-bottom: none;
        }

        .btn-light:focus {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5;
            box-shadow: 0 0 0 0.2rem rgba(216,217,219,.5);
        }
        /*
        .form-control{

          height: 50px;
    border: 2px solid #eee;
    border-radius: 6px;
    font-size: 14px;
        }
        */

    .input{

      position: relative;
    }

    .input i{

          position: absolute;
    top: 16px;
    left: 11px;
    color: #989898;
    }

    .input input{

      text-indent: 25px;
    }

    .card-text{

      font-size: 13px;
    margin-left: 6px;
    }

    .certificate-text{

      font-size: 12px;
    }
    #pdf-container {
            width: 100%;
            height: 100%;
            padding:12em;
            padding-top: 0em;
        }
    .billing{
      font-size: 11px;
    }  

    .super-price{

          top: 0px;
    font-size: 22px;
    }

    .super-month{

          font-size: 11px;
    }


    .line{
      color: #bfbdbd;
    }
    .payment-card-body{

    flex: 1 1 auto;
    padding: 24px 1rem !important;

    }

    .boxlogin{
    display: flex;
    flex-direction: column;
    padding-top: 150px;
    position: inline;
    margin-left: 100px;
    margin-right: 100px;     
    }
    .centeralg{
    text-align: center;
    } 

    .blue{
      color: blue
    }

    .boxregis{
    display: flex;
    flex-direction: column;
    padding-top: 50px;
    position: inline;
    margin-left: 100px;
    margin-right: 100px;     
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
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top navbar-transparent" style="background-image: linear-gradient(to right, #3C2A21, #5C3D2E);" > <!-- Notes, coba bkin ke right gradasinya.-->
    <!--<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top navbar-transparent" style="background-color: #1A120B" >-->
  <div class="container">
    <a class="navbar-brand fw-bolder" href="/ctfpoint/ctfpoint-frontend/?page=about-us">CTFPoint</a> <!-- fw-bolder, it makes font size bolder-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto"> <!-- ms-auto class, used to aligned the list in navbar to the right -->
        <li class="nav-item">
          <a class="nav-link <?php if ($page == "event" || $page == "event-ongoing"){ ?>
active
<?php } ?> me-3 fw-medium" aria-current="page" href="/ctfpoint/ctfpoint-frontend/?page=event">Events</a> <!-- adding me-3 to add spaces between the navbar link -->
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($page == "writeup"){ ?>
active
<?php } ?> me-3 fw-medium" href="/ctfpoint/ctfpoint-frontend/?page=writeup">WriteUps</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($page == "about-us"){ ?>
active
<?php } ?> me-3 fw-medium" href="/ctfpoint/ctfpoint-frontend/?page=about-us">About Us</a>
        </li>
        <li class="nav-item">
                <?php if(!isset($_COOKIE["username"])&&$_SERVER['REQUEST_URI'] != "/ctfpoint/ctfpoint-frontend/?page=login") echo '<a class="nav-link" href="/ctfpoint/ctfpoint-frontend/?page=login">Log In</a>'?>
                </li>
        <li class="nav-item dropdown">
         <?php if(isset($_COOKIE["username"]) && $_SERVER['REQUEST_URI'] != "/ctfpoint/ctfpoint-frontend/?page=login"&& $_SERVER['REQUEST_URI'] != "/ctfpoint/ctfpoint-frontend/?page=register") echo '<button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">'.$_COOKIE["username"].'
          </button>'?>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="/ctfpoint/ctfpoint-frontend/?page=edit-profile">Edit Profile</a></li>
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
      include('pages/event-upcoming.php');
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
    else if ($page == "event-ongoing"){
      include('pages/event-ongoing.php');
    }
    else if ($page == "about-us"){
      include('pages/about-us.php');
    }
    else if ($page == "edit-profile"){
      include('pages/edit-profile.php');
    }
    else if ($page == "writeup-add"){
      include('pages/writeup-add.php');
    }
    else if ($page == "subscription"){
      include('pages/subscription.php');
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
