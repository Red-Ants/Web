<?php

    session_start();

    

    $user_id = $_POST['htno'];

    $name=$_POST['name'];

    $mobile=$_POST['mobile'];

    $branch=$_POST['branch'];

    $year=$_POST['year'];

    $email=$_POST['email'];

    // $aggregate=$_POST['aggregate'];

    // $about=$_POST['about'];

    

    include_once '../../db_operations.php';



    $dbobj = new DBConnect;



    $dbobj->connect();



    $result = $dbobj->search('red_ants_user_information',"user_id",'user_id','"'.$user_id.'"');

    $row=$result->fetch_assoc();

    

    if($row["user_id"]!=$user_id){

        echo "<script>

       // window.top.location = '../index.php';
       console.log('".$row["user_id"]." == ".$user_id."')

    </script>";

         die();

    }

    $q = 'UPDATE red_ants_user_information SET `name`="'.$name.'",`mobile`="'.$mobile.'",`year`="'.$year.'",`mail_id`="'.$email.'" WHERE user_id="'.$user_id.'"';

    $dbobj->sqlQury($q); 

    $q = 'DELETE FROM red_ants_user_hobbies WHERE user_id="'.$user_id.'"';

    $dbobj->sqlQury($q); 

    for($i=1;$i<=9;$i+=1){



        if($_POST['TE0'.$i]=='true'){

            $dbobj->insert('red_ants_user_hobbies','(`user_id`, `hobby_id`)','("'.$user_id.'","TE0'.$i.'")');

        }

    }

    for($i=1;$i<=4;$i+=1){



        if($_POST['AR0'.$i]=='true'){

            $dbobj->insert('red_ants_user_hobbies','(`user_id`, `hobby_id`)','("'.$user_id.'","AR0'.$i.'")');

        }

    }

    for($i=1;$i<=9;$i+=1){



        if($_POST['PA0'.$i]=='true'){

            $dbobj->insert('red_ants_user_hobbies','(`user_id`, `hobby_id`)','("'.$user_id.'","PA0'.$i.'")');

        }

    }

    for($i=1;$i<=2;$i+=1){



        if($_POST['SO0'.$i]=='true'){

            $dbobj->insert('red_ants_user_hobbies','(`user_id`, `hobby_id`)','("'.$user_id.'","SO0'.$i.'")');

        }

    }



    for($i=1;$i<=4;$i+=1){



        if($_POST['CU0'.$i]=='true'){

            $dbobj->insert('red_ants_user_hobbies','(`user_id`, `hobby_id`)','("'.$user_id.'","CU0'.$i.'")');

        }

    }

    echo "<script>

       alert('UPDATION SUCESSFUL.');

    </script>";

            die();



    ?>



