function change_pwd(){
    var vals = {
        "old_pwd":document.forms['chngpwd']['old_pwd'].value,
        "new_pwd":document.forms['chngpwd']['new_pwd'].value,
        "retype_new_pwd":document.forms['chngpwd']['retype_new_pwd'].value
        
    };

    $.ajax({
        type:"POST",
        url:'php/content/content19/change_pwd.php',
        data: vals,
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            $('#temp').html(msg);
        }
    });

}

function check(){
    var old_pwd = document.forms["chngpwd"]["old_pwd"]

    var new_pwd = document.forms["chngpwd"]["new_pwd"]

    if(new_pwd.value==""){
        alert("PLEASE ENTER NEW PASSWORD")
        new_pwd.focus()
        return false
    }
    
    var retype_new_pwd = document.forms["chngpwd"]["retype_new_pwd"]

    if(retype_new_pwd.value==""){
        alert("PLEASE RETYPE NEW PASSWORD")
        new_pwd.focus()

        return false

    }


    if(new_pwd.value.length<6){
        alert("PASSWORD SHOULD BE ATLEAST SIX CHARACTERS")
        new_pwd.focus()
        return false

    }

    if(new_pwd.value!=retype_new_pwd.value){
        alert("NEW AND CONFIRM PASSWORD DOESNT MATCH")
        new_pwd.focus()
        return false

    }

    if(old_pwd.value==new_pwd.value){

        alert("NEW PASSWORD DOESNT SEEM TO BE CORRECT")
        new_pwd.focus()
        return false
    }

    change_pwd()

    return false

}