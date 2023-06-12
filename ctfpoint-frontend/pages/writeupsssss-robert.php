<section id="writeups">
  <div class="container">
    <h3 class="fw-bolder text-light"> Writeups</h3>
    <div class="dropdown-center">
      <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Click here to sort
      </button>
  
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Latest</a></li>
      </ul>
      <button class="btn btn-secondary transition-btn" type="button"  aria-expanded="false">
        Submit
      </button>
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
        $count = 0;
        foreach($data as $dt){
          if($count % 2 == 0){
            $html = '<div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-bolder">'. $dt->title .'</h5>
                <p class="card-text">Author : '. $dt->author .'</p>
                <a href="/ctfpoint/ctfpoint-frontend/?page=writeup-content&id='. $dt->writeup_id .'" class="btn btn-primary">Read now</a>
                <a href="/ctfpoint/ctfpoint-frontend/?page=writeup-edit&id='. $dt->writeup_id .'" class="btn btn-success">En-US</a>
              </div>
            </div>
          </div>';
          echo $html;
          }else{
            $html = '<div class="col-sm-6 pb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-bolder">'. $dt->title .'</h5>
                <p class="card-text">Author : '. $dt->author .'</p>
                <a href="/ctfpoint/ctfpoint-frontend/?page=writeup-content&id='. $dt->writeup_id .'" class="btn btn-primary">Read now</a>
                <a href="/ctfpoint/ctfpoint-frontend/?page=writeup-edit&id='. $dt->writeup_id .'" class="btn btn-success">En-US</a>
              </div>
            </div>
          </div>';
          echo $html;
          }
          $count++;
        }
  
      ?>
    </div>
  </div>

</section>

<!-- MODAL --> 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-image: linear-gradient(to right, #D5CEA3, #E5E5CB);">
        <h5 class="modal-title fw-semibold" id="exampleModalLabel">PREMIUM SUBSCRIPTION 5$</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Benefit...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary transition-btn">Get Premium</button>
      </div>
    </div>
  </div>
</div>
