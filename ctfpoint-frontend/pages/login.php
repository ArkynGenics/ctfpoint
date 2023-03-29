<div class = "form">
  <form onsubmit="login(event)">
      <h2 style = "font-size:40px;font-weight: bold;color:white;padding-bottom:10px;" class = "judulutama">Login</h2>
      <div class = "input-title">
          <label style = "font-size:20px;font-weight: bold;color:white;">Username/Email</label>
      </div>
      <div class = "form-text">
          <input type="text" name ="username" id="username" size = "55">
      </div>
      <div class = "input-title">
          <label style = "font-size:20px;font-weight: bold;color:white;">Password</label>
      </div>
      <div class = "form-text">
          <input type="password" name="password" id="password" size = "55">
      </div>
        <button type ="submit" class = "formbtn">Login</button>
  </form>
    <button onclick="location.href = location.origin + location.pathname + '?page=register'" class = "formbtn">Register</button>
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
      if(data.Success == true){
        document.cookie = `username=${data.username}`
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

</html>