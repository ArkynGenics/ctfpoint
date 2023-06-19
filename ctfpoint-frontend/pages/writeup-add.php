<body class="bekgron-add-wu">
    <section id="add-writeups">
        <div class="container">
            <!-- BUAT KE TENGAHIN FORMNYA -->
            <div class="row justify-content-center">
            <!-- COLUMN MEDIUM 8, biar ngga terlalu panjang -->
            <div class="col-md-6">
              <div class="container bg-dark pt-3 rounded pb-2">
              <form>
                <div class="col">
                    <h2 class="text-light text-center fw-bold">WRITEUP UPLOAD</h2>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label text-light">Author Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" />
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label text-light">Category</label>
                    <input type="text" class="form-control" id="category" aria-describedby="category" />
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label text-light">Writeup Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="title" />
                </div>
                <div class="mb-3">
                    <label for="language-used" class="form-label text-light">Language Used</label>
                    <input type="text" class="form-control" id="language-used" aria-describedby="language-used" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label text-light">Upload File</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-outline-warning">Send data</button>
                </form>
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
</body>