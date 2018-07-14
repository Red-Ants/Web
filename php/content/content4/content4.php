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




  <!-- Stylesheets 

  <link rel="stylesheet" href="css1/style.css">

  <link rel="stylesheet" href="css1/set1.css">



  Google Fonts

  <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>



  <link href='Playfair.css' rel='stylesheet' type='text/css'>

  <link href='Lato.css' rel='stylesheet' type='text/css'>-->

<style type="text/css">

  .test{

    position: fixed;

  }

  .right {

    float: left;

     

    

    overflow: scroll;

}

</style>



<script>

  function selection(x){

      document.getElementById('years').style="display:none"

      document.getElementById('department').style="display:none"

      document.getElementById('cate').style="display:none"



      if(x==1)

          document.getElementById('years').style=""

      if(x==2)

          document.getElementById('department').style=""

      if(x==3)

          document.getElementById('cate').style=""

  }



</script>

  <style>

  

    #image {

        /*background-image: url("images/ralogo.png");

      background-repeat: no-repeat;

      background-size: 200px 150px;

      background-position: left;*/

      width:25%;

      height:25%;

     }

     

  

  

  </style>


  <div id="main-wrapper">



    <div class="container-fluid">


      <div class="row">

        <!--<div class="col-md-6 left-side">

          <header>

            

          </header>

        </div>-->

      <form name="reports">

	  

	

      <div class="col-md-6 ">

                    <span class="input input--hoshi" style="color: white">

                        <label class="">

                            <span class="">SEARCH TYPE</span><br>

                        </label><br>

                        <input type="radio" value="1" id="year" name="cat" onchange="selection(1)">

                        <label class="" for="year">

                            <span class="">Years</span>

                        </label><br>

                        <input type="radio" value="2" id="dept" name="cat" onchange="selection(2)" checked>

                        <label class="" for="dept">

                            <span class="">Department</span>

                        </label><br>

                        <input type="radio" value="3" id="club" name="cat" onchange="selection(3)">

                        <label class="" for="club">

                                <span class="">Club</span>

                        </label><br>

                    </span>

        <div class="">

        <span  id="department" class="input input--hoshi" >

          <select name="dept"onfocusout="getdetails()"style=""class="input__field input__field--hoshi" type="text" name="branch" style="color: black" >

            <option style="color:#000" value="">SELECT DEPARTMENT</option>

			      <option style="color:#000" value="CSE">CSE</option>

            <option style="color:#000" value="IT">IT</option>

            <option style="color:#000" value="ECE">ECE</option>

            <option style="color:#000" value="EEE" >EEE</option>

            <option style="color:#000" value="MECH">MECH</option>

            <option style="color:#000" value="CIVIL">CIVIL</option>

          </select>

          

        </span>

        <span  id="years" style="display:none;" class="input input--hoshi" >

          <select name="year"onfocusout="getdetails()"style=""class="input__field input__field--hoshi" type="text" name="branch" style="color: black" >

            <option style="color:#000" value="">SELECT YEAR</option>

			      <option style="color:#000" value="1">I B.Tech</option>

            <option style="color:#000" value"2">II B.Tech</option>

            <option style="color:#000" value="3">III B.Tech</option>

            <option style="color:#000" value="4">IV B.Tech</option>

          </select>

          

        </span>

        <span   id="cate" style="display:none"class="input input--hoshi" >

          <select name="cate"onfocusout="getdetails()"style=""class="input__field input__field--hoshi" type="text" name="branch" style="color: black" >

            <option style="color:#000" value="">SELECT CATEGORY</option>

			      <option style="color:#000" value="1">TECHIE</option>

            <option style="color:#000" value"2">SOCIAL</option>

            <option style="color:#000" value="3">ART</option>

            <option style="color:#000" value="4">CULTURAL</option>

            <option style="color:#000" value="5">PASSION</option>

          </select>

          

        </span>
    </div>



        

       

		<!--span class="input input--hoshi">

          <textarea class="input__field input__field--hoshi" type="text" name="about"></textarea>

          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">

            <span class="input__label-content input__label-content--hoshi">About</span -->

          </label>

        </span>

      </div>

      <div class="col-md-12 ">

        <style>

            table {

                font-family: arial, sans-serif;

                border-collapse: collapse;

                width: 100%;

                color: #FFFF;

            }

            td, th {

                border: 1px solid red;

                text-align: left;

                padding: 8px;

            }

            /*tr:nth-child(even) {

                background-color: #dddddd;

            }*/

            tfoot {

                background-color: #2f435c;

                color:white;

            }

            </style>

            

            <table id="table_transactions">

              <tbody>

              <tr>

                <th>Name</th>

                <th>H.No</th>

                <th>Year</th>

                <th>Department</th>

                <th>Mobile</th>

                <th>Email Id</th>

                <th>Art</th>

            

                <th>Cultural</th>

                <th>Passion</th>

                <th>Social</th>

                <th>Techie</th>

                

              </tr>

            </tbody>

              <tfoot>

                <tr>

                  <td  colspan="11" ></td>

                </tr>

               </tfoot>

            </table>



        </div>

        

		



    <div id="temp"></div>

      

	  </form>

    </div>

  </div>



</div> <!-- end #main-wrapper -->



<!-- Scripts 

<script src="js/scripts.js"></script>

<script src="js/classie.js"></script>

-->

<script>

  (function() {

    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim

    if (!String.prototype.trim) {

      (function() {

        // Make sure we trim BOM and NBSP

        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

        String.prototype.trim = function() {

          return this.replace(rtrim, '');

        };

      })();

    }



    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {

      // in case the input is already filled..

      if( inputEl.value.trim() !== '' ) {

        classie.add( inputEl.parentNode, 'input--filled' );

      }



      // events:

      inputEl.addEventListener( 'focus', onInputFocus );

      inputEl.addEventListener( 'blur', onInputBlur );

    } );



    function onInputFocus( ev ) {

      classie.add( ev.target.parentNode, 'input--filled' );

    }



    function onInputBlur( ev ) {

      if( ev.target.value.trim() === '' ) {

        classie.remove( ev.target.parentNode, 'input--filled' );

      }

    }

  })();

  

  $(document).ready(function(){

  setTimeout(function(){$('.messages.status').fadeOut();}, 8000);

  $(window).click(function(){$('.messages.status').fadeOut();});

});

</script>



<script>



  function getdetails(){



      var cat = document.forms["reports"]["cat"];



      var val = ""



      var label = ""



      var dat = "a=1"



      if(cat.value==1){

          val = $("#years option:selected").text()//document.forms["reports"]["years"].value

          label = "year"

      }else if(cat.value==2){

          val = $("#department option:selected").text()//document.forms["reports"]["dept"].value

          label = "branch"

      }else{

          val = document.forms["reports"]["cate"].value

          label = "hobby_id"

          val = $("#cate option:selected").text()

          val = val.toUpperCase()

          dat += '&cate='+val

      }



      dat += '&val='+val+'&label='+label



      $.ajax({

              type:'post',

              url:"reports.php",

              data:dat,

              success:function(msg){

                  $('#temp').html(msg);

              }



          });

  }



  </script>

