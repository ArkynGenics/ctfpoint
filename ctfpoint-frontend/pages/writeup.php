<body style="background-image:url('./assets/city-katanya.png')">
  <section id="writeups">
  <div class="container">
    <div class="dropdown-center">
      <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#E6E6E6;">
        Click here to sort
      </button>
  
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Latest</a></li>
      </ul>
      <a href="/ctfpoint/ctfpoint-frontend/?page=writeup-add" class="btn btn-secondary transition-btn fw-bold">SUBMIT</a>
    </div>
  </div>
</section>

<section class="pt-3 pb-5" >
  <div class="container">
    <div class="row">
        <!-- mb-3 adds a margin-bottom of 16 px, mb-sm-0, removes the margin-bottom on sall screens.-->
        <!-- Hence, the entire code div element you provided would create a column that is 6 columns  wide on small screens -->
        <!-- With a margin-bottom of 16 px on all screens except small screens where the margin=-bottom is removed.-->
        <?php 
        $url = "http://localhost:8000/api/writeup/";
        $JSON = file_get_contents($url);
        $datadecode = json_decode(($JSON));
        $data = $datadecode->data;
        $arr = array();
        $totalpage = 0;
        $val = 0;
        for($i = 0; $i < ceil(count($data) / 10); $i++){
            $dt = array_slice($data, $val,10);
            $val += 10;
            for($j = 0; $j < count($dt); $j++){
                $arr[$i][$j] = $dt[$j];
            }
          $totalpage++;
        }
        $page = isset($_GET['halaman']) ? $_GET['halaman']-1 : 0;
        $count = 0;
        for($j = 0; $j < count($arr[$page]); $j++){
            if($count % 2 == 0){
            $html = '<div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-bolder">'. $arr[$page][$j]->title .'</h5>
                <p class="card-text">Author : '. $arr[$page][$j]->author .'</p>
                <a href="/ctfpoint/ctfpoint-frontend/?page=writeup-content&id='. $arr[$page][$j]->writeup_id .'" class="btn text-light transition-btn" style="background-color: #5C3D2E;">Read now</a>
                <a href="#" class="btn btn-success">'. $arr[$page][$j]->language_used .'</a>
              </div>
            </div>
          </div>';
          }else{
            $html = '<div class="col-sm-6 pb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-bolder">'. $arr[$page][$j]->title .'</h5>
                <p class="card-text">Author : '. $arr[$page][$j]->author .'</p>
                <a href="/ctfpoint/ctfpoint-frontend/?page=writeup-content&id='. $arr[$page][$j]->writeup_id .'" class="btn text-light transition-btn" style="background-color: #5C3D2E;">Read now</a>
                <a href="#" class="btn btn-success">'. $arr[$page][$j]->language_used .'</a>
              </div>
            </div>
          </div>';
        }
          echo $html;
          $count++;
        }
      ?>
    </div>
  </div>

</section>



<!-- MODAL --> 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background-image: linear-gradient(to right, #884A39, #C38154);">
        <h5 class="modal-title fw-semibold" id="exampleModalLabel">$4.99 ONLY!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="assets/skies.gif" class="w-100 rounded">
        <div class="container mt-3">
        <p>Are you passionate about cybersecurity and eager to enhance your skills through CTF challenges? Look no further! Our CTF Writeup Subscription offers you an exciting features.</p>
          <p>Subscription Features:</p>
        <ul>
          <li>Increase user exposure and making your write up in the top.</li>
          <li>Gain access to our premium Indonesian language.</li>
          <li>Exclusive partnership opportunities.</li>
        </ul>
        <p>Don't miss out on these incredible benefits! Subscribe today and join our vibrant community of writers and readers, and unlock your full potential with our subscription service.</p>
        </div>
        
      </div>
      <div class="modal-footer">
      <a href="/ctfpoint/ctfpoint-frontend/?page=subscription" class="btn btn-warning btn-md fw-medium">GO PREMIUM</a>
      </div>
    </div>
  </div>
</div>


<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <?php
        $j = 1;
        if($totalpage < 15){
          for($i = 1; $i <= $totalpage; $i++){
            $html = '
            </li>
            <li class="page-item"><a class="page-link text-dark" style="background-color: #C38154;" href="/ctfpoint/ctfpoint-frontend/?page=writeup&halaman='. $i .'">'. $i .'</a></li>
            <li class="page-item">
            ';
            echo $html;
          }
        }else{
          if(isset($_GET['act']) && $_GET['act'] == "prev"){
            $j -= 15;
          }else if(isset($_GET['act']) && $_GET['act'] == "next"){
            $j += 15;
          }
          if($totalpage - $j*15 < 15){
            $html2 = '<a class="page-link text-dark" style="background-color: #C38154;" href="/ctfpoint/ctfpoint-frontend/?page=writeup&act=prev" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              </a>';
            echo $html2;
            for($i = $j; $i <= $totalpage; $i++){
              $html = '
              </li>
              <li class="page-item"><a class="page-link text-dark" style="background-color: #C38154;" href="/ctfpoint/ctfpoint-frontend/?page=writeup&halaman='. $i .'">'. $i .'</a></li>
              <li class="page-item">
              ';
              echo $html;
            }
          }else if($j == 1){
            for($i = 1; $i <= 15; $i++){
              $html = '
              </li>
              <li class="page-item"><a class="page-link text-dark" style="background-color: #C38154;" href="/ctfpoint/ctfpoint-frontend/?page=writeup&halaman='. $i .'">'. $i .'</a></li>
              <li class="page-item">
              ';
              echo $html;
            }
            $html2 = '<a class="page-link text-dark" style="background-color: #C38154;" href="/ctfpoint/ctfpoint-frontend/?page=writeup&act=next" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            </a>';
            echo $html2;
          }else{
            $html = '<a class="page-link text-dark" style="background-color: #C38154;" href="/ctfpoint/ctfpoint-frontend/?page=writeup&act=prev" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            </a>';
            echo $html;
            for($i = $j; $i <= $j*2; $i++){
            $html2 = '
            </li>
            <li class="page-item"><a class="page-link text-dark" style="background-color: #C38154;" href="/ctfpoint/ctfpoint-frontend/?page=writeup&halaman='. $i .'">'. $i .'</a></li>
            <li class="page-item">
            ';
            echo $html2;
          }
          $html3 = '<a class="page-link text-dark" style="background-color: #C38154;" href="/ctfpoint/ctfpoint-frontend/?page=writeup&act=next" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            </a>';
          echo $html3;
        }
        }
      ?></body>