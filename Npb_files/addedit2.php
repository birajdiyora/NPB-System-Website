<?php

require("conn.php");
if(isset($_POST['a']) && isset($_POST['jss']) && isset($_POST['sid'])){
 
    //$dat=array();
    //$dat[]=$_POST['dat'];
    $data = json_decode(stripslashes($_POST['jss']));
   $sid=$_POST['sid'];
   
    $rab=$data[13]."-".$data[14];

    $rdate=$data[17];

     $year=substr($rdate,0,-6);
     $month=substr($rdate,5,-3);
     $day=substr($rdate,8);
     $date=$day.'-'.$month.'-'.$year;


    $q="UPDATE `iso_2122` SET `sername` = '$data[0]', `studentname` = '$data[1]', `fathername` = '$data[2]', `roomnu` = '$data[13]', `bad` = '$data[14]', `rab` = '$rab', `course` = '$data[10] ', `district` = '$data[5]', `taluko` = '$data[4]', `village` = '$data[3]', `pincode` = '$data[6]', `studyin` = '$data[9]',
         `scname` = '$data[11]', `smobilenu` = '$data[7]', `fmobilenu` = '$data[8]', `studenttype` = '$data[12]', `feenu` = '$data[15]', `feetype` = '$data[16]', `adate` = '$data[17]', `idphoto` = '$data[18]' WHERE `iso_2122`.`sid` = '$sid';";
    $re=mysqli_query($conn,$q);

    if($re){
        echo "true";
    }
    else{
        echo 'false';
       echo mysqli_error($conn);
    }

   
}

if(isset($_FILES['photo']['name']) && isset($_POST['y'])){
   echo "hello";
    $name= $_FILES['photo']['name'];
    $tname= $_FILES['photo']['tmp_name'];
    $location = "sphoto/".$name;

    if(move_uploaded_file($_FILES['photo']['tmp_name'],$location)){
        //echo "true";
        echo $location;
     }
}
if(isset($_POST['v'])){
    

    $v= $_POST['v'];
    $q="select * from `iso_2122` where `feenu`='$v'";
    $re=mysqli_query($conn,$q);
    $nu=mysqli_num_rows($re);
    
    if($nu==1){
        echo "already";
    }
    else{
        echo "not";
    }
}

if(isset($_POST['nu']) && isset($_POST['bad']) && isset($_POST['a'])){
    $nu=$_POST['nu'];
    $bad=$_POST['bad'];

    $rab=$nu."-".$bad;

    $q="select * from `iso_2122` where `rab`='$rab'";
    $re=mysqli_query($conn,$q);

    $nu=mysqli_num_rows($re);

    if($nu<=0){
        echo "yes";
    }
    else{
        echo "no";
    }

}

if(isset($_POST['nu']) && isset($_POST['bad']) && isset($_POST['b'])){
    $nu=$_POST['nu'];
    $bad=$_POST['bad'];

    $rab=$nu."-".$bad;

    $q="select * from `iso_2122` where `rab`='$rab'";
    $re=mysqli_query($conn,$q);

    $nu=mysqli_num_rows($re);

    if($nu<=0){
        echo "yes";
    }
    else{
        echo "no";
    }
}

// if(isset($_POST['photo2']) && isset($_POST['c'])){
//      echo $photo=$_POST['photo2'];

//      echo $name=$_FILES['photo2']['name'];
// }

if(isset($_FILES['photo']['name']) && isset($_POST['x'])){
    //echo 'hello';
    
    $name= $_FILES['photo']['name'];
    $tname= $_FILES['photo']['tmp_name'];
    $location = "tmpsphoto/".$name;

    if(move_uploaded_file($_FILES['photo']['tmp_name'],$location)){
        //echo "true";
        echo $location;
     }
//---------------- delete all student phot in tmpsphoto-----------------------------------
    //  $files = glob('tmpsphoto/*'); //get all file names
    // foreach($files as $file){
    // if(is_file($file))
    // unlink($file); //delete file
}
    

?>