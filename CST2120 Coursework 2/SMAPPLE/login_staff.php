<?php
include('common.php');

admin_login_header()
?>

<!------ Start of body------->

<body>
  <div style="padding-top: 100px"></div>
  <a href="login.php" style="text-decoration: none; display: inline-block; padding: 8px 16px">&laquo; Back</a>
  <div class="login-box">
    <h1>Admin Login</h1>
    <p id="LoginPara" onsubmit="return false">
      <label>Username</label>
      <input type="text" name="staff_username" id="username" class="admin-input" required />
      <label>Password</label>
      <input type="password" name="admin_password" id="password" class="admin-input" required />
      <button type="submit" onclick="login()" class="submit-btn">Login</button>
    </p>
  </div>

  <script>
    //Global variables 
    let loggedInStr = "Logged in <button onclick='logout()'>Logout</button>";
    let loginStr = document.getElementById("LoginPara").innerHTML;


    function login() {

      let request = new XMLHttpRequest();

      request.onload = function() {
        //Check HTTP status code

        if (request.status === 200) {
          //Get data from server
          var responseData = request.responseText;

          //Add data to page
          if (responseData === "ok") {
            alert("Logged in successfully 😄 Welcome to CMS")
            location.href = 'add_products_admin.php'
          } else {
            alert(responseData)
            document.getElementById("ErrorMessages").innerHTML = request.responseText;
          }
        } else {
          document.getElementById("ErrorMessages").innerHTML = "Error communicating with server" + request.status;
        }
      };
      //Extract login data
      let usrName = document.getElementById("username").value;
      let usrPassword = document.getElementById("password").value;

      //Set up and send request
      request.open("POST", "staff_login.php");
      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      request.send("username=" + usrName + "&password=" + usrPassword);
    }
  </script>


</body>
<!---End of body----->

</html>
<!---End of the html code----->