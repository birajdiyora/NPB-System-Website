<?php
    require("conn.php");

    if(isset($_POST['c']) && isset($_POST['sid'])){
        $sid=$_POST['sid'];
       
        $q="SELECT * FROM `dpo_2122` where `sid`='$sid'";
        $re=mysqli_query($conn,$q);
        // $stdda = new \stdClass();
        // $stdda->success = false;
        $stdda=array();
        while($row=mysqli_fetch_array($re)){
          $stdda=array($row['sername'],$row['studentname'],$row['fathername'],$row['rab']);
            // $stdda = array(
            //     'sename'      => $row['sername'],
            //     'sname'    => $row['studentname'],
            //     'fname'       => $row['fathername'],
            //     'roomnu' => $row['fathername'],
                
            //   );
            // $stdda->sename=$row['sername'];
            // $stdda->sname=$row['studentname'];
            // $stdda->fname=$row['fathername'];
            // $stdda->roomnu=$row['rab'];
        }
      
        echo json_encode($stdda);
        
    
    }

    if(isset($_POST['x'])){
        $q="SELECT * FROM `dpo_2122`";
        $re=mysqli_query($conn,$q);

       
        if(mysqli_num_rows($re)>0){
            $data="";
            $n=1;
            while($row=mysqli_fetch_array($re)){
                $sid=$row['sid'];
                $data.='
                    <tr>
                    <td>'.$n.'</td>
                    <td>'.$row['sid'].'</td>
                    <td>'.$row['feenu'].'</td>
                    <td>'.$row['sername'].'</td>
                    <td>'.$row['studentname'].'</td>
                    <td>'.$row['fathername'].'</td>
                    <td>'.$row['rab'].'</td>
                    <td>'.$row['detail'].'</td>
                    <td>'.$row['penaltyvalue'].'</td>
                    <td>'.$row['otherdetail'].'</td>
                    <td>'.$row['date'].'</td>
                    <td>'.$row['time'].'</td>
                ';
                if($row['penaltyvalue']!="none"){
                    if($row['deposite']=="yes"){
                        $data.='<td>deposited</td></tr>';
                    }
                    else{
                    $data.=' <td><input type="checkbox" id="'.$sid.'" date="'.$row['date'].'" time="'.$row['time'].'" class="che" ></td>';
                    }
                }
            
                else{
                    $data.='<td>---</td></tr>';
                }
              
                $n++;
            }
            echo $data;
        }
    }


    if(isset($_POST['a']) && isset($_POST['v'])){
        $v=$_POST['v'];

         $q="SELECT * FROM `dpo_2122` where `sid` LIKE '{$v}%' OR `feenu` LIKE '{$v}%' OR `sername` LIKE '{$v}%' OR `studentname` LIKE '{$v}%' OR `studentname` LIKE '{$v}%' OR `fathername` LIKE '{$v}%' OR `rab` LIKE '{$v}%' OR `date` LIKE '{$v}%'";
       // $q="SELECT * FROM `dpo_2122` WHERE  Concat( studentname, '', fathernam) LIKE '$v%'";
        $re=mysqli_query($conn,$q);

        if(mysqli_num_rows($re)>0){
            $data="";
            $n=1;
          while($row=mysqli_fetch_array($re)){
                $sid=$row['sid'];
                $data.='
                    <tr>
                    <td>'.$n.'</td>
                    <td>'.$row['sid'].'</td>
                    <td>'.$row['feenu'].'</td>
                    <td>'.$row['sername'].'</td>
                    <td>'.$row['studentname'].'</td>
                    <td>'.$row['fathername'].'</td>
                    <td>'.$row['rab'].'</td>
                    <td>'.$row['detail'].'</td>
                    <td>'.$row['penaltyvalue'].'</td>
                    <td>'.$row['otherdetail'].'</td>
                    <td>'.$row['date'].'</td>
                    <td>'.$row['time'].'</td>
                ';
               if($row['penaltyvalue']!="none"){
                    if($row['deposite']=="yes"){
                        $data.='<td>deposited</td></tr>';
                    }
                    else{
                    $data.=' <td><input type="checkbox" id="'.$sid.'" date="'.$row['date'].'" time="'.$row['time'].'" class="che" ></td>';
                    }
                }
            
                else{
                    $data.='<td>---</td></tr>';
                }
                
                $n++;
            }
            echo $data;
        }
    }
    
    if(isset($_POST['v']) && isset($_POST['sps'])){
        $v=$_POST['v'];
        $sps=$_POST['sps'];

        if($sps=="sid"){
            $q="SELECT * FROM `dpo_2122` where `sid` LIKE '{$v}%'";
            $re=mysqli_query($conn,$q);


            
        if(mysqli_num_rows($re)>0){
            $data="";
            $n=1;
           while($row=mysqli_fetch_array($re)){
                $sid=$row['sid'];
                $data.='
                    <tr>
                    <td>'.$n.'</td>
                    <td>'.$row['sid'].'</td>
                    <td>'.$row['feenu'].'</td>
                    <td>'.$row['sername'].'</td>
                    <td>'.$row['studentname'].'</td>
                    <td>'.$row['fathername'].'</td>
                    <td>'.$row['rab'].'</td>
                    <td>'.$row['detail'].'</td>
                    <td>'.$row['penaltyvalue'].'</td>
                    <td>'.$row['otherdetail'].'</td>
                    <td>'.$row['date'].'</td>
                    <td>'.$row['time'].'</td>
                ';
                 if($row['penaltyvalue']!="none"){
                    if($row['deposite']=="yes"){
                        $data.='<td>deposited</td></tr>';
                    }
                    else{
                    $data.=' <td><input type="checkbox" id="'.$sid.'" date="'.$row['date'].'" time="'.$row['time'].'" class="che" ></td>';
                    }
                }
            
                else{
                    $data.='<td>---</td></tr>';
                }
                
                $n++;
            }
            echo $data;
        }
        }
        //-------------------sps for sername---------------------------------

        if($sps=="sename"){
            $q="SELECT * FROM `dpo_2122` where `sername` LIKE '{$v}%'";
            $re=mysqli_query($conn,$q);


            
        if(mysqli_num_rows($re)>0){
            $data="";
            $n=1;
           while($row=mysqli_fetch_array($re)){
                $sid=$row['sid'];
                $data.='
                    <tr>
                    <td>'.$n.'</td>
                    <td>'.$row['sid'].'</td>
                    <td>'.$row['feenu'].'</td>
                    <td>'.$row['sername'].'</td>
                    <td>'.$row['studentname'].'</td>
                    <td>'.$row['fathername'].'</td>
                    <td>'.$row['rab'].'</td>
                    <td>'.$row['detail'].'</td>
                    <td>'.$row['penaltyvalue'].'</td>
                    <td>'.$row['otherdetail'].'</td>
                    <td>'.$row['date'].'</td>
                    <td>'.$row['time'].'</td>
                ';
                 if($row['penaltyvalue']!="none"){
                    if($row['deposite']=="yes"){
                        $data.='<td>deposited</td></tr>';
                    }
                    else{
                    $data.=' <td><input type="checkbox" id="'.$sid.'" date="'.$row['date'].'" time="'.$row['time'].'" class="che" ></td>';
                    }
                }
            
                else{
                    $data.='<td>---</td></tr>';
                }
                
                $n++;
            }
            echo $data;
        }
     }

       //-------------------sps for student name---------------------------------

       if($sps=="sname"){
        $q="SELECT * FROM `dpo_2122` where `studentname` LIKE '{$v}%'";
        $re=mysqli_query($conn,$q);


        
            if(mysqli_num_rows($re)>0){
                $data="";
                $n=1;
               while($row=mysqli_fetch_array($re)){
                $sid=$row['sid'];
                $data.='
                    <tr>
                    <td>'.$n.'</td>
                    <td>'.$row['sid'].'</td>
                    <td>'.$row['feenu'].'</td>
                    <td>'.$row['sername'].'</td>
                    <td>'.$row['studentname'].'</td>
                    <td>'.$row['fathername'].'</td>
                    <td>'.$row['rab'].'</td>
                    <td>'.$row['detail'].'</td>
                    <td>'.$row['penaltyvalue'].'</td>
                    <td>'.$row['otherdetail'].'</td>
                    <td>'.$row['date'].'</td>
                    <td>'.$row['time'].'</td>
                ';
                 if($row['penaltyvalue']!="none"){
                    if($row['deposite']=="yes"){
                        $data.='<td>deposited</td></tr>';
                    }
                    else{
                    $data.=' <td><input type="checkbox" id="'.$sid.'" date="'.$row['date'].'" time="'.$row['time'].'" class="che" ></td>';
                    }
                }
            
                else{
                    $data.='<td>---</td></tr>';
                }
                
                $n++;
            }
                echo $data;
            }
        }

    
       //-------------------sps for student father name---------------------------------

       if($sps=="fname"){
        $q="SELECT * FROM `dpo_2122` where `fathername` LIKE '{$v}%'";
        $re=mysqli_query($conn,$q);


        
            if(mysqli_num_rows($re)>0){
                $data="";
                $n=1;
               while($row=mysqli_fetch_array($re)){
                $sid=$row['sid'];
                $data.='
                    <tr>
                    <td>'.$n.'</td>
                    <td>'.$row['sid'].'</td>
                    <td>'.$row['feenu'].'</td>
                    <td>'.$row['sername'].'</td>
                    <td>'.$row['studentname'].'</td>
                    <td>'.$row['fathername'].'</td>
                    <td>'.$row['rab'].'</td>
                    <td>'.$row['detail'].'</td>
                    <td>'.$row['penaltyvalue'].'</td>
                    <td>'.$row['otherdetail'].'</td>
                    <td>'.$row['date'].'</td>
                    <td>'.$row['time'].'</td>
                ';
                 if($row['penaltyvalue']!="none"){
                    if($row['deposite']=="yes"){
                        $data.='<td>deposited</td></tr>';
                    }
                    else{
                    $data.=' <td><input type="checkbox" id="'.$sid.'" date="'.$row['date'].'" time="'.$row['time'].'" class="che" ></td>';
                    }
                }
            
                else{
                    $data.='<td>---</td></tr>';
                }
                
                $n++;
            }
                echo $data;
            }
        }

     //-------------------sps for student room number---------------------------------

     if($sps=="roomnu"){
        $q="SELECT * FROM `dpo_2122` where `rab` LIKE '{$v}%'";
        $re=mysqli_query($conn,$q);


        
            if(mysqli_num_rows($re)>0){
                $data="";
                $n=1;
               while($row=mysqli_fetch_array($re)){
                $sid=$row['sid'];
                $data.='
                    <tr>
                    <td>'.$n.'</td>
                    <td>'.$row['sid'].'</td>
                    <td>'.$row['feenu'].'</td>
                    <td>'.$row['sername'].'</td>
                    <td>'.$row['studentname'].'</td>
                    <td>'.$row['fathername'].'</td>
                    <td>'.$row['rab'].'</td>
                    <td>'.$row['detail'].'</td>
                    <td>'.$row['penaltyvalue'].'</td>
                    <td>'.$row['otherdetail'].'</td>
                    <td>'.$row['date'].'</td>
                    <td>'.$row['time'].'</td>
                ';
                 if($row['penaltyvalue']!="none"){
                    if($row['deposite']=="yes"){
                        $data.='<td>deposited</td></tr>';
                    }
                    else{
                    $data.=' <td><input type="checkbox" id="'.$sid.'" date="'.$row['date'].'" time="'.$row['time'].'" class="che" ></td>';
                    }
                }
            
                else{
                    $data.='<td>---</td></tr>';
                }
                
                $n++;
            }
                echo $data;
            }
        }

         //-------------------sps for student fee receipt number---------------------------------

       if($sps=="feenu"){
        $q="SELECT * FROM `dpo_2122` where `feenu` LIKE '{$v}%'";
        $re=mysqli_query($conn,$q);


        
            if(mysqli_num_rows($re)>0){
                $data="";
                $n=1;
               while($row=mysqli_fetch_array($re)){
                $sid=$row['sid'];
                $data.='
                    <tr>
                    <td>'.$n.'</td>
                    <td>'.$row['sid'].'</td>
                    <td>'.$row['feenu'].'</td>
                    <td>'.$row['sername'].'</td>
                    <td>'.$row['studentname'].'</td>
                    <td>'.$row['fathername'].'</td>
                    <td>'.$row['rab'].'</td>
                    <td>'.$row['detail'].'</td>
                    <td>'.$row['penaltyvalue'].'</td>
                    <td>'.$row['otherdetail'].'</td>
                    <td>'.$row['date'].'</td>
                    <td>'.$row['time'].'</td>
                ';
                 if($row['penaltyvalue']!="none"){
                    if($row['deposite']=="yes"){
                        $data.='<td>deposited</td></tr>';
                    }
                    else{
                    $data.=' <td><input type="checkbox" id="'.$sid.'" date="'.$row['date'].'" time="'.$row['time'].'" class="che" ></td>';
                    }
                }
            
                else{
                    $data.='<td>---</td></tr>';
                }
                
                $n++;
            }
                echo $data;
            }
        }




          //-------------------sps for student panulty record date---------------------------------

       if($sps=="date"){
        $q="SELECT * FROM `dpo_2122` where `date` LIKE '{$v}%'";
        $re=mysqli_query($conn,$q);


        
            if(mysqli_num_rows($re)>0){
                $data="";
                $n=1;
               while($row=mysqli_fetch_array($re)){
                $sid=$row['sid'];
                $data.='
                    <tr>
                    <td>'.$n.'</td>
                    <td>'.$row['sid'].'</td>
                    <td>'.$row['feenu'].'</td>
                    <td>'.$row['sername'].'</td>
                    <td>'.$row['studentname'].'</td>
                    <td>'.$row['fathername'].'</td>
                    <td>'.$row['rab'].'</td>
                    <td>'.$row['detail'].'</td>
                    <td>'.$row['penaltyvalue'].'</td>
                    <td>'.$row['otherdetail'].'</td>
                    <td>'.$row['date'].'</td>
                    <td>'.$row['time'].'</td>
                ';
                 if($row['penaltyvalue']!="none"){
                    if($row['deposite']=="yes"){
                        $data.='<td>deposited</td></tr>';
                    }
                    else{
                    $data.=' <td><input type="checkbox" id="'.$sid.'" date="'.$row['date'].'" time="'.$row['time'].'" class="che" ></td>';
                    }
                }
            
                else{
                    $data.='<td>---</td></tr>';
                }
                
                $n++;
            }
                echo $data;
            }
        }

       

}

if(isset($_POST['z']) && isset($_POST['sid']) && isset($_POST['date']) && isset($_POST['time'])){
   $sid=$_POST['sid'];
    $date=$_POST['date'];
    $time=$_POST['time'];
   $q="UPDATE `dpo_2122` SET `deposite` = 'yes' WHERE `sid` = '$sid' AND `date`='$date' AND `time`='$time';";
   $re=mysqli_query($conn,$q);
}

if(isset($_POST['y']) && isset($_POST['sid']) && isset($_POST['date']) && isset($_POST['time'])){
     $sid=$_POST['sid'];
     $date=$_POST['date'];
     $time=$_POST['time'];
     $q="UPDATE `dpo_2122` SET `deposite` = '' WHERE `sid` = '$sid' AND `date`='$date' AND `time`='$time';";
     $re=mysqli_query($conn,$q);
  }
  ?>

