<?php session_start();
session_unset();
?>
<html>
    <head>
        <title>
            REDANTS 
        </title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="log/image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="log/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="log/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="log/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="log/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="log/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="log/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="log/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="log/css/util.css">
  <link rel="stylesheet" type="text/css" href="log/css/main.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->

    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/landy-iconfont.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
  
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
           <!-- Stylesheets -->

  <link rel="stylesheet" href="css/set1.css">
  <script src="js/jquery-3.3.1.min.js"></script>



<style>
body {
  
    background-color: black;
  background-repeat: no-repeat;
  background-size: 750px 420px;
  background-position: left;
  
 }
</style>

    </head>
    <body id="mainx">

    <script>
            $(function(){
	$.ajax({
      type:'POST',
      url:'php/register.php',
      data:"loader=works",
	error:function(msg){
		alert("BAD INTERNET CONNECTION --> RELOADING...");
		reload();
	},
      success:function(msg){
        $('#temp').html(msg);
      }
    });
  
});
            function loadregister(){
$.ajax({
      type:'POST',
      url:'php/register.php',
      data:"loader=works",
	error:function(msg){
		alert("BAD INTERNET CONNECTION --> RELOADING...");
		reload();
	},
      success:function(msg){
        $('#temp').html(msg);
      }
    });

              $("#main-wrapper").load("php/content/register/regform.php");


            }
			function resetpwd(){
$.ajax({
      type:'POST',
      url:'php/register.php',
      data:"loader=works",
	error:function(msg){
		alert("BAD INTERNET CONNECTION --> RELOADING...");
		reload();
	},
      success:function(msg){
        $('#temp').html(msg);
      }
    });

              $("#main-wrapper").load("php/content/resetpassword/resetpwd.php");


            }
          
          </script>
  
        
       
<div id="main-wrapper">
<script>
		var myIndex = 0;
		setTimeout(function(){
			carousel(1);
		},2000);
		var aimg = ['img/ralogo.png','img/slide1.jpg'];
		var len = aimg.length;
		function carousel(x) {
		var i = parseInt(x) % (len);
    
		document.getElementById('homebody').src = aimg[i]//'background-image : url('+aimg[i]+');background-repeat: no-repeat;background-size: cover;';
		x = i;
		setTimeout(function(){
			carousel(x+1)}, 10000); // Change image every 5 seconds
		}

    var wdth = screen.width
    var hgt = screen.height
</script>

          
  <div class="container-fluid">
        <div class="row">
         <div class="image col-lg-6 order-1 order-lg-2" style="top: -70">
         <img src="img/ralogo.png" id="homebody" alt="..." class="img-fluid">

  </div>
  <div class="image col-lg-1 order-1 order-lg-2" style="top: -70">

  </div>


            <div class="text col-lg-4 order-2 order-lg-2">

<style type="text/css">
  



/*//////////////////////////////////////////////////////////////////
[ FONT ]*/



@font-face {
  font-family: Poppins-Medium;
  src: url('../fonts/poppins/Poppins-Medium.ttf'); 
}

@font-face {
  font-family: Poppins-Bold;
  src: url('../fonts/poppins/Poppins-Bold.ttf'); 
}

@font-face {
  font-family: Poppins-SemiBold;
  src: url('../fonts/poppins/Poppins-SemiBold.ttf'); 
}




/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
  margin: 0px; 
  padding: 0px; 
  box-sizing: border-box;
}

body, html {
  height: 100%;
  font-family: Poppins-Regular, sans-serif;
}

/*---------------------------------------------*/
a {
  font-family: Poppins-Regular;
  font-size: 14px;
  line-height: 1.7;
  color: #666666;
  margin: 0px;
  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
  outline: none !important;
}

