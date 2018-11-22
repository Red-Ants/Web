function validate(){
    var form = document.forms["almuni_register"]
    var id = 0;
    var arr = {}
    for(var id=0;id<8;id++){
        if(id == 0){
            var input = form["name"];
            if(!input.value){
                alert("Please enter your name")
                open(id)
                input.focus()
                return false
            }else if(input.value.match(/^[A-Za-z\s]+$/)===null){
                alert("A Name can only have alphabetics")
                open(id)
                input.focus()
                return false
            }

            arr["name"] = input.value

            input = form["gender"]

            if (!input.value) {
                alert("Please select gender")
                open(id)
                return false
            }

            arr["gender"] = input.value
            var input = form["hallticket"];
            if(!input.value){
                arr["hallticket"] = ""
            }else if(input.value.match(/^[A-Za-z0-9]+$/)===null){
                alert("Hallticket number is alpha numeric")
                open(id)
                input.focus()
                return false
            }
            arr["hallticket"] = input.value     

        }
        else if (id == 1) {
            var input = form["degree"];
            if (!input.value) {
                alert("Please select degree")
                open(id)
                return false
            }
            arr["degree"] = input.value

            input = form["branch"]

            if (!input.value) {
                alert("Please select your branch")
                open(id)
                return false
            }

            arr["branch"] = input.value

            input = form["passed_year"]

            if (!input.value) {
                alert("Please select your batch")
                open(id)
                return false
            }

            arr["passed_year"] = input.value


        }
        else if (id == 2) {
            var input = form["employment"];
            if (!input.value) {
                alert("Please select your present employment")
                open(id)
                return false
            }
            

            arr["employment"] = input.value
        }
        else if (id == 3) {
            var input = form["employeer_name"];
            if (!input.value) {
                alert("Please enter your employeer name")
                open(id)
                input.focus()
                return false
            }
            

            arr["employeer_name"] = input.value

            input = form["designation"]

            if (!input.value) {
                alert("Please enter your designation")
                open(id)
                input.focus()
                return false
            }

            arr["designation"] = input.value

        }
        else if (id == 4) {
            var input = form["work_country"];
            if (!input.value) {
                alert("Please enter your work country")
                open(id)
                input.focus()
                return false
            }
            
            arr["work_country"] = input.value

            input = form["work_state"]

            if (!input.value) {
                alert("Please enter your work state")
                open(id)
                input.focus()
                return false
            }

            arr["work_state"] = input.value

            input = form["work_city"]

            if (!input.value) {
                alert("Please enter your work city")
                open(id)
                input.focus()
                return false
            }

            arr["work_city"] = input.value
        }
        else if (id == 5) {
            var input = form["status"];
            if (!input.value) {
                alert("Please select your status")
                open(id)
                return false
            }
            else if(input.value!="Free"){
                
                arr["status"] = input.value
                var input = form["university_name"];
                if (!input.value) {
                    alert("Please enter your university name")
                    open(id)
                    input.focus()
                    return false
                }

                arr["university_name"] = input.value

                input = form["university_country"];
                if (!input.value) {
                    alert("Please enter your university country")
                    open(id)
                    input.focus()
                    return false
                }

                arr["university_country"] = input.value
                input = form["university_state"];
                if (!input.value) {
                    alert("Please enter your university state")
                    open(id)
                    input.focus()
                    return false
                }

                arr["university_state"] = input.value
                input = form["university_city"];
                if (!input.value) {
                    alert("Please enter your university city")
                    open(id)
                    input.focus()
                    return false
                }

                arr["university_city"] = input.value
            }
            else{
                
                arr["status"] = input.value
            }

        }
        else if (id == 6) {
            var input = form["country"];
            if (!input.value) {
                alert("Please enter country that you are presently living")
                open(id)
                input.focus()
                return false
            }
            

            arr["country"] = input.value

            input = form["state"]

            if (!input.value) {
                alert("Please enter state that you are presently living")
                open(id)
                input.focus()
                return false
            }

            arr["state"] = input.value

            input = form["city"]

            if (!input.value) {
                alert("Please enter city that you are presently living")
                open(id)
                input.focus()
                return false
            }

            arr["city"] = input.value

            input = form["mobile"]

            if (!input.value) {
                alert("Please enter mobile number")
                open(id)
                input.focus()
                return false
            }else if(input.value.length != 10){
                alert("INCORRECT MOBILE NUMBER")
                open(id)
                input.focus()
                return false
            }

            arr["mobile"] = input.value

            input = form["email"]

            if (!input.value) {
                alert("Please enter email id")
                open(id)
                input.focus()
                return false
            }
            

            arr["email"] = input.value
        }
        else if (id == 7) {
            var input = form["about"];
            // if (!input.value) {
            //     alert("Please enter your name")
            //     open(id)
            //     return false
            // }
            arr["about"] = input.value

        }


    }
    console.log(arr)

    $.ajax({
        type:'post',
        url:'register.php',
        data:arr,
        success:function(msg){
          $('#temp').html(msg);
        }
      });
}

function open(id){
    for(var i=0;i<8;i++)
        document.getElementById(i + "c").style.display = "none"
    document.getElementById(id+"c").style.display = ""
}