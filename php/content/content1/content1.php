<?php
    session_start();

    if(!isset($_SESSION['logged'])){
        echo "<script>window.top.location='index.php'</script>";
    }
    else{
        if(($_SESSION['logged'])==false){
            echo "<script>window.top.location='index.php'</script>";
        }
    }
?> 

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
        $(function(){

            $.ajax({
                type:'POST',
                url:'php/content/content1/profile.php',
                error: function(msg){
                    console.log(msg);
                },
                success: function(msg){
                    $('#temp').html(msg);
                    console.log(msg);
                }
            });

        });
    
</script>

  <script>
      var abc = "php/content/content1/validation.js?v=";
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

<br>
<br>      
     <div style="">    
     <h3 style="color: white"> <strong style="color: red">PERSONAL</strong>PROFILE</h3>
     </div>
<br>
  <form class="login100-form validate-form" name="profile_student" onsubmit="return validate_regform()">
              <div class="form-group ">
                <label class="col-lg-6 control-label" STYLE="color:#FFF">NAME :</label>
                
                <div class="col-lg-5">
                  <input class="form-control" name='name' value="">
                </div>
              </div>
            
              <div class="form-group">
                <label class="col-lg-6 control-label" STYLE="color:#FFF">HALLTICKET_NO :(CANNOT MODIFY)</label>
                <div class="col-lg-5">
                  <input disabled class="form-control" name='htno' value="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-6 control-label" STYLE="color:#FFF">EMAIL_ID :</label>
                <div class="col-lg-5">
                  <input class="form-control" name='mail_id' value="">
                </div>
              </div>
     
              <div class="form-group">
                <label class="col-md-6 control-label" STYLE="color:#FFF">PHONE NO :</label>
                <div class="col-md-5">
                  <input class="form-control" name='mobile' value="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-6 control-label" STYLE="color:#FFF">BRANCH :(CANNOT MODIFY)</label>
                <div class="col-md-5">
                        <select disabled type="text" name="branch" style="color: black" >
                                <option value="">--</option>
                                <option value="CSE">CSE</option>
                                <option value="IT">IT</option>
                                <option value="ECE">ECE</option>
                                <option value="EEE" >EEE</option>
                                <option value="MECH">MECH</option>
                                <option value="CIV">CIVIL</option>
                              </select>
                              
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-6 control-label" STYLE="color:#FFF">YEAR :</label>
                <div class="col-md-5">
                    </label>
                    <select  name="year" type="text" style="color: black" >
                      <option value="">--</option>
                            <option value="I B.Tech" >I B.Tech</option>
                      <option value="II B.Tech">II B.Tech</option>
                      <option value="III B.Tech">III B.Tech</option>
                      <option value="IV B.Tech">IV B.Tech</option>
                    </select>
                </div>
              </div>
    
              <div class="row">
                    <div class="col-md-3">
                        
                <span  style="color: white">
                      <label class="" for="check">
                        <span class="" style="color: red">TECHIE</span><br>
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
                    <div class="col-md-3">
                    <span style="color: white">
                      <label class="" for="check">
                        <span class="" style="color: red">CULTURAL</span><br>
                      </label><br>
                      <input type="checkbox" name="CU03" value="CU03"> Professional Singing<br>
                      <input type="checkbox" name="CU02" value="CU02"> Acting<br>
                      <input type="checkbox" name="CU04" value="CU04"> Mimicri<br>
                      <input type="checkbox" name="CU01" value="CU01"> Dancing<br>
                    </div>
                    
                    <div class="col-md-3">
                    <span  style="color: white">
                      <label class="" for="check">
                        <span class="" style="color: red">PASSION</span><br>
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
                    <div class="col-md-3">
                            <span  style="color: white" >
                              <label class="" for="check">
                                <span class=" " style="color:red">SOCIAL</span><br>
                              </label><br>
                             <input type="checkbox" name="SO01" value="SO01"> Volunteer Service<br>
                              <input type="checkbox" name="SO02" value="SO02"> Personal Councelling<br>
                            </div>
                <div class="col-md-3">
                    <span  style="color: white">
                      <label class="" for="check">
                        <span class="" style="color: red" > ART</span><br>
                      </label><br>
                     <input type="checkbox" name="AR01" value="AR01"> Arts and Crafts<br>
                      <input type="checkbox" name="AR02" value="AR02"> Tataoo<br>
                      <input type="checkbox" name="AR03" value="AR03"> Painting<br>
                      <input type="checkbox" name="AR04" value="AR04"> Dancing<br>
                    </div>
                
                    </div>
    
    
              <div class="form-group">
                <div class="col-md-12">
                 <button TYPE="SUBMIT">
                  <a class="btn btn-primary pull-left" style="background-color: #ff5500;" >
                    SUBMIT
                  </a>
                  </button>
                  <button TYPE="RESET">
                  <a class="btn btn-primary pull-left" style="background-color: #CCC; color:black" >
                    RESET
                  </a>
                  </button>
                </div>
              </div>
            </form>
  
        </div>
        </div>
      