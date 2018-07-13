<!--<?php
    session_start();

    if(!isset($_SESSION['logged'])){
        echo "<script>window.top.location='index.php'</script>";
    }
    else{
        if(($_SESSION['logged'])==false){
            echo "<script>window.top.location='index.php'</script>";
        }
    }
?>-->

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
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
           <!-- Stylesheets -->

  <link rel="stylesheet" href="css/set1.css">
  <script src="js/jquery-3.3.1.min.js"></script>

  <script>
      var abc = "php/content/register/regvalidation.js?v=";
      // var d = new Date();
      // var n = d.getSeconds();
      var n = new Date().getTime();
      abc += n;

      var scripta = document.createElement('script');

      console.log(scripta);

      scripta.src = ""+abc+"";

      var main = document.getElementById("main-wrapper");

      main.appendChild(scripta);

     // ("#main-wrapper").append(scripta)
  
  </script>
  


<style>
body {
  
    background-color: black;
  background-repeat: no-repeat;
  background-size: 750px 420px;
  background-position: left;
 }
</style>

    </head>
    <body>

       
<div id="main-wrapper">


          
  <div class="container-fluid">
        <div class="row">
         <div class="image col-lg-6 order-1 order-lg-2" style="top: 100"><img src="img/ralogo.png" alt="..." class="img-fluid">
<br><br><br><br><br>         </div>

            <div class="text col-lg-5 order-2 order-lg-2">

<style type="text/css">
  



/*//////////////////////////////////////////////////////////////////
[ FONT ]*/



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

  font-size: 13px;
  color: #666666;
  line-height: 1.5;
}


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
  
<br>
	<form class="login100-form validate-form" onsubmit="return false" name="register">
         
       

        <div class="col-sm-8 md-12  right-side right " style="color: red">
                 <div style="right: px" >    <h3 style="color: white"> <strong style="color: red">REG</strong>ISTER</h3></div>
                 
     <br><br>
      <div class="wrap-input100 validate-input" data-validate="HALLTICKET NO">
            <span class="btn-show-pass">
        
            </span>
            <input class="input100" type="text" name="htno">
            <span class="focus-input100" data-placeholder="HALLTICKET NO*"></span>
          </div>
   
   
      <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="password">
            <span class="focus-input100" data-placeholder="PASSWORD*"></span>
          </div>
     <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="fname">
            <span class="focus-input100" data-placeholder="NAME*"></span>
          </div>
            <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="mobile">
            <span class="focus-input100" data-placeholder="MOBILE*"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
            <input class="input100" type="text" name="email">
            <span class="focus-input100" data-placeholder="EMAIL*"></span>
          </div>

        </span>
        <span class="input input--hoshi" myFont  >
          <label class="input__label input__label--hoshi input__label--hoshi-color-3">
            <span class="input__label-content input__label-content--hoshi" >Branch * </span>
          </label><br>



          <select class="input__field input__field--hoshi" type="text" name="branch" style="background-color: black" >
            <option value="">--Select your Branch--</option>
      <option value="CSE">CSE</option>
            <option value="IT">IT</option>
            <option value="ECE">ECE</option>
            <option value="EEE" >EEE</option>
            <option value="MECH">MECH</option>
            <option value="CIV">CIVIL</option>
          </select>
          
        </span>
        <span class="input input--hoshi">
          <label class="input__label input__label--hoshi input__label--hoshi-color-3">
            <span class="input__label-content input__label-content--hoshi">Year *</span>
          </label><br>
          <select class="input__field input__field--hoshi" name="year" type="text" style="background-color: black" >
            <option value="">--Select your Year--</option>
            <option value="I B.Tech" >I B.Tech</option>
            <option value="II B.Tech">II B.Tech</option>
            <option value="III B.Tech">III B.Tech</option>
            <option value="IV B.Tech">IV B.Tech</option>
          </select>
        </span>
        <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="aggregate">
            <span class="focus-input100" data-placeholder="AGGREGATE*"></span>
          </div>

              <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="about">
            <span class="focus-input100" data-placeholder="ABOUT"></span>
          </div>
    
    <div class="row">
    <div class="col-md-6">
      
    <span class="input input--hoshi" style="color: white">
          <label class="" for="check">
            <span class="" style="color: red "; >TECHIE</span><br>
          </label><br>
          <input type="checkbox" name="TE03" value="TE03"> Programing<br>
          <input type="checkbox" name="TE02" value="TE02"> Web Programing<br>
          <input type="checkbox" name="TE06" value="TE06"> Big Data<br>
          <input type="checkbox" name="TE09" value="TE09"> Cloud Computing<br>
          <input type="checkbox" name="TE04" value="TE04"> Internet of Things<br>
          <input type="checkbox" name="TE07" value="TE07"> Machine Learning<br>
          <input type="checkbox" name="TE05" value="TE05"> VLSI<br>
          <input type="checkbox" name="TE08" value="TE08"> Embeded Systems<br>
          <input type="checkbox" name="TE01" value="TE01"> ProE/ Auto CAD<br>

    </div>
    <div class="col-md-6">
        <span class="input input--hoshi"style="color: white">
          <label class="" for="check">
            <span class="" style="color: red "; >CULTURAL</span><br>
          </label><br>
          <input type="checkbox" name="CU03" value="CU03"> Professional Singing<br>
          <input type="checkbox" name="CU02" value="CU02"> Acting<br>
          <input type="checkbox" name="CU04" value="CU04"> Mimicri<br>
          <input type="checkbox" name="CU01" value="CU01"> Dancing<br>
    </div>
    <div class="col-md-6">
        <span class="input input--hoshi" style="color: white">
          <label class="" for="check">
            <span class="" style="color: red "; >PASSION</span><br>
          </label><br>
         <input type="checkbox" name="PA02" value="PA02"> Photography<br>
          <input type="checkbox" name="PA08" value="PA08"> Creative Design<br>
          <input type="checkbox" name="PA07" value="PA07"> Direction / Video Making<br>
          <input type="checkbox" name="PA03" value="PA03"> Gardening<br>
          <input type="checkbox" name="PA01" value="PA01"> Physical Fitness<br>
          <input type="checkbox" name="PA09" value="PA09"> Teaching<br>
          <input type="checkbox" name="PA05" value="PA05 "> Story Writing<br>
          <input type="checkbox" name="PA04" value="PA04 "> Travelling<br>
          <input type="checkbox" name="PA06" value="PA06 "> Professional<br>
    </div>
    <div class="col-md-6">
        <span class="input input--hoshi" style="color: white">
          <label class="" for="check">
            <span class="" style="color: red "; >ART</span><br>
          </label><br>
         <input type="checkbox" name="AR01" value="AR01"> Arts and Crafts<br>
          <input type="checkbox" name="AR02" value="AR02"> Tataoo<br>
          <input type="checkbox" name="AR03" value="AR03"> Painting<br>
          <input type="checkbox" name="AR04" value="AR04"> Dancing<br>
    </div>
    <div class="col-md-6">
        <span class="input input--hoshi" style="color: white" >
          <label class="" for="check">
            <span class="" style="color: red "; >SOCIAL</span><br>
          </label><br>
         <input type="checkbox" name="SO01" value="SO01"> Volunteer Service<br>
          <input type="checkbox" name="SO02" value="SO02"> Personal Councelling<br>
    </div>
    </div>
    <div id="temp"></div>
<script>


</script>
        <div class="cta">
          <button class="btn btn-primary pull-left" onclick="validate_regform()" style="background-color:#ff5500;" type="submit">
            Register Now
          </button>
          
</div>

</div>
    </div>

           
     
        </form>

  
        </div>
        </div>
        