<div class = "boxlogin">
  <form onsubmit="login(event)">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-8">
          <div class="card mt-5">
            <div class="card-body">
              <h5 class="centeralg">Login</h5>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username"placeholder="Enter your username">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-warning">Login</button>
              </div>
              <p class="text-center mt-3">Don't have an account? Register <a onclick="location.href = location.origin + location.pathname + '?page=register'" class = "blue" style="cursor: pointer;">here</a></p>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </form>
  
</div>


<script>
function login(event) {
  event.preventDefault()
  let data = getData(event.target)
  console.log(data)
  $.ajax({
    type: 'POST',
    url: 'http://localhost:8000/api/user/login',
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    success: (data) => {
      console.log(data)
      if(data.success == true){
        alert("Login Successful")
        document.cookie = `username=${data.username};token=${data.token}`
        location.href = location.origin + location.pathname + '?page=event'
      }
    },
    error: (xhr, status, error) => {
      alert("Login Failed")
      console.log(xhr)
      console.log(status)
      console.log(error)
    }
  })
}
</script>

</html>