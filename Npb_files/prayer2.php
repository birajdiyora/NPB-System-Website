<?php
require("conn.php");

if(isset($_POST['a']) && isset($_POST['id']) && isset($_POST['date']) && $_POST['time']){
    $id=$_POST['id'];
   $date=$_POST['date'];
   $time=$_POST['time'];
    $q="SELECT * FROM `iso_2122` where `rab`='$id'";
    $re=mysqli_query($conn,$q);
    $nu=mysqli_num_rows($re);
    if($nu==1){
        while($row=mysqli_fetch_array($re)){
            $sid=$row['sid'];
            $feenu=$row['feenu'];
            $sename=$row['sername'];
            $sname=$row['studentname'];
            $fname=$row['fathername'];
            $rab=$row['rab'];
            
        }
    
        $q="INSERT INTO `rco_2122` (`sid`,`feenu`, `sername`, `studentname`, `fathername`, `rab`, `date`,`time`) VALUES ('$sid','$feenu', '$sename', '$sname', '$fname', '$rab', '$date','$time')";
        $re=mysqli_query($conn,$q);
        if($re){
            echo 'true';
        }
        else{
            echo 'false';
        }
    }
    else{
        echo "false2";
    }
}

if(isset($_POST['b']) && isset($_POST['id'])){
    $id=$_POST['id'];
    $q="DELETE FROM `rco_2122` WHERE `rab` = '$id'";
    $re=mysqli_query($conn,$q);
    if($re){
        echo 'true';
    }
    else{
        echo 'false';
    }
}

?>