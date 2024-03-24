<?php
    require("conn.php");

    if(isset($_POST['x'])){
        $q="SELECT * FROM `iso_2122`";
        $re=mysqli_query($conn,$q);

       
        if(mysqli_num_rows($re)>0){
            $data="";
            $n=1;
            while($row=mysqli_fetch_array($re)){
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
                    <td>'.$row['district'].'</td>
                    <td>'.$row['taluko'].'</td>
                    <td>'.$row['village'].'</td>
                    <td>'.$row['studyin'].'</td>
                    <td>'.$row['scname'].'</td>
                    <td>'.$row['studenttype'].'</td>
                    <td>'.$row['feetype'].'</td>
                    <td>'.$row['adate'].'</td>
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
                    <td>'.$row['district'].'</td>
                    <td>'.$row['taluko'].'</td>
                    <td>'.$row['village'].'</td>
                    <td>'.$row['studyin'].'</td>
                    <td>'.$row['scname'].'</td>
                    <td>'.$row['studenttype'].'</td>
                    <td>'.$row['feetype'].'</td>
                    <td>'.$row['adate'].'</td>
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
                    <td>'.$row['district'].'</td>
                    <td>'.$row['taluko'].'</td>
                    <td>'.$row['village'].'</td>
                    <td>'.$row['studyin'].'</td>
                    <td>'.$row['scname'].'</td>
                    <td>'.$row['studenttype'].'</td>
                    <td>'.$row['feetype'].'</td>
                    <td>'.$row['adate'].'</td>
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
                    <td>'.$row['district'].'</td>
                    <td>'.$row['taluko'].'</td>
                    <td>'.$row['village'].'</td>
                    <td>'.$row['studyin'].'</td>
                    <td>'.$row['scname'].'</td>
                    <td>'.$row['studenttype'].'</td>
                    <td>'.$row['feetype'].'</td>
                    <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
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
                        <td>'.$row['district'].'</td>
                        <td>'.$row['taluko'].'</td>
                        <td>'.$row['village'].'</td>
                        <td>'.$row['studyin'].'</td>
                        <td>'.$row['scname'].'</td>
                        <td>'.$row['studenttype'].'</td>
                        <td>'.$row['feetype'].'</td>
                        <td>'.$row['adate'].'</td>
                        </tr>
                        
                    
                    ';
                    $n++;
                }
                echo $data;
            }
        }

//code for make report-------------------------------------------------------------------------




 
}
?>