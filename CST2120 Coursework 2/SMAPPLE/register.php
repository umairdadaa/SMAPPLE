<?php
include('common.php');

output_header_navigation("Register", "")
?>

<!-- Start Content -->
<div class="signup-box">
    <h1>Create Account</h1>
    <form action="" method="post" id="form">

        <label>First name</label>
        <input type="text" name="first_name" id="first_name" required />
        <label>Last name</label>
        <input type="text" name="last_name" id="last_name" required />
        <label>Email</label>
        <input type="email" name="email" id="email" required />
        <label>Date Of Birth</label>
        <input type="date" name="date_of_birth" id="date_of_birth" required />
        <label>Gender</label>
        <select name="gender" id="gender">
            <option value="">Select</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
        </select>
        <label>Password</label>
        <input type="password" placeholder="At least 6 characters" name="password" id="password" required />
        <p>Passwords must be at least 6 characters</p>
        <button type="submit" class="submit-btn" onclick="register()">Create your Smapple Acoount</button>
    </form>

    <p>
        By creating an account, you agree to Smapple
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
    </p>

</div>
<p class="login-link">
    Already have an account? <a href="login.php">Login here</a>
</p>
</div>
<p>
    Server response: <span id="ServerResponse"></span>
</p>

<!-- End Content -->

<?php

output_footer()
?>

<script>
    function register(event) {
        let request = new XMLHttpRequest();

        let user = {
            customer_first_name: document.getElementById("first_name").value,
            customer_last_name: document.getElementById("last_name").value,
            email: document.getElementById("email").value,
            date_of_birth: document.getElementById("date_of_birth").value,
            gender: document.getElementById("form").gender.value,
            password: document.getElementById("password").value,
        }

        request.onload = function() {
            //Check HTTP status code

            if (request.status === 200) {
                //Get data from server
                var responseData = request.responseText;

                //Add data to page
                if (responseData == "Registered Successfully" || responseData == "Email exists already. Login") {
                    alert(responseData)
                    location.href = 'login.php'
                    // document.getElementById("LoginPara").innerHTML = loggedInStr;
                    // document.getElementById("ErrorMessages").innerHTML = ""; //Clear error messages
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
        request.open("POST", "add_customer_json.php");
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


        //checking if input exist in register
        if (
            user.first_name === "" ||
            user.last_name === "" ||
            user.email === "" ||
            user.date_of_birth === "" ||
            user.gender === "" ||
            user.password === ""
        ) {
            alert("Please enter all the details");
            event.preventDefault();
        } else {

            if (validate_email(user.email)) {

                let json_user = JSON.stringify(user);
                request.send("user=" + json_user + "&email=" + user.email);

            } else {
                alert("Enter valid email address.")
                event.preventDefault();
            }


        }
    }

    function validate_email(email) {
        var mailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (email.match(mailFormat)) {
            return true;
        } else {
            return false;
        }
    }
</script>

</body>

</html>