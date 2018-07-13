<?php
  
  session_start();

  include_once '../../db_operations.php';
  $dbobj = new DBConnect;
  $dbobj->connect();

  $findByColumnName = "user_id";

  if(!isset($_SESSION['user_id'])){

  }

  $fndByValue = '"'.$_SESSION['user_id'].'"';

  $result = $dbobj->search('red_ants_user_information','*',$findByColumnName,$fndByValue);
  $row = $result->fetch_assoc();

  if($row){
   echo "<script>
        document.forms['profile_faculty']['name'].value = '".$row['name']."';
        document.forms['profile_faculty']['htno'].value = '".$row['user_id']."';
        document.forms['profile_faculty']['mobile'].value = '".$row['mobile']."';
        document.forms['profile_faculty']['mail_id'].value = '".$row['mail_id']."';
        document.forms['profile_faculty']['year'].value = '".$row['year']."';
        document.forms['profile_faculty']['branch'].value = '".$row['branch']."';
   </script>" ;
  }

  $result = $dbobj->search('red_ants_user_hobbies','*',$findByColumnName,$fndByValue);

  while($row=$result->fetch_assoc()){
    echo "<script>
      document.forms['profile_faculty']['".$row['hobby_id']."'].checked = 1;
    </script>";
  }



?>
