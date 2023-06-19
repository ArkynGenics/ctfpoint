<section id="event">
  <div class="container">
  <a href="/ctfpoint/ctfpoint-frontend/?page=event" class="btn btn-outline-warning btn-sm fw-bold">UPCOMING</a>
  <a href="#" class="btn btn-sm fw-bold" style="background-image: linear-gradient(to right, #D5CEA3, #E5E5CB);">ONGOING</a>

    <!--
    <div class="dropdown-center">
      <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Click here to sort
      </button>
  
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Latest</a></li>
      </ul>
    </div>
-->
  </div>
</section>

<section class="pt-3">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-4">
      <div class="col pb-3">
        <div class="card"> 
          <img src="assets/CSC.png" class="card-img-top" alt="...">
            <div class="card-body"> <!-- Body card bagian description -->
              <h5 class="card-title">National Cyber Week</h5>
              <p class="card-text">National Cyber Week is a competition for university student</p>
              <a href="https://cscbinus.com/" class="btn btn-warning">See more</a>
            </div>
        </div>
      </div>
      <div class="col pb-3">
        <div class="card">
          <img src="assets/pico.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">picoCTF</h5>
              <p class="card-text">picoCTF 2023 is a competition for university student</p>
              <a href="https://picoctf.org/" class="btn btn-warning">See more</a>
            </div>
        </div>
      </div>
      <div class="col pb-3">
        <div class="card">
          <img src="assets/htb.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Hack The Box</h5>
              <p class="card-text">Where hackers level up! An online cybersecurity training platform.</p> <!-- Limited to 66 chars -->
              <a href="https://www.hackthebox.com/" class="btn btn-warning">See more</a>
            </div>
        </div>
      </div>
      <div class="col pb-3">
        <div class="card">
          <img src="assets/flag.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">ctflearn</h5>
              <p class="card-text">The most beginner-friendly way to get into hacking. Get 1337 now!</p>
              <a href="https://ctflearn.com/" class="btn btn-warning">See more</a>
            </div>
        </div>
      </div>
  </div>
</section>

<section class="pt-3 mb-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-4">
      <div class="col pb-3">
        <div class="card"> 
          <img src="assets/CSC.png" class="card-img-top" alt="...">
            <div class="card-body"> <!-- Body card bagian description -->
              <h5 class="card-title">National Cyber Week</h5>
              <p class="card-text">National Cyber Week is a competition for university student</p>
              <a href="https://cscbinus.com/" class="btn btn-warning">See more</a>
            </div>
        </div>
      </div>
      <div class="col pb-3">
        <div class="card">
          <img src="assets/pico.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">picoCTF</h5>
              <p class="card-text">picoCTF 2023 is a competition for university student</p>
              <a href="https://picoctf.org/" class="btn btn-warning">See more</a>
            </div>
        </div>
      </div>
      <div class="col pb-3">
        <div class="card">
          <img src="assets/htb.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Hack The Box</h5>
              <p class="card-text">Where hackers level up! An online cybersecurity training platform.</p> <!-- Limited to 66 chars -->
              <a href="https://www.hackthebox.com/" class="btn btn-warning">See more</a>
            </div>
        </div>
      </div>
  </div>
</section>

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

<script>
  window.addEventListener('load', e => {
    getEvents()
  })
  function getEvents() {
  $.ajax({
    type: 'GET',
    url: 'http://localhost:8000/api/event/',
    success: (data) => {
      console.log(data)
    }
    ,
    error: (xhr, status, error) => {
      console.log(xhr)
      console.log(status)
      console.log(error)
    }
  })
}
</script>