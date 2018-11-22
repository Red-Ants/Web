<?php

    session_start();

    include_once 'db_operations.php';
    $dbobj = new DBConnect;
    $dbobj->connect();

    $result = $dbobj->search('alumni_data',"hallticket",'hallticket','"'.$_POST["hallticket"].'"');

    $row=$result->fetch_assoc();

    if($row){

        echo "<script>alert('ALUMNI ALREADY EXISTS');</script>";

        //echo "<script>window.top.location='index.php';</script>";

    }

    $dbobj->insert('alumni_data','(name)','(UPPER("'.$_POST["name"].'"))');

    $name = $_POST["name"];

    foreach($_POST as $key => $value){
        if($name != $key)
            $dbobj->update("alumni_data",$columnName=$key,$value="'".$value."'",$fndByColumnName="name",$findByValue="'".$name."'");

    }

?>