<?php
session_start();

include_once 'db_operations.php';

$dbobj = new DBConnect;

$dbobj->connect();

    
$query = "SELECT `role_id`, `service_id` FROM `red_ants_role_services` WHERE role_id=".$_SESSION['role']." ORDER BY service_id";

$result = $dbobj->sqlQury($query);
echo "<li class='nav-item'  ><a href=''class='nav-link link-scroll'>Home</a></li>";

while($row = $result->fetch_assoc()){

    $result1 = $dbobj->search('red_ants_services',"service_id, service_name",'service_id','"'.$row['service_id'].'"');

    while($row1 = $result1->fetch_assoc()){

        echo "<li id='link".$row['service_id']."'class='nav-item'><a href='#".$row1['service_name']."'class='nav-link link-scroll' onclick='sidemenu(".$row['service_id'].");'</a>".$row1['service_name']."</li>";
    
        // if($row['service_id']==1)
        //     echo '<script>setTimeout(function(){
        // $("#content").load("php/content/content1/content1.php");
        //      },100);</script>';
        
    }
    

}

?>
 