function validate_regform(){

   

    var name= document.forms['register']['fname']

    if(name.value==""){

        alert("PROVIDE THE NAME")

        name.focus()

        return false

    }
    else if(fname.value.match(/^[A-Za-z\s]+$/) == null){
        incorrectField(fname)
        return false
    }
    
    
    

    var mobile = document.forms['register']['mobile']

    if(mobile.value==""){

        alert("PROVIDE THE MOBILE NUMBER")

        mobile.focus()

        return false

    }



    var email= document.forms['register']['email']

    if(email.value==""){

        alert("PROVIDE THE EMAIL")

        email.focus()

        return false

    }
    else if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format"; 
        }
      }
    var branch= document.forms['register']['branch']

    if(branch.value==""){

        alert("SELECT THE BRANCH")

        return false

    }

    var year= document.forms['register']['year']

    if(year.value==""){

        alert("SELECT THE YEAR")

        return false

    }

    var aggregate= document.forms['register']['aggregate']

    if(aggregate.value==""){

        alert("PROVIDE THE AGGREGATE")

        aggregate.focus()

        return false

    }

    var about=document.forms['register']['about']

    if(about.value==""){

        alert("PROVIDE THE ABOUT")

        about.focus()

        return false

    }