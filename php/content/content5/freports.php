<?php
    session_start();

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

if(!isset($_SESSION['user_id'])){
	echo "<script>window.top.location='index.php'</script>";
}else{
	$user_id = $_SESSION['user_id'];
}

$user_id = str_split($user_id);

echo "<script>console.log('".$user_id[0]."')</script>";

    $dbobj->connect();

    $str = "<script>document.getElementById('table_transactions').innerHTML='<tbody><tr>\
    <th>Name</th>\
    <th>H.No</th>\
    <th>Department</th>\
    <th>Mobile</th>\
    <th>Email Id</th>";
        $str = $str . "<th>Art</th>\
    <th>Cultural</th>\
    <th>Passion</th>\
    <th>Social</th>\
    <th>Techie</th>\
  </tr>";
  $str = $str . "</tbody><tfoot>\
    <tr>\
      <td  colspan=\'10\' ></td>\
    </tr>\
   </tfoot>';</script>";

   echo $str;
    $s='SELECT * FROM `red_ants_user_information` WHERE branch like "'.$user_id[0].$user_id[1].'%" or branch like upper("'.$user_id[0].$user_id[1].'%");';
    
    $result0=$dbobj->sqlQury($s);
    
    while($row0=$result0->fetch_assoc()){
        $s = 'SELECT * FROM `red_ants_user_information` WHERE user_id="'.$row0["user_id"].'";';

            $result=$dbobj->sqlQury($s);

            $row = $result->fetch_assoc();

            $s = 'SELECT * FROM `red_ants_user_hobbies` WHERE user_id="'.$row0["user_id"].'";';

            $result1=$dbobj->sqlQury($s);
            
            $res ='<script>document.getElementById("table_transactions").innerHTML+="<tr id=\"'.$row['user_id'].'\">';
                
                $res = $res . '<td>\"'.$row['name'].'\"</td>';
                
                $res = $res . '<td>\"'.$row['user_id'].'\"</td>';

                $res = $res . '<td>\"'.$row['branch'].'\"</td>';
                
                $res = $res . '<td>\"'.$row['mobile'].'\"</td>';
                
                $res = $res . '<td>\"'.$row['mail_id'].'\"</td>';

                $res = $res . '<td id=\"'.$row['user_id'].'AR\"></td>';

                $res = $res . '<td id=\"'.$row['user_id'].'CU\"></td>';

                $res = $res . '<td id=\"'.$row['user_id'].'PA\"></td>';

                $res = $res . '<td id=\"'.$row['user_id'].'SO\"></td>';

                $res = $res . '<td id=\"'.$row['user_id'].'TE\"></td>';

                $res = $res . '</tr>";';

                $res = $res. '</script>';

                echo $res;

                $res = '<script>';

                while($rowx = $result1->fetch_assoc()){
			$temp =  str_split($rowx['hobby_id']);
                    $res.='document.getElementById("'.$row['user_id'].$temp[0].$temp[1].'").innerHTML="*";';
                }

                $res.='</script>';

                echo $res;
            }
	$q = 'SELECT COUNT(user_id) FROM `red_ants_user_information` WHERE (branch like "'.$user_id[0].$user_id[1].'%" or branch like upper("'.$user_id[0].$user_id[1].'%")) and user_id in (SELECT user_id from red_ants_user_roles where role_id=2);';
	$result=$dbobj->sqlQury($q);

        $row = $result->fetch_assoc();

	echo "<script>document.getElementById('count').innerHTML=".$row['COUNT(user_id)']."</script>";

    ?>