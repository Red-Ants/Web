function regfaculty(){
    var vals = {
        "user_id":document.forms['regfaculty']['user_id'].value
    };

    $.ajax({
        type:"POST",
        url:'php/content/content2/regfaculty.php',
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
    var user_id = document.forms["regfaculty"]["user_id"]

    if(user_id.value==""){
        alert("ENTER THE FACULTY USERNAME")
        user_id.focus()
        return false
    }

    regfaculty()

    return false

}