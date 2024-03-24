<?php

require("conn.php");
if(isset($_POST['a']) && isset($_POST['jss'])){
 
    //$dat=array();
    //$dat[]=$_POST['dat'];
    $data = json_decode(stripslashes($_POST['jss']));
   
   
    $rab=$data[13]."-".$data[14];

    $rdate=$data[17];

     $year=substr($rdate,0,-6);
     $month=substr($rdate,5,-3);
     $day=substr($rdate,8);
     $date=$day.'-'.$month.'-'.$year;


    $q="INSERT INTO `iso_2122` (`sername`, `studentname`, `fathername`, `roomnu`, `bad`, `rab`, `course`, `district`, `taluko`, `village`,`pincode`, `studyin`, `scname`, `smobilenu`, `fmobilenu`, `studenttype`, `feenu`, `feetype`, `adate`, `idphoto`) VALUES 
                                ( '$data[0]', '$data[1]', '$data[2]', '$data[13]', '$data[14]', '$rab', '$data[10]', '$data[5]', '$data[4]', '$data[3]','$data[6]', '$data[9]','$data[11]','$data[7]', '$data[8]', '$data[12]', '$data[15]', '$data[16]', '$date', '$data[18]');";

    $re=mysqli_query($conn,$q);

    if($re){
        echo "true";
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