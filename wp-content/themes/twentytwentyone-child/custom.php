<?php
/*
Template Name: custom Template
*/
get_header();
// Your custom content here

?>

<div style="display:none;" id="loginSignup"> </div>

<div style="display:none;" id="profile"> </div>
<div style="display:none;" id="buy"> </div>

<div style="display:none;" id="generateImage"> </div>



<script >

//function 1
//check status

window.addEventListener('load', statusCheck);

function statusCheck(){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

if(this.responseText == 1){
profile1();

}else{
loginSignupFront1();

}

            }
        };

// Open a POST request
xhttp.open('POST', '0a/statusCheck.php', true);

// Send the POST request with the FormData object
xhttp.send();

}

//function 2
//login or signup front
function loginSignupFront1(){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

document.getElementById("loginSignup").style.display = "block";
document.getElementById("loginSignup").innerHTML = this.responseText;

            }
        };

// Open a POST request
xhttp.open('POST', '0a/loginSignupFront.php', true);

// Send the POST request with the FormData object
xhttp.send();

}

//function 3
//login or signup front
function loginSignupFront2(){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

document.getElementById("loginSignup").style.display = "block";
document.getElementById("loginSignup").innerHTML = this.responseText;

            }
        };

// Open a POST request
xhttp.open('GET', '0a/loginSignupFront.php?signup=true', true);

// Send the POST request with the FormData object
xhttp.send();

}

//function 4
//login back
function loginBack(){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

if(this.responseText == 1){
statusCheck();

}
else{
alert('Wrong input');

}
            }
        };

var email = document.getElementById('email').value;
var password = document.getElementById('password').value;

var formData = new FormData();
formData.append("email", email);
formData.append("password", password);

// Open a POST request
xhttp.open('POST', '0a/loginBack.php', true);

// Send the POST request with the FormData object
xhttp.send(formData);

}

//function 5
//signup back
function signupBack(){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

if(this.responseText == 1){
statusCheck();

}else{
alert('error : this email is already made account ');
}
            }
        };

var email = document.getElementById('email').value;
var password = document.getElementById('password').value;
var confirm = document.getElementById('confirm').value;

var formData = new FormData();
formData.append("email", email);
formData.append("password", password);
formData.append("confirm", confirm);

// Open a POST request
xhttp.open('POST', '0a/signupBack.php', true);

// Send the POST request with the FormData object
xhttp.send(formData);

}

//function 6
//profile1
function profile1(){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

document.getElementById("loginSignup").style.display = "none";
document.getElementById("profile").style.display = "block";

document.getElementById("profile").innerHTML = this.responseText;

            }
        };

// Open a POST request
xhttp.open('POST', '0a/profile1.php', true);

// Send the POST request with the FormData object
xhttp.send();

}
function logout(){
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
if(this.responseText == 0){
document.getElementById('profile').style.display = "none";
statusCheck();

}
else{
alert('error..., please try leter...');

}
            }
        };

// Open a POST request
xhttp.open('POST', '0a/logout.php', true);

// Send the POST request with the FormData object
xhttp.send();

}

//function 7
//profile2
function profile2(){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

document.getElementById("loginSignup").style.display = "none";
document.getElementById("profile").style.display = "block";

document.getElementById("profile").innerHTML = this.responseText;

            }
        };

// Open a POST request
xhttp.open('POST', '0a/profile2.php', true);

// Send the POST request with the FormData object
xhttp.send();

}

//function 8
//profile3
function profile3(){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

document.getElementById("loginSignup").style.display = "none";
document.getElementById("profile").style.display = "block";

document.getElementById("profile").innerHTML = this.responseText;

            }
        };

// Open a POST request
xhttp.open('POST', '0a/profile3.php', true);

// Send the POST request with the FormData object
xhttp.send();

}

//function 9
//generate image front
function generateImageFront(){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

document.getElementById("profile").style.display = "none";
document.getElementById("generateImage").style.display = "block";

document.getElementById("generateImage").innerHTML = this.responseText;

            }
        };

// Open a POST request
xhttp.open('POST', '0a/generateImageFront.php', true);

// Send the POST request with the FormData object
xhttp.send();

}

//function 10
//generate image back
    function generateImageBack() {
const loadingText = document.getElementById('loading-text');
const imageContainer = document.getElementById('image-container');
const downloadLink = document.getElementById('download-link');

loadingText.style.display = 'block';
        const prompt = document.getElementById('prompt').value;
                    const generatedImage = document.getElementById('generated-image');
imageContainer.style.display = 'none';
downloadLink.style.display = 'none';



        if (!prompt) {
            alert('Please enter a prompt');
            return;
        }

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);

                if (response.success) {
loadingText.style.display = 'none';
imageContainer.style.display = 'block';
downloadLink.style.display = 'block';

                    const generatedImageURL = response.image_url;

                    generatedImage.src = '0a/'+ generatedImageURL;

                    downloadLink.href = '0a/'+ generatedImageURL;

                    alert('Image generated and saved successfully!');
                } else {
loadingText.style.display = 'none';
                    alert('Error generating the image');
                }

if(this.responseText == 420){
loadingText.style.display = 'none';
                    alert('Error generating the image may be your credits are end');

}
            }
        };

        xhttp.open('POST', '0a/generate_image.php', true);

        // Set the request header for a form data POST request
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        // Create a data string with the prompt parameter
        var data = 'prompt=' + prompt;

        // Send the POST request with the data
        xhttp.send(data);
    }

//function 11
//buy credits
function buy1() {
    var selectedValue;
    var creditAmountRadio = document.getElementsByName('creditAmount');

    for (var i = 0; i < creditAmountRadio.length; i++) {
        if (creditAmountRadio[i].checked) {
            selectedValue = creditAmountRadio[i].value;
            break;
        }
    }

    if (selectedValue) {

window.location.assign('payment/paying.php?selectedValue='+ selectedValue);


    } else {
        alert("Please select a credit amount.");
    }
}

//function 12
//forget password front 
function forgetPasswordFront(){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

document.getElementById("loginSignup").innerHTML = this.responseText;

            }
        };

// Open a POST request
xhttp.open('POST', '0a/forgetPasswordFront.php', true);

// Send the POST request with the FormData object
xhttp.send();

}

//function 13
//function forget password back
function forgetPasswordBack(){
var email = document.getElementById('email').value;

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

document.getElementById("loginSignup").innerHTML = this.responseText;

            }
        };

// Open a POST request
xhttp.open('GET', '0a/forgetPasswordBack.php?email='+ email, true);

// Send the POST request with the FormData object
xhttp.send();

}

//function 14
//function forget password o t p
function forgetPasswordOTP(){
var otp = document.getElementById('otp').value;

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

document.getElementById("loginSignup").innerHTML = this.responseText;

            }
        };

// Open a POST request
xhttp.open('GET', '0a/forgetPasswordOTP.php?otp='+ otp, true);

// Send the POST request with the FormData object
xhttp.send();

}

//function 15
//function enter new password
function enterNewPassword(){
var p1 = document.getElementById('p1').value;
var p2 = document.getElementById('p2').value;

if(!p1){
alert('enter somthing');
return;
}

if(!p2){
alert('enter somthing');
return;
}

if(p1 == p2){
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

if(this.responseText == 1){
loginSignupFront1();
alert('password changed successfully');


}

            }
        };

var formData = new FormData();
formData.append("p1", p1);

// Open a POST request
xhttp.open('POST', '0a/enterNewPassword.php', true);

// Send the POST request with the FormData object
xhttp.send(formData);

}else{
alert('password not matched');

}
}

</script>
<?php
get_footer();
?>
