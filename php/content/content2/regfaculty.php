<?php

    session_start();

    

    $user_id = $_POST['user_id'];

    $pwd="FILL THE FIELD";

    $name="FILL THE FIELD";

    $mobile="FILL THE FIELD";

    $branch="FILL THE FIELD";

    $year="FILL THE FIELD";

    $email="FILL THE FIELD";

    $aggregate="FILL THE FIELD";

    $about="FILL THE FIELD";

    

    include_once '../../db_operations.php';



    $dbobj = new DBConnect;



    $dbobj->connect();



    $result = $dbobj->search('red_ants_users',"user_id",'user_id','"'.$user_id.'"');





    $row=$result->fetch_assoc();

    if($row){

        echo "<script>

       alert('USER ALREADY EXISTS');

    </script>";

    echo "<script>

    window.top.location='index.php';

 </script>";

         die();

    }

    $dbobj->insert('red_ants_users','(user_id)','("'.$user_id.'")');

    $values = '("'.$user_id.'","'.$name.'","'.$mobile.'","'.$branch.'","'.$year.'","'.$email.'")';

    $dbobj->insert('red_ants_user_information',' ',$values); 

    $dbobj->insert('red_ants_user_roles','(`user_id`, `role_id`)','("'.$user_id.'","3")');

    echo "<script>

       alert('FACULTY REGISTRATION SUCESSFUL.');

    </script>";



    ?>



