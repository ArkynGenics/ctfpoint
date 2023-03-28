<div class = "login">
  <form onsubmit="login(event)">
      <h2 style = "font-size:40px;font-weight: bold;color:white;padding-bottom:10px;" class = "judulutama">Login</h2>

      <div class = "juduluser">
          <label style = "font-size:20px;font-weight: bold;color:white;">Username/Email</label>
      </div>
      <div class = "login-text">
          <input type="text" name ="username" id="username" size = "55">
      </div>
      <div class = "judulpass">
          <label style = "font-size:20px;font-weight: bold;color:white;">Password</label>
      </div>
      <div class = "login-text">
          <input type="password" name="password" id="password" size = "55">
      </div>
      <button type ="submit" class = "btnlogin">Login</button>
  </form>
  <a onclick="location.href = location.origin + location.pathname + '?page=register'">Register</a>
  <div class = "verif">
      <p style="font-size:20px;font-weight: bold;color: red;"><?php echo $user; ?></p>
      <p style = "font-size:20px;font-weight: bold;color: red;"><?php echo $error; ?></p>
  </div>
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
      let res = JSON.parse(data)
      if(res.Success == true){
        document.cookie = `token=${data.jwtToken}`
        alert("Login Successful")
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