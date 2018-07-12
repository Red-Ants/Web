function validate_regform(){

   

    var htno = document.forms['register']['htno']



    if(htno.value==""){

        alert("PROVIDE THE H.NO")

        htno.focus()

        return false

    }



    var password= document.forms['register']['password']

    if(password.value==""){

        alert("PROVIDE THE PASSWORD")

        password.focus()

        return false

    }

    var fname= document.forms['register']['fname']

    if(fname.value==""){

        alert("PROVIDE THE NAME")

        fname.focus()

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