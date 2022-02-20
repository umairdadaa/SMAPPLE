<?php
include('common.php');

output_header_navigation("Register", "")
?>

<!-- Start Content -->
<div class="signup-box">
    <h1>Create Account</h1>
    <form>

        <label>First name</label>
        <input type="text" placeholder="" />
        <label>Last name</label>
        <input type="text" placeholder="" />
        <label>Email</label>
        <input type="email" placeholder="" />
        <label>Date Of Birth</label>
        <input type="date" placeholder="" />
        <label>Gender</label>
        <select>
            <option value="">Select</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
        </select>
        <label>Password</label>
        <input type="password" placeholder="At least 6 characters" />
        <p>Passwords must be at least 6 characters</p>
        <button type="submit" class="submit-btn">Create your Smapple Acoount</button>
        <closeform></closeform>
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

<!-- End Content -->

<?php

output_footer()
?>
</body>

</html>