
function reg(){

    var dataList = {
      'htno': document.forms['profile_student']['htno'].value,
      'name': document.forms['profile_student']['name'].value,
      'mobile': document.forms['profile_student']['mobile'].value,
      'email': document.forms['profile_student']['mail_id'].value,
      'branch': document.forms['profile_student']['branch'].value,
      'year': document.forms['profile_student']['year'].value,
  
      'TE01':document.forms['profile_student']['TE01'].checked,
      'TE02':document.forms['profile_student']['TE02'].checked,
      'TE03':document.forms['profile_student']['TE03'].checked,
      'TE04':document.forms['profile_student']['TE04'].checked,
      'TE05':document.forms['profile_student']['TE05'].checked,
      'TE06':document.forms['profile_student']['TE06'].checked,
      'TE07':document.forms['profile_student']['TE07'].checked,
      'TE08':document.forms['profile_student']['TE08'].checked,
      'TE09':document.forms['profile_student']['TE09'].checked,
  
      'AR01':document.forms['profile_student']['AR01'].checked,
      'AR02':document.forms['profile_student']['AR02'].checked,
      'AR03':document.forms['profile_student']['AR03'].checked,
      'AR04':document.forms['profile_student']['AR04'].checked,
  
      'PA01':document.forms['profile_student']['PA01'].checked,
      'PA02':document.forms['profile_student']['PA02'].checked,
      'PA03':document.forms['profile_student']['PA03'].checked,
      'PA04':document.forms['profile_student']['PA04'].checked,
      'PA05':document.forms['profile_student']['PA05'].checked,
      'PA06':document.forms['profile_student']['PA06'].checked,
      'PA07':document.forms['profile_student']['PA07'].checked,
      'PA08':document.forms['profile_student']['PA08'].checked,
      'PA09':document.forms['profile_student']['PA09'].checked,
  
      'CU01':document.forms['profile_student']['CU01'].checked,
      'CU02':document.forms['profile_student']['CU02'].checked,
      'CU03':document.forms['profile_student']['CU03'].checked,
      'CU04':document.forms['profile_student']['CU04'].checked,
  
      'SO01':document.forms['profile_student']['SO01'].checked,
      'SO02':document.forms['profile_student']['SO02'].checked
  
  };
  
      
  
    $.ajax({
      type:'post',
      url:'php/content/content1/update_profile.php',
      data:dataList,
      success:function(msg){
        $('#temp').html(msg);
      }
    });
  }


function validate_regform(){

   

    var htno = document.forms['profile_student']['htno']



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


    var name= document.forms['profile_student']['name']

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

    

    var mobile = document.forms['profile_student']['mobile']

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



    var email= document.forms['profile_student']['mail_id']

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

     var branch= document.forms['profile_student']['branch']

     if(branch.value==""){

         alert("SELECT THE BRANCH")

       return false

     }

    var year= document.forms['profile_student']['year']

    if(year.value==""){

        alert("SELECT THE YEAR")

        return false

    }

    //var aggregate= document.forms['profile_student']['aggregate']

    // if(aggregate.value==""){

    //     alert("PROVIDE THE AGGREGATE")

    //     aggregate.focus()

    //     return false

    // }

   

    //var about=document.forms['profile_student']['about']

    // if(about.value==""){

    //     alert("PROVIDE THE ABOUT")

    //     about.focus()

    //     return false

    // }



    var TE = [];



     TE[01]=document.forms['profile_student']['TE01']

     TE[02]=document.forms['profile_student']['TE02']

     TE[03]=document.forms['profile_student']['TE03']

     TE[04]=document.forms['profile_student']['TE04']

     TE[05]=document.forms['profile_student']['TE05']

     TE[06]=document.forms['profile_student']['TE06']

     TE[07]=document.forms['profile_student']['TE07']

     TE[08]=document.forms['profile_student']['TE08']

     TE[09]=document.forms['profile_student']['TE09']





    var AR = []



     AR[01]=document.forms['profile_student']['AR01']

     AR[02]=document.forms['profile_student']['AR02']

     AR[03]=document.forms['profile_student']['AR03']

     AR[04]=document.forms['profile_student']['AR04']



    var PA = []



     PA[01]=document.forms['profile_student']['PA01']

     PA[02]=document.forms['profile_student']['PA02']

     PA[03]=document.forms['profile_student']['PA03']

     PA[04]=document.forms['profile_student']['PA04']

     PA[05]=document.forms['profile_student']['PA05']

     PA[06]=document.forms['profile_student']['PA06']

     PA[07]=document.forms['profile_student']['PA07']

     PA[08]=document.forms['profile_student']['PA08']

     PA[09]=document.forms['profile_student']['PA09']



    var CU = []



     CU[01]=document.forms['profile_student']['CU01']

     CU[02]=document.forms['profile_student']['CU02']

     CU[03]=document.forms['profile_student']['CU03']

     CU[04]=document.forms['profile_student']['CU04']



    var SO = []



     SO[01]=document.forms['profile_student']['SO01']

     SO[02]=document.forms['profile_student']['SO02']



     var count=0



    for(var i=1;i<=9;i+=1){



        if(TE[i].checked){

            count+=1

        }

    }

    for(var i=1;i<=4;i+=1){



        if(AR[i].checked){

            count+=1

        }

    }

    for(var i=1;i<=9;i+=1){



        if(PA[i].checked){

            count+=1

        }

    }

    for(var i=1;i<=2;i+=1){



        if(SO[i].checked){

            count+=1

        }

    }



    for(var i=1;i<=4;i+=1){



        if(CU[i].checked){

            count+=1

        }

    }



    if(count==0){

        alert("SELECT ATLEAST ONE HOBBY")

        return false

    }

    reg()

    return false

}