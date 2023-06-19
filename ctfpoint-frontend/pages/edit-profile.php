<body class="bekgron-wu">
    <?php
        $url = "http://localhost:8000/api/user/".$_COOKIE["username"] ;
        $response = file_get_contents($url);
        if ($response) {
            $dt = json_decode($response,true);
            $html = '
            <section id="edit-profile">
            <div class="container">
                <div class="container rounded mt-2 bg-white mb-5">
                    <div class="row">
                        <div class="col-md-3 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"></span><span class="text-black-50">'. $dt['data']['email'] .'</span><span>'. $dt['data']['username'] .'</span></div>
                        </div>
                        <div class="col-md-4 border-right">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Profile Settings</h4>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Full Name</label><input type="text" class="form-control" placeholder="Your name" value="'. $dt['data']['full_name'] .'"></div>
                                        <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" value="'. $dt['data']['username'] .'" placeholder="Your username"></div>
                                    </div>
                                    <div class="row mt-3">
                                    <div class="col-md-12 mb-2"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="Enter your number" value="'. $dt['data']['mobile_number'] .'"></div>
                                    <div class="col-md-12 mb-2"><label class="labels">E-mail</label><input type="text" class="form-control" placeholder="Enter your e-mail" value="'. $dt['data']['email'] .'"></div>
                                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="Your Education" value="'. $dt['data']['education'] .'"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="Country" value="'. $dt['data']['country'] .'"></div>
                                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="'. $dt['data']['region'] .'" placeholder="State"></div>
                                </div>
                            <div class="mt-5 text-center"><button class="btn btn-outline-dark profile-button" type="button">Save Profile</button></div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center experience"><h4>Optional Data</h4></div><br>
                            
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload Photo</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-md-12"><label class="labels">Job / Profession</label><input type="text" class="form-control" placeholder="Your Experience" value="'. $dt['data']['profession'] .'"></div> <br>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>';
            echo $html;
        } 
        ?>
    <script>
        function updateProfile(event) {
            event.preventDefault()
            let data = getData(event.target)
            data.user_id = "<?php $dt['data']['user_id'] ?>"
            console.log(data)
            $.ajax({
                type: 'PUT',
                url: 'http://localhost:8000/api/profile/update',
                data: JSON.stringify(data),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: (data) => {
                console.log(data)
                if(data.success == true){
                    alert("Update Successful")
                    location.reload()
                }
                },
                error: (xhr, status, error) => {
                alert("Update Failed")
                console.log(xhr)
                console.log(status)
                console.log(error)
                }
            })
            }
</script>
    

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background-image: linear-gradient(to right, #D5CEA3, #E5E5CB);">
        <h5 class="modal-title fw-semibold" id="exampleModalLabel">$4.99 ONLY!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="assets/skies.gif" class="w-100 rounded">
        <div class="container mt-3">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque saepe temporibus atque in. Quos, tenetur ipsum dolore, quod veniam molestiae beatae obcaecati explicabo voluptatem maxime laboriosam, quis aut ducimus dolor quas sunt adipisci excepturi vel?</p>
        <ul>
          <li>AAAAA</li>
          <li>AAAAA</li>
          <li>AAAAA</li>
          <li>AAAAA</li>
          <li>AAAAA</li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum aspernatur provident ducimus harum temporibus? Ipsam explicabo modi consequuntur eaque nemo.</p>
        </div>
        
      </div>
      <div class="modal-footer">
      <a href="/ctfpoint/ctfpoint-frontend/?page=subscription" class="btn btn-warning">GO PREMIUM</a>
      </div>
    </div>
  </div>
</div>
</body>


<!--
</div>
</div>
</div>
</div>
-->