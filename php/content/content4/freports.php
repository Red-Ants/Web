<?php
    session_start();

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

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

    $s='SELECT * FROM `red_ants_user_roles` WHERE role_id=3;';
    
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

                $res = $res . '<td id=\"'.$row['user_id'].'AR00\"></td>';

                $res = $res . '<td id=\"'.$row['user_id'].'CU00\"></td>';

                $res = $res . '<td id=\"'.$row['user_id'].'PA00\"></td>';

                $res = $res . '<td id=\"'.$row['user_id'].'SO00\"></td>';

                $res = $res . '<td id=\"'.$row['user_id'].'TE00\"></td>';

                $res = $res . '</tr>";';

                $res = $res. '</script>';

                echo $res;

                $res = '<script>';

                while($rowx = $result1->fetch_assoc()){
                    $res.='document.getElementById("'.$row['user_id'].$rowx['hobby_id'].'").innerHTML="*";';
                }

                $res.='</script>';

                echo $res;
            }

    ?>