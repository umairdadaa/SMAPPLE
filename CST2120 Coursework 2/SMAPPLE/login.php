<?php
include('common.php');

output_header_navigation("Login", "")
?>

<!---Start Content----->


<div class="login-box">
    <h1>Login</h1>
    <form>
        <label>Email</label>
        <input type="email" placeholder="" />
        <label>Password</label>
        <input type="password" placeholder="" />
        <button type="submit" class="submit-btn">Continue</button>
    </form>
    <p class="create-account-text">
        By creating an account, you agree to SMAPPLE
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
    </p>
</div>
<p class="para-2">
    New to SMAPPLE? <a href="register.php">Create your SMAPPLE account</a>
    <br>
    <br>
    <button type="button" class="btn btn-outline-secondary"><a href="login_admin.php">I am a SMAPPLE employee</a></button>
</p>
</div>



<?php

output_footer()
?>

</body>




</html>