
function reg(){

    var dataList = {
      'htno': document.forms['profile_faculty']['htno'].value,
      'name': document.forms['profile_faculty']['name'].value,
      'mobile': document.forms['profile_faculty']['mobile'].value,
      'email': document.forms['profile_faculty']['mail_id'].value,
      'branch': document.forms['profile_faculty']['branch'].value,
      'year': document.forms['profile_faculty']['year'].value,

      'TE00':document.forms['profile_faculty']['TE00'].checked,
  
      'AR00':document.forms['profile_faculty']['AR00'].checked,
  
      'PA00':document.forms['profile_faculty']['PA00'].checked,
  
      'CU00':document.forms['profile_faculty']['CU00'].checked,
  
      'SO00':document.forms['profile_faculty']['SO00'].checked
  
  };
  
      
  
    $.ajax({
      type:'post',
      url:'php/content/content3/update_profile.php',
      data:dataList,
      success:function(msg){
        $('#temp').html(msg);
      }
    });
  }


function validate_regform(){

   

    var htno = document.forms['profile_faculty']['htno']



    if(htno.value==""){

        alert("PROVIDE THE HT.NO")

        htno.focus()

        return false

    }
    // else if(htno.value.length != 10){

    //     alert("INCORRECT HT.NO")

    //     htno.focus()

    //     return false
    // }


    var name= document.forms['profile_faculty']['name']

    if(name.value==""){

        alert("PROVIDE THE NAME")

        name.focus()

        return false

    }
    else if(name.value.match(/^[A-Za-z\s]+$/) == null){

        alert("NAME SHOULD ONLY CONTAIN ALPHABETS")

        name.focus()

        return false
    }

    

    var mobile = document.forms['profile_faculty']['mobile']

    if(mobile.value==""){

        alert("PROVIDE THE MOBILE NUMBER")

        mobile.focus()

        return false

    }
    else if(mobile.value.length != 10 || mobile.value.match(/^[0-9]+$/) == null){
        
        alert("INCORRECT MOBILE NUMBER")

        mobile.focus()

        return false
    }



    var email= document.forms['profile_faculty']['mail_id']

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

    // var branch= document.forms['profile_faculty']['branch']

    // if(branch.value==""){

    //     alert("SELECT THE BRANCH")

    //     return false

    // }

    var year= document.forms['profile_faculty']['year']

    // if(year.value==""){

    //     alert("SELECT THE YEAR")

    //     return false

    // }

    //var aggregate= document.forms['profile_faculty']['aggregate']

    // if(aggregate.value==""){

    //     alert("PROVIDE THE AGGREGATE")

    //     aggregate.focus()

    //     return false

    // }

   

    //var about=document.forms['profile_faculty']['about']

    // if(about.value==""){

    //     alert("PROVIDE THE ABOUT")

    //     about.focus()

    //     return false

    // }



    var TE = [];

    TE[1]=document.forms['profile_faculty']['TE00']

    var AR = []



     AR[01]=document.forms['profile_faculty']['AR00']



    var PA = []



     PA[01]=document.forms['profile_faculty']['PA00']



    var CU = []



     CU[01]=document.forms['profile_faculty']['CU00']

    var SO = []



     SO[01]=document.forms['profile_faculty']['SO00']



     var count=0

        if(TE[1].checked){

            count+=1

        }

        if(AR[1].checked){

            count+=1

        }
        if(PA[1].checked){

            count+=1

        }
        if(SO[1].checked){

            count+=1

        }

        if(CU[1].checked){

            count+=1

        }



    if(count==0){

        alert("SELECT ATLEAST ONE CATEGORY")

        return false

    }

    reg()

    return false

}