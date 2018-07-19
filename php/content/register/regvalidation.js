function reg(){

    var dataList = {
      'htno': document.forms['register']['htno'].value,
      'password': document.forms['register']['password'].value,
      'name': document.forms['register']['fname'].value,
      'mobile': document.forms['register']['mobile'].value,
      'email': document.forms['register']['email'].value,
      'branch': document.forms['register']['branch'].value,
      'year': document.forms['register']['year'].value,
      'aggregate': document.forms['register']['aggregate'].value,
      'about':document.forms['register']['about'].value,
  
      'TE01':document.forms['register']['TE01'].checked,
      'TE02':document.forms['register']['TE02'].checked,
      'TE03':document.forms['register']['TE03'].checked,
      'TE04':document.forms['register']['TE04'].checked,
      'TE05':document.forms['register']['TE05'].checked,
      'TE06':document.forms['register']['TE06'].checked,
      'TE07':document.forms['register']['TE07'].checked,
      'TE08':document.forms['register']['TE08'].checked,
      'TE09':document.forms['register']['TE09'].checked,
  
      'AR01':document.forms['register']['AR01'].checked,
      'AR02':document.forms['register']['AR02'].checked,
      'AR03':document.forms['register']['AR03'].checked,
      'AR04':document.forms['register']['AR04'].checked,
  
      'PA01':document.forms['register']['PA01'].checked,
      'PA02':document.forms['register']['PA02'].checked,
      'PA03':document.forms['register']['PA03'].checked,
      'PA04':document.forms['register']['PA04'].checked,
      'PA05':document.forms['register']['PA05'].checked,
      'PA06':document.forms['register']['PA06'].checked,
      'PA07':document.forms['register']['PA07'].checked,
      'PA08':document.forms['register']['PA08'].checked,
      'PA09':document.forms['register']['PA09'].checked,
  
      'CU01':document.forms['register']['CU01'].checked,
      'CU02':document.forms['register']['CU02'].checked,
      'CU03':document.forms['register']['CU03'].checked,
      'CU04':document.forms['register']['CU04'].checked,
  
      'SO01':document.forms['register']['SO01'].checked,
      'SO02':document.forms['register']['SO02'].checked
  
  };
  
      
  
    $.ajax({
      type:'post',
      url:'php/register.php',
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



    var password= document.forms['register']['password']

    if(password.value==""){

        alert("PROVIDE THE PASSWORD")

        password.focus()

        return false

    }
    else if(password.value.length < 6){

        alert('PASSWORD SHOULD BE ATLEAST SIX CHARACTERS.')

        return false
    }

    var fname= document.forms['register']['fname']

    if(fname.value==""){

        alert("PROVIDE THE NAME")

        fname.focus()

        return false

    }
    else if(fname.value.match(/^[A-Za-z\s]+$/) == null){

        alert("NAME SHOULD ONLY CONTAIN ALPHABETS")

        fname.focus()

        return false
    }

    

    var mobile = document.forms['register']['mobile']

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

    // if(aggregate.value==""){

    //     alert("PROVIDE THE AGGREGATE")

    //     aggregate.focus()

    //     return false

    // }

   

    var about=document.forms['register']['about']

    // if(about.value==""){

    //     alert("PROVIDE THE ABOUT")

    //     about.focus()

    //     return false

    // }



    var TE = [];



     TE[01]=document.forms['register']['TE01']

     TE[02]=document.forms['register']['TE02']

     TE[03]=document.forms['register']['TE03']

     TE[04]=document.forms['register']['TE04']

     TE[05]=document.forms['register']['TE05']

     TE[06]=document.forms['register']['TE06']

     TE[07]=document.forms['register']['TE07']

     TE[08]=document.forms['register']['TE08']

     TE[09]=document.forms['register']['TE09']





    var AR = []



     AR[01]=document.forms['register']['AR01']

     AR[02]=document.forms['register']['AR02']

     AR[03]=document.forms['register']['AR03']

     AR[04]=document.forms['register']['AR04']



    var PA = []



     PA[01]=document.forms['register']['PA01']

     PA[02]=document.forms['register']['PA02']

     PA[03]=document.forms['register']['PA03']

     PA[04]=document.forms['register']['PA04']

     PA[05]=document.forms['register']['PA05']

     PA[06]=document.forms['register']['PA06']

     PA[07]=document.forms['register']['PA07']

     PA[08]=document.forms['register']['PA08']

     PA[09]=document.forms['register']['PA09']



    var CU = []



     CU[01]=document.forms['register']['CU01']

     CU[02]=document.forms['register']['CU02']

     CU[03]=document.forms['register']['CU03']

     CU[04]=document.forms['register']['CU04']



    var SO = []



     SO[01]=document.forms['register']['SO01']

     SO[02]=document.forms['register']['SO02']



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



}