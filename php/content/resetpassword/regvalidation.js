function rsetpwd(){

    var dataList = {
      'htno': document.forms['register']['htno'].value,
      'email': document.forms['register']['email'].value
  };
  
      
  
    $.ajax({
      type:'post',
      url:'php/pwdreset.php',
      data:dataList,
      success:function(msg){
        $('#temp').html(msg);
      }
    });
  }


function validate_regform(){
   

    var htno = document.forms['register']['htno']



    if(htno.value==""){

        alert("PROVIDE THE HT.NO")

        htno.focus()

        return false

    }
    else if(htno.value.length != 10){

        alert("INCORRECT HT.NO")

        htno.focus()

        return false
    }



    var email= document.forms['register']['email']

    if(email.value==""){

        alert("PROVIDE THE EMAIL")

        email.focus()

        return false

    }
    else if(email.value.match(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/)==null){
        
        alert("INCORRECT EMAIL")

        email.focus()

        return false
    }



    rsetpwd()



}