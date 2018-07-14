<?php
    session_start();
    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->connect();

    $val = $_POST['val'];

    $label = $_POST['label'];

    if(isset($_POST['cate'])){
        $cat = $_POST['cate'];
    }
    $str = "<script>document.getElementById('table_transactions').innerHTML='<tbody><tr>\
    <th>Name</th>\
    <th>H.No</th>\
    <th>Year</th>\
    <th>Department</th>\
    <th>Mobile</th>\
    <th>Email Id</th>";
    

  echo '<script>console.log("'.$label.'")</script>';

    if($label=='hobby_id'){
        
                                $s='SELECT * FROM `red_ants_user_hobbies` WHERE hobby_id like "'.$cat[0].$cat[1].'%";';

                                $str = $str . "<th>".$cat."</th></tr>";
                                $str = $str . "</tbody><tfoot>\
                            <tr>\
                            <td  colspan=\'11\' ></td>\
                            </tr>\
                        </tfoot>';</script>";

                        echo $str;

                                $result0=$dbobj->sqlQury($s);
                            
                        
                                while($row0=$result0->fetch_assoc()){

                                    $s = 'SELECT * FROM `red_ants_user_information` WHERE user_id="'.$row0["user_id"].'";';

                                    $result=$dbobj->sqlQury($s);

                                    $row=$result->fetch_assoc();
                        
                                    if($row){

                                        $s3 = 'SELECT * FROM `red_ants_hobbies` WHERE hobby_id like "'.$row0['hobby_id'].'";';

                                        $resultx=$dbobj->sqlQury($s3);

                                        $rowx = $resultx->fetch_assoc();

                                        //echo '<script>alert("'.$row['user_id'].'")</script>';

                                        $res = '<script>if(document.getElementById("'.$row['user_id'].'")){
                                            document.getElementById("'.$row['user_id'].$cat.'").innerHTML += ", \" ';
                                            $abc = "";
                                            if($rowx){
                                                $abc = $rowx['hobby_name'];
                                            }
                                            
                                            $res = $res  . $abc.' \"";
                                        } else{
                                            document.getElementById("table_transactions").innerHTML+="<tr id=\"'.$row['user_id'].'\"></tr>";

                                            document.getElementById("'.$row['user_id'].'").innerHTML = "';
                                        
                                        $res = $res . '<td>\"'.$row['name'].'\"</td>';
                                        
                                        $res = $res . '<td>\"'.$row['user_id'].'\"</td>';

                                        $res = $res . '<td>\"'.$row['year'].'\"</td>';

                                        $res = $res . '<td>\"'.$row['branch'].'\"</td>';
                                        
                                        $res = $res . '<td>\"'.$row['mobile'].'\"</td>';
                                        
                                        $res = $res . '<td>\"'.$row['mail_id'].'\"</td>';

                                        if($rowx){
                                            $res = $res . '<td id=\"'.$row['user_id'].$cat.'\">\" '.$rowx['hobby_name'].' \"</td>';
                                        }

                                        $res = $res . '</tr>"}</script>';
                                    }

                                    echo $res;
                                    
                                    
                                
                                }
    } 
    else{
        $str = $str . "<th>Art</th>\
    <th>Cultural</th>\
    <th>Passion</th>\
    <th>Social</th>\
    <th>Techie</th>\
  </tr>";
  $str = $str . "</tbody><tfoot>\
    <tr>\
      <td  colspan=\'11\' ></td>\
    </tr>\
   </tfoot>';</script>";

   echo $str;

    $s='SELECT * FROM `red_ants_user_information` WHERE '.$label.'="'.$val.'";';
    
    $result0=$dbobj->sqlQury($s);
    
  
    while($row0=$result0->fetch_assoc()){

        $s = 'SELECT * FROM `red_ants_user_hobbies` WHERE user_id="'.$row0["user_id"].'";';

            $result=$dbobj->sqlQury($s);

            
  
            while($row=$result->fetch_assoc()){

                $s3 = 'SELECT * FROM `red_ants_hobbies` WHERE hobby_id like "'.$row['hobby_id'].'";';

                $resultx=$dbobj->sqlQury($s3);

                $rowx = $resultx->fetch_assoc();

                //echo '<script>alert("'.$row['user_id'].'")</script>';

                $res = '<script>if(document.getElementById("'.$row0['user_id'].'")){
    
                    document.getElementById("'.$row0['user_id'].$rowx['hobby_category'].'").innerHTML += ", \" ';
                    $abc = "";
                    if($rowx){
                        $abc = $rowx['hobby_name'];
                    }
                    
                    $res = $res  . $abc.' \"";
                } else{
                    document.getElementById("table_transactions").innerHTML+="<tr id=\"'.$row['user_id'].'\"></tr>";

                    document.getElementById("'.$row0['user_id'].'").innerHTML = "';
                
                $res = $res . '<td>\"'.$row0['name'].'\"</td>';
                
                $res = $res . '<td>\"'.$row0['user_id'].'\"</td>';

                $res = $res . '<td>\"'.$row0['year'].'\"</td>';

                $res = $res . '<td>\"'.$row0['branch'].'\"</td>';
                
                $res = $res . '<td>\"'.$row0['mobile'].'\"</td>';
                
                $res = $res . '<td>\"'.$row0['mail_id'].'\"</td>';

                $res = $res . '<td id=\"'.$row0['user_id'].'Art\"></td>';

                $res = $res . '<td id=\"'.$row0['user_id'].'Cultural\"></td>';

                $res = $res . '<td id=\"'.$row0['user_id'].'Passion\"></td>';

                $res = $res . '<td id=\"'.$row0['user_id'].'Social\"></td>';

                $res = $res . '<td id=\"'.$row0['user_id'].'Techie\"></td>';

                $res = $res . '</tr>";document.getElementById("'.$row0['user_id'].$rowx['hobby_category'].'").innerHTML += "\" ';
                $abc = "";
                if($rowx){
                    $abc = $rowx['hobby_name'];
                }
                
                $res = $res  . $abc.' \"";
            }</script>';
            }

            echo $res;
            
            
        

        
        
    }
}

    ?>