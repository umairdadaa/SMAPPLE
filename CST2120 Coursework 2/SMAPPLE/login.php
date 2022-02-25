<?php
include('common.php');

output_header_navigation("Login", "")
?>

<!---Start Content----->


<div class="login-box">
    <h1>Login</h1>
    <p id="LoginPara" onsubmit="return false">
        <label>Email</label>
        <input type="email" name="customer_email" id="email" class="login-input" required>
        <label>Password</label>
        <input type="password" name="customer_password" id="password" class="login-input" required />
        <button type="submit" onclick="login()" class="submit-btn">Continue</button>
    <p style="color: red" id="ErrorMessages"></p>
    </p>
    <p class="create-account-text">
        By creating an account, you agree to SMAPPLE
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
    </p>
</div>
<p class="para-2">
    New to SMAPPLE? <a href="register.php">Create your SMAPPLE account</a>
    <br>
    <br>
    <button type="button" class="btn btn-outline-secondary"><a href="login_staff.php">I am a SMAPPLE employee</a></button>
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
                    alert("Logged in successfully 😄")
                    location.href = 'home.php'
                } else {
                    alert(responseData)
                    document.getElementById("ErrorMessages").innerHTML = request.responseText;
                }
            } else {
                document.getElementById("ErrorMessages").innerHTML = "Error communicating with server" + request.status;
            }
        };
        //Extract login data
        let usrEmail = document.getElementById("email").value;
        let usrPassword = document.getElementById("password").value;

        //Set up and send request
        request.open("POST", "customer_login.php");
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.send("email=" + usrEmail + "&password=" + usrPassword);
    }

    //Logs the user out.
    function logout() {
        //Create event handler that specifies what should happen when server responds
        request.onload = function() {
            checkLogin();
        };
        //Set up and send request
        request.open("GET", "logout.php");
        request.send();
    }
</script>



<?php

output_footer()
?>

</body>




</html>