a:hover {
  text-decoration: none;
  color: #6a7dfe;
  color: -webkit-linear-gradient(left, #21d4fd, #b721ff);
  color: -o-linear-gradient(left, #21d4fd, #b721ff);
  color: -moz-linear-gradient(left, #21d4fd, #b721ff);
  color: linear-gradient(left, #21d4fd, #b721ff);
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
  margin: 0px;
}

p {
  font-family: Poppins-Regular;
  font-size: 14px;
  line-height: 1.7;
  color: #666666;
  margin: 0px;
}

ul, li {
  margin: 0px;
  list-style-type: none;
}


/*---------------------------------------------*/
input {
  outline: none;
  border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #adadad;}
input:-moz-placeholder { color: #adadad;}
input::-moz-placeholder { color: #adadad;}
input:-ms-input-placeholder { color: #adadad;}

textarea::-webkit-input-placeholder { color: #adadad;}
textarea:-moz-placeholder { color: #adadad;}
textarea::-moz-placeholder { color: #adadad;}
textarea:-ms-input-placeholder { color: #adadad;}

/*---------------------------------------------*/
button {
  outline: none !important;
  border: none;
  background: transparent;
}

button:hover {
  cursor: pointer;
}

iframe {
  border: none !important;
}


/*//////////////////////////////////////////////////////////////////
[ Utility ]*/
.txt1 {
  font-family: Poppins-Regular;
  font-size: 13px;
  color: #666666;
  line-height: 1.5;
}

.txt2 {
  font-family: Poppins-Regular;
  font-size: 13px;
  color: #333333;
  line-height: 1.5;
}

/*//////////////////////////////////////////////////////////////////
[ login ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background: #ff5500;  
}

.wrap-login100 {
  width: 390px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  padding: 77px 55px 33px 55px;

  box-shadow: 0 5px 10px 0px #ff5500;
  -moz-box-shadow: 0 5px 10px 0px #ff5500;
  -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
}


/*------------------------------------------------------------------
[ Form ]*/

.login100-form {
  width: 100%;
}

.login100-form-title {
  display: block;

  font-size: 30px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
}
.login100-form-title i {
  font-size: 60px;
}

/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  border-bottom: 2px solid red;
  margin-bottom: 37px;
}

.input100 {
  font-family: Poppins-Regular;
  font-size: 15px;
  color: #fff;
  line-height: 1.2;

  display: block;
  width: 100%;
  height: 45px;
  background: transparent;
  padding: 0 5px;
}

/*---------------------------------------------*/ 
.focus-input100 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  background: #6a7dfe;
  background: -webkit-linear-gradient(left, #21d4fd, #b721ff);
  background: -o-linear-gradient(left, #21d4fd, #b721ff);
  background: -moz-linear-gradient(left, #21d4fd, #b721ff);
  background: linear-gradient(left, #21d4fd, #b721ff);
}

.focus-input100::after {
  font-family: Poppins-Regular;
  font-size: 15px;
  color: #fff;
  line-height: 1.2;

  content: attr(data-placeholder);
  display: block;
  width: 100%;
  position: absolute;
  top: 16px;
  left: 0px;
  padding-left: 5px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100:focus + .focus-input100::after {
  top: -15px;
}

.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::after {
  top: -15px;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}

/*---------------------------------------------*/
.btn-show-pass {
  font-size: 15px;
  color: #999999;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  position: absolute;
  height: 100%;
  top: 0;
  right: 0;
  padding-right: 5px;
  cursor: pointer;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.btn-show-pass:hover {
  color: #ff5500;
  color: -webkit-linear-gradient(left, #ff5500, #b72);
}

.btn-show-pass.active {
  color: #ff5500;
  color: -webkit-linear-gradient(left, #ff5500, #b721ff);

}



/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 13px;
}

.wrap-login100-form-btn {
  width: 100%;
  display: block;
  position: relative;
  z-index: 1;
  border-radius: 25px;
  overflow: hidden;
  margin: 0 auto;
}

.login100-form-bgbtn {
  position: absolute;
  z-index: -1;
  width: 300%;
  height: 100%;
  background: #ff5500;

  top: 0;
  left: -100%;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn {
  font-family: Poppins-Medium;
  font-size: 15px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
}

.wrap-login100-form-btn:hover .login100-form-bgbtn {
  left: 0;
}


/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 576px) {
  .wrap-login100 {
    padding: 77px 15px 33px 15px;
  }
}



/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 0px;
  pointer-events: none;

  font-family: Poppins-Regular;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f06a";
  font-family: FontAwesome;
  font-size: 16px;
  color: #c80000;

  display: block;
  position: absolute;
  background-color: #fff;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 5px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}




</style>

<br>
<br>      
     <div style="right: px" >    <h3 style="color: white"> <strong style="color: red">LOG</strong>IN</h3></div>
<br>
	<form class="login100-form validate-form" method="post" action="php/login.php">
        

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="user_id">
            <span class="focus-input100" data-placeholder="HALLTICKET NO.*"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="password">
            <span class="focus-input100" data-placeholder="Password*"></span>
          </div>
		 <!-- &nbsp; <a href ="#reset" onclick="resetpwd()"style="color:blue;text-alig:cen">
           Forgot password ?
         </a>-->

          <div class="container-login100-form-btn">
          <div class="cta">
          <button class="btn btn-primary pull-left" onclick="reg()" style="background-color:#ff5500;" type="submit">
       LOGIN
          </button>
          </div>
          &nbsp; <br><br>

     
        </form>


        </div>
          <div>
          <div class="container-login100-form-btn " >
        <button class="btn btn-primary pull-left" style="background-color:#ff5500;" onclick="loadregister()">
            REGISTER NOW
          </button>
          </div>
  </div>
  <div>
       
        <!-- Javascript files-->
        <!--===============================================================================================-->
  
<!--===============================================================================================-->
  <script src="log/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="log/vendor/bootstrap/js/popper.js"></script>
  <script src="log/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="log/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="log/vendor/daterangepicker/moment.min.js"></script>
  <script src="log/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="log/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="log/js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
        <!---->
        <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='//www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        
    </body>
</html>