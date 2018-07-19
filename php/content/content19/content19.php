<?php
    session_start();

    // if(!isset($_SESSION['logged'])){
    //     echo "<script>window.top.location='index.php'</script>";
    // }
    // else{
    //     if(($_SESSION['logged'])==false){
    //         echo "<script>window.top.location='index.php'</script>";
    //     }
    // }
?> 
        
  <script src="php/content/content19/validation.js?v=1.2"></script>   
<div id="main-wrapper">

          
  <div class="container-fluid">
        <div class="row">
         <div class="image col-lg-6 order-1 order-lg-2" style="top: 100">
           <img src="img/ralogo.png" alt="..." class="img-fluid">
<br><br><br><br><br>         </div>

            <div class="text col-lg-5 order-2 order-lg-2">

<style type="text/css">
  



/*//////////////////////////////////////////////////////////////////
[ FONT ]*/





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
<script>
        
    
    </script>

<br>
<br>      
     <div style="right: px" >    <h3 style="color: white"> <strong style="color: red">CHANGE</strong>PASSWORD</h3></div>
<br>
	<form class="login100-form validate-form" onsubmit="return check()" name="chngpwd">
         
          

         <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="old_pwd">
            <span class="focus-input100" data-placeholder="OLD PASSWORD*"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="new_pwd">
            <span class="focus-input100" data-placeholder="NEW PASSWORD*"></span>
          </div>
            <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="text" name="retype_new_pwd">
            <span class="focus-input100" data-placeholder="CONFIRM PASSWORD*"></span>
          </div>

         <div class="container-login100-form-btn">
          <div class="cta">
          <button class="btn btn-primary pull-left" style="background-color:#ff5500;" type="submit">
      COMMIT
          </button>
          </div>

           
     
        </form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="js/front.js"></script>

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
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
          </script>

  
        </div>
        </div>
      