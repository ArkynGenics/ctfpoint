<div class = "boxregis">
  <form onsubmit="register(event)">
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-8">
          <div class="card mt-5">
            <div class="card-body">
              <h5 class="centeralg">Register</h5>
              <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fullname" name="full_name" placeholder="Enter your fullname">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
              </div>

              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username"placeholder="Enter your username">
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password"name="password" placeholder="Enter your password">
              </div>

              <div class="mb-3">
                <label for="mobile_phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="mobile_phone" name="mobile_number" placeholder="Enter your phone number">
              </div>

              <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Enter your country">
              </div>

              <div class="mb-3">
                <label for="region" class="form-label">State/Region</label>
                <input type="text" class="form-control" id="region" name="region"placeholder="Enter your state">
              </div>

              <div class="mb-3">
                <label for="education" class="form-label">Education</label>
                <input type="text" class="form-control" id="education" name="education"placeholder="Enter your education">
              </div>

              <div class="mb-3">
                <label for="profession" class="form-label">Job/Profession</label>
                <input type="text" class="form-control" id="profession" name="profession"placeholder="Enter your job">
              </div>
         
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-warning">Register</button>
              </div>

              <p class="text-center mt-3">Already have an account? Login <a onclick="location.href = location.origin + location.pathname + '?page=login'" class = "blue" style="cursor: pointer;">here</a></p>

            </div>
          </div>
        </div> 
      </div>
    </div>
  </form>
</div>

<script>
function register(event) {
  event.preventDefault()
  let data = getData(event.target)
  $.ajax({
    type: 'POST',
    url: 'http://localhost:8000/api/user/register',
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: (data) => {
      if(data.success == true){
        alert("Registration Successful")
        location.href = location.origin + location.pathname + '?page=login'
      }
    },
    error: (xhr, status, error) => {
      // alert("Registration Failed");
      alert(JSON.stringify(xhr)); // changes made
      console.log(xhr);
      console.log(status);
      console.log(error);
    }
  })
}
</script>