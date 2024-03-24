<?php
    require("conn.php");
    if(isset($_POST['a']) && isset($_POST['v'])){
       $v=$_POST['v'];
        $q="SELECT * FROM `iso_2122` where `feenu`='$v'";
        $re=mysqli_query($conn,$q);
    if(mysqli_num_rows($re)>0){

        while($row=mysqli_fetch_array($re)){
            $sename=$row['sername'];
            $sname=$row['studentname'];
            $fname=$row['fathername'];
            $rab=$row['rab'];
        }
        $name=$sename." ".$sname." ".$fname." ".$rab;
        echo $name;
    }
    else{
        echo 'not av';
    }

    
}

if(isset($_POST['u']) && isset($_POST['v'])){
   $v=$_POST['v'];
    
    $q="SELECT * FROM `iso_2122` where `rab`='$v'";
    $re=mysqli_query($conn,$q);

    if(mysqli_num_rows($re)==1){
        echo 'not available';
    }
    else{
        echo 'available';
    }
}

if(isset($_POST['nu']) && isset($_POST['bad']) && isset($_POST['a'])){
    $nu=$_POST['nu'];
    $bad=$_POST['bad'];

    $rab=$nu."-".$bad;

    $q="SELECT * FROM `iso_2122` where `rab`='$rab'";
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

    $q="SELECT * FROM `iso_2122` where `rab`='$rab'";
    $re=mysqli_query($conn,$q);

    $nu=mysqli_num_rows($re);

    if($nu<=0){
        echo "yes";
    }
    else{
        echo "no";
    }
}

if(isset($_POST['fsf']) && isset($_POST['roomnu']) && isset($_POST['badv']) && isset($_POST['t'])){
   
    $fsf=$_POST['fsf'];
    $roomnu=$_POST['roomnu'];
    $bad=$_POST['badv'];
    $rab=$roomnu."-".$bad;

    $q="UPDATE `iso_2122` SET `roomnu` = '$roomnu', `bad` = '$bad', `rab` = '$rab' WHERE `feenu` = '$fsf'";
    $re=mysqli_query($conn,$q);

    if($re){
        echo "true";
    }
    else{
        echo "false";
    }
}

if(isset($_POST['ssf']) && isset($_POST['tsf']) && isset($_POST['r'])){
    $ssf=$_POST['ssf'];
    $tsf=$_POST['tsf'];

    $q="SELECT * FROM `iso_2122` where `feenu`='$ssf'";
    $re1=mysqli_query($conn,$q);

    if(mysqli_num_rows($re1)==1){
       
        while($row=mysqli_fetch_array($re1)){
           echo $roomnu=$row['roomnu'];
           echo "<br>";
            echo $bad=$row['bad'];
            echo "<br>";
            echo $rab=$row['rab'];
            echo "<br>";
           

            // $q="UPDATE `iso_2122` SET `roomnu` = NULL, `bad` = NULL, `rab` = '518-d' WHERE `feenu` = '$tsf'";
            // $re=mysqli_query($conn,$q);

            $q="UPDATE `iso_2122` SET `roomnu` = '$roomnu', `bad` = '$bad', `rab` = '$rab' WHERE `feenu` = '$tsf'";
            $re2=mysqli_query($conn,$q);
          
        }
       
    }

    
    $q="SELECT * FROM `iso_2122` where `feenu`='$tsf'";
    $re3=mysqli_query($conn,$q);

    $array2=array();
    if(mysqli_num_rows($re3)==1){
      
        while($row=mysqli_fetch_array($re3)){
            echo $array2[0]=$row['roomnu'];
            echo "<br>";
            echo $array2[1]=$row['bad'];
            echo "<br>";
            echo $array2[2]=$row['rab'];
            echo "<br>";
            $q="UPDATE `iso_2122` SET `roomnu` = '$array2[0]', `bad` = '$array2[1]', `rab` = '$array2[2]' WHERE `feenu` = '$ssf'";
            $re4=mysqli_query($conn,$q);
            
        }
    }

    if($re4 || $re2){
        echo 'true';
    }
    else{
        echo "false";
        echo mysqli_error($conn);
    }

   

  
}
?>