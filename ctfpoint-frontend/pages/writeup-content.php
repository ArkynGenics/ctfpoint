
<section class="pt-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end container">
        <a href="/ctfpoint/ctfpoint-frontend/?page=writeup" class="btn btn-secondary">Go Back</a>
    </div>
</section>

<section class="pt-3 pb-4">
<div class="container">
    <div class="card text-center">
        <?php
        $url = "http://localhost:8000/api/writeup/:id";
        $url = str_replace(':id', $_GET['id'], $url);
        $response = file_get_contents($url);
        if ($response) {
            $dt = json_decode($response,true);
            $html = '<div class="card-body"> 
            <h5 class="card-title">'. $dt['data']['title'] .'</h5>
            <p class="card-text">'. $dt['data']['language_used'] .'</p>
            </div>';
            echo $html;
        } 
        ?>
    </div>
    <?php
            echo '<div id="pdf-container"></div>';
            echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>';
            $js = '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var pdfContainer = document.getElementById("pdf-container");

                        pdfjsLib.getDocument("./pdfs/'. $dt['data']['wu_filename'] .'").promise.then(function(pdf) {
                            for (var pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
                                pdf.getPage(pageNumber).then(function(page) {
                                    var canvas = document.createElement("canvas");
                                    var context = canvas.getContext("2d");

                                    var viewport = page.getViewport({ scale: 1.5 });
                                    canvas.width = viewport.width;
                                    canvas.height = viewport.height;

                                    var renderContext = {
                                        canvasContext: context,
                                        viewport: viewport
                                    };

                                    page.render(renderContext).promise.then(function() {
                                        pdfContainer.appendChild(canvas);
                                    });
                                });
                            }
                        });
                    });
                    </script>';
                echo $js;
        ?>
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
