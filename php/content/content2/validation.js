function regfaculty(vals){
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
	var vals = []
    var user_id = document.forms["regfaculty"]["user_id"]

    if(user_id.value==""){
        alert("ENTER THE FACULTY USERNAME")
        user_id.focus()
        return false
    }	
	var role = document.forms['regfaculty']['role']
	var pak = document.getElementById('abc')
	if(role.value==""){
		vals = {
			"user_id":document.forms['regfaculty']['user_id'].value,
			"role":3
		};
	}else{
		vals = {
        		"user_id":document.forms['regfaculty']['user_id'].value,
			"role":document.forms['regfaculty']['role'].value
		};

	}
    regfaculty(vals)

    return false

}