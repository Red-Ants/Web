<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title></title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/set1.css">

  <!--Google Fonts-->
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<style type="text/css">
  .test{
    position: fixed;
  }
  .right {
    float: left;
     
    
    overflow: scroll;
}
</style>

</script>

	</script>
</head>

<body>
<div id="main-wrapper">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 left-side">
        <header>
          
        </header>
      </div>
	  <div> </div>
	  <form method="post" action="redregister.php">
			<div class="col-md-6 right-side right">
			<span class="input input--hoshi">
			<input class="input__field input__field--hoshi" type="text" name="htno" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi">Hall Ticket Number *</span>
          </label>
			</span>
			<span class="input input--hoshi">
			<input class="input__field input__field--hoshi" type="password" name="password" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi">Password *</span>
          </label>
			</span>
			<span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="text" name="name"  />
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi">Name *</span>
          </label>
        </span>
        <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="number" name="mobile"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
            <span class="input__label-content input__label-content--hoshi">Mobile *</span>
          </label>
        </span>
		<span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="email" name="email"  />
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi">Email*</span>
          </label>
        </span>
        <span class="input input--hoshi">
          <label class="input__label input__label--hoshi input__label--hoshi-color-3">
            <span class="input__label-content input__label-content--hoshi">Branch </span>
          </label><br>
          <select class="input__field input__field--hoshi" type="text" name="branch">
            <option value="" name="branch">--</option>
			<option value="cse" name="branch">CSE</option>
            <option value="it" name="branch">IT</option>
            <option value="ece" name="branch">ECE</option>
            <option value="eee" name="branch">EEE</option>
            <option value="mech" name="branch">MECH</option>
            <option value="civil" name="branch">CIVIL</option>
          </select>
          
        </span>
        <span class="input input--hoshi">
          <label class="input__label input__label--hoshi input__label--hoshi-color-3">
            <span class="input__label-content input__label-content--hoshi">Year</span>
          </label><br>
          <select class="input__field input__field--hoshi" name="year" type="text" >
            <option value="" name="year">--</option>
			<option value="I B.tech" name="year">I B.Tech</option>
            <option value="II B.tech" name="year">II B.Tech</option>
            <option value="III B.tech" name="year">III B.Tech</option>
            <option value="IV B.tech" name="year">IV B.Tech</option>
          </select>
        </span>
        <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="number" name="aggregate" id="name" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi">Aggregate </span>
          </label>
        </span>
		<span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="text" name="about"  />
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi">About</span>
          </label>
        </span>
		<!--span class="input input--hoshi">
          <textarea class="input__field input__field--hoshi" type="text" name="about"></textarea>
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            <span class="input__label-content input__label-content--hoshi">About</span -->
          </label>
        </span>
		<div class="row">
		<div class="col-md-6">
			
        <span class="input input--hoshi">
          <label class="" for="check">
            <span class="">Technical Skills</span><br>
          </label><br>
          <input type="checkbox" name="techskills[]" value="Programing"> Programing<br>
          <input type="checkbox" name="techskills[]" value="Web Programing"> Web Programing<br>
          <input type="checkbox" name="techskills[]" value="Big Data"> Big Data<br>
          <input type="checkbox" name="techskills[]" value="Cloud Computing"> Cloud Computing<br>
          <input type="checkbox" name="techskills[]" value="Internet of Things"> Internet of Things<br>
          <input type="checkbox" name="techskills[]" value="Machine Learning"> Machine Learning<br>
          <input type="checkbox" name="techskills[]" value="VLSI"> VLSI<br>
          <input type="checkbox" name="techskills[]" value="Embeded Systems"> Embeded Systems<br>
          <input type="checkbox" name="techskills[]" value="ProE/ Auto CAD"> ProE/ Auto CAD<br>
          
          <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="text" name="techskills[]" placeholder="Other" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            
          </label>
        </span>
		</div>
		<div class="col-md-6">
        <span class="input input--hoshi">
          <label class="" for="check">
            <span class="">Other Skills</span><br>
          </label><br>
          <input type="checkbox" name="proskills[]" value="Professional Singing"> Professional Singing<br>
          <input type="checkbox" name="proskills[]" value="Painting"> Painting<br>
          <input type="checkbox" name="proskills[]" value="Mimicri"> Mimicri<br>
          <input type="checkbox" name="proskills[]" value="Creative Design"> Creative Design<br>
          <input type="checkbox" name="proskills[]" value="Photography"> Photography<br>
          <input type="checkbox" name="proskills[]" value="Creative Design"> Creative Design<br>
          <input type="checkbox" name="proskills[]" value="Direction / Video Making"> Direction / Video Making<br>
          <input type="checkbox" name="proskills[]" value="Gardening"> Gardening<br>
          <input type="checkbox" name="proskills[]" value="Cooking"> Cooking<br>
          <input type="checkbox" name="proskills[]" value="Physical Fitness"> Physical Fitness<br>
          <input type="checkbox" name="proskills[]" value="Teaching"> Teaching<br>
          <input type="checkbox" name="proskills[]" value="Personal Counciling"> Personal Counciling<br>
          <input type="checkbox" name="proskills[]" value="Tataoo "> Tataoo<br>
          <input type="checkbox" name="proskills[]" value="Volunteer Service"> Volunteer Service<br>
          <input type="checkbox" name="proskills[]" value="Arts and Craft"> Arts and Craft<br>
          
          <span class="input input--hoshi">
          <input class="input__field input__field--hoshi" type="text" name="proskills[]" placeholder="Other" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
            
          </label>
        </span>
		</div>
		</div>
        <div class="cta">
          <button class="btn btn-primary pull-left" type="submit">
            Register Now
          </button>
          
			</div>
        
		</div>
	  </form>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src='google-sheet.js'></script>
    </div>
  </div>

</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/classie.js"></script>
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


</body>
</html>
