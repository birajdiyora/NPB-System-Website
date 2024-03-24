<?php
    require("conn.php");

    if(isset($_POST['c']) && isset($_POST['sid'])){
        $sid=$_POST['sid'];
       
        $q="SELECT * FROM `iso_2122` where `sid`='$sid'";
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
        $q="SELECT * FROM `iso_2122`";
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
                    <td>'.$row['course'].'</td>
                    <td>'.$row['adate'].'</td>
                    <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                    </tr>
                    
                
                ';
                $n++;
            }
            echo $data;
        }
    }


    if(isset($_POST['a']) && isset($_POST['v'])){
        $v=$_POST['v'];

        $q="SELECT * FROM `iso_2122` where `sid` LIKE '{$v}%' OR `feenu` LIKE '{$v}%' OR `sername` LIKE '{$v}%' OR `studentname` LIKE '{$v}%' OR `studentname` LIKE '{$v}%' OR `fathername` LIKE '{$v}%' OR `rab` LIKE '{$v}%'
        OR `course` LIKE '{$v}%' OR `district` LIKE '{$v}%' OR `taluko` LIKE '{$v}%' OR `village` LIKE '{$v}%' OR `studyin` LIKE '{$v}%' OR `scname` LIKE '{$v}%' OR `studenttype` LIKE '{$v}%' OR `feetype` LIKE '{$v}%' OR `adate` LIKE '{$v}%'";
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
                    <td>'.$row['course'].'</td>
                    <td>'.$row['adate'].'</td>
                    <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                    </tr>
                    
                
                ';
                $n++;
            }
            echo $data;
        }
    }
    
    if(isset($_POST['v']) && isset($_POST['sps'])){
        $v=$_POST['v'];
        $sps=$_POST['sps'];

        if($sps=="sid"){
            $q="SELECT * FROM `iso_2122` where `sid` LIKE '{$v}%'";
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
                    <td>'.$row['course'].'</td>
                    <td>'.$row['adate'].'</td>
                    <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                    </tr>
                    
                
                ';
                $n++;
            }
            echo $data;
        }
        }
        //-------------------sps for sername---------------------------------

        if($sps=="sename"){
            $q="SELECT * FROM `iso_2122` where `sername` LIKE '{$v}%'";
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
                    <td>'.$row['course'].'</td>
                    <td>'.$row['adate'].'</td>
                    <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                    </tr>
                    
                
                ';
                $n++;
            }
            echo $data;
        }
     }

       //-------------------sps for student name---------------------------------

       if($sps=="sname"){
        $q="SELECT * FROM `iso_2122` where `studentname` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

    
       //-------------------sps for student father name---------------------------------

       if($sps=="fname"){
        $q="SELECT * FROM `iso_2122` where `fathername` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

     //-------------------sps for student room number---------------------------------

     if($sps=="roomnu"){
        $q="SELECT * FROM `iso_2122` where `roomnu` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

         //-------------------sps for student fee receipt number---------------------------------

       if($sps=="feenu"){
        $q="SELECT * FROM `iso_2122` where `feenu` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

         //-------------------sps for course  name---------------------------------
       if($sps=="course"){
        $q="SELECT * FROM `iso_2122` where `course` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

         //-------------------sps for student district name---------------------------------

       if($sps=="district"){
        $q="SELECT * FROM `iso_2122` where `district` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

         //-------------------sps for student taluko name---------------------------------

       if($sps=="taluko"){
        $q="SELECT * FROM `iso_2122` where `taluko` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

         //-------------------sps for student village name---------------------------------

       if($sps=="village"){
        $q="SELECT * FROM `iso_2122` where `village` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

         //-------------------sps for student study in---------------------------------

       if($sps=="studyin"){
        $q="SELECT * FROM `iso_2122` where `studyin` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

         //-------------------sps for student scool/college name---------------------------------

       if($sps=="scname"){
        $q="SELECT * FROM `iso_2122` where `scname` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

         //-------------------sps for student type---------------------------------

       if($sps=="stype"){
        $q="SELECT * FROM `iso_2122` where `studenttype` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

         //-------------------sps for student father name---------------------------------

       if($sps=="feetype"){
        $q="SELECT * FROM `iso_2122` where `feetype` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

        //-------------------sps for student admssion date---------------------------------

       if($sps=="adate"){
        $q="SELECT * FROM `iso_2122` where `adate` LIKE '{$v}%'";
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
                        <td>'.$row['course'].'</td>
                        <td>'.$row['adate'].'</td>
                        <td><input type="submit" data-bs-toggle="modal" data-bs-target="#modal1" value="Edit" class="addbtn" id="'.$row['sid'].'" onclick="addstd('.$sid.');" style="color:white; background-color: #383838; border-radius:5px; width:70px;">
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

}

if(isset($_POST['d']) && isset($_POST['panv']) && isset($_POST['sid']) && isset($_POST['rab']) && isset($_POST['date']) && isset($_POST['time'])){
     $sid=$_POST['sid'];
     $rab=$_POST['rab'];
    $panfa=$_POST['panfa'];
    $panv=$_POST['panv'];
    $othde=$_POST['othde'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    


   $q="SELECT * FROM `iso_2122` where `sid`='$sid'";
   $re=mysqli_query($conn,$q);
   while($row=mysqli_fetch_array($re)){
       $sename=$row['sername'];
       $sname=$row['studentname'];
       $fname=$row['fathername'];
       $feenu=$row['feenu'];
       
   }

    $q="INSERT INTO `dpo_2122` (`sid`, `feenu`, `sername`, `studentname`, `fathername`, `rab`, `detail`, `penaltyvalue`, `otherdetail`, `deposite`, `date`, `time`) VALUES ('$sid', '$feenu', '$sename', '$sname', '$fname', '$rab', '$panfa', '$panv', '$othde', '', '$date', '$time');";
    $re=mysqli_query($conn,$q);   
    echo mysqli_error($conn);
   if($re){
       echo 'true';
   }
   else{
       echo 'false';
      
   }
}

?>