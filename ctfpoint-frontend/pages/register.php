<div class = "form">
  <form onsubmit="register(event)">
      <h2 style = "font-size:40px;font-weight: bold;color:white;padding-bottom:10px;" class = "judulutama">Register</h2>
      <div class = "input-title">
          <label style = "font-size:20px;font-weight: bold;color:white;">Username</label>
      </div>
      <div class = "form-text">
          <input type="text" name ="username" id="username" size = "55">
      </div>
      <div class = "input-title">
          <label style = "font-size:20px;font-weight: bold;color:white;">Email</label>
      </div>
      <div class = "form-text">
          <input type="text" name ="email" id="email" size = "55">
      </div>
      <div class = "input-title">
          <label style = "font-size:20px;font-weight: bold;color:white;">Password</label>
      </div>
      <div class = "form-text">
          <input type="password" name="password" id="password" size = "55">
      </div>
        <button type ="submit" class = "formbtn">Register</button>
  </form>
    <button onclick="location.href = location.origin + location.pathname + '?page=login'" class = "formbtn">Login</button>
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
      if(data.Success == true){
        alert("Registration Successful")
        location.href = location.origin + location.pathname + '?page=login'
      }
    },
    error: (xhr, status, error) => {
      alert("Registration Failed")
      console.log(xhr);
      console.log(status);
      console.log(error);
    }
  })
}
</script>