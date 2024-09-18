<?php

if(isset($_GET['signup'])){
?>

<div id="signupPart" >

<label for="email">Enter Your Email</label><br><br>
<input type="email" id="email" placeholder="example@gmail.com"><br><br>

<label for="password">Enter the new Password</label><br><br>
<input type="password" id="password" placeholder="********"><br><br>

<label style="display:none;" for="confirm">Confirm the new Password</label><br><br>
<input style="display:none;" type="password" id="confirm" value="********"><br><br>

<button onclick="signupBack()">Sign Up</button><br>
</div>

<p>
"By continuing, you agree to our Terms and Conditions, Privacy Policy, Disclaimer Policy, and all the rules and regulations of this website."
</p>
<br>
<h3><a onclick="loginSignupFront1()">Click here to Login</a></h3>
<br>
<?php
}else{
?>

<div id="loginPart">

<label for="email">Enter Your Email</label><br><br>
<input type="email" id="email" placeholder="example@gmail.com"><br><br>

<label for="password">Enter the Password</label><br><br>
<input type="password" id="password" placeholder="********"><br><br>

<button onclick="loginBack()">Loggin</button><br><br>
<hr>
<h3><a onclick="loginSignupFront2()">Click here to create new Account</a></h3>
<br><br>

<h3><a onclick="forgetPasswordFront()"> Click here if you forget password </a></h3>
<br><br>
</div>

<?php
}
?>
