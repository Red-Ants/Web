<?php

    session_start();

	session_unset();

if(isset($_POST['loader'])){
	echo "<script>console.log('ONLINE')</script>";
	die();
}

	function randstring($length = 25){
	
			
	}
    

    $user_id = $_POST['htno'];

    $email=$_POST['email'];
    

    include_once 'db_operations.php';



    $dbobj = new DBConnect;



    $dbobj->connect();



    $result = $dbobj->search('red_ants_user_information',"user_id,mail_id",'user_id','"'.$user_id.'"');


    $row=$result->fetch_assoc();

    if($row){

         if(LOWER($email)!=$row["mail_id"]){
			echo "<script>

       alert('MAIL ID GIVEN IS INCORRECT FOR THE HT.NO');

    </script>";
	die();
		}

    }
	
	$result = $dbobj->search('red_ants_recovery_tokens',"user_id,mail_id",'user_id','"'.$user_id.'"');


    $row=$result->fetch_assoc();

    if($row){
	
		$dbobj->update('red_ants_recovery_tokens','mail_id','"'.$mail_id.'"','user_id','"'.$user_id.'"');
		
		$dbobj->update('red_ants_recovery_tokens','password','"'.md5($pwd).'"','user_id','"'.$user_id.'"');
         

    }
	else{

		$dbobj->insert('red_ants_recovery_tokens','(user_id,mail_id,password)','(UPPER("'.$user_id.'"),"'.$mail_id.'","'.md5($pwd).'")');
	
	}

    $values = '("'.$user_id.'","'.$name.'","'.$mobile.'","'.$branch.'","'.$year.'","'.$email.'")';

    $dbobj->insert('red_ants_user_information',' ',$values); 

    $dbobj->insert('red_ants_user_roles','(`user_id`, `role_id`)','("'.$user_id.'","2")');

    echo "<script>

       alert('STUDENT REGISTERED.');

    </script>";



    echo "<script>
	setTimeout
(function(){

       window.top.location='../';
},3000);

    </script>";

            die();



    ?>



