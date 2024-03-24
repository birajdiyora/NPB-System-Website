<?php

error_reporting(0);
session_start();
    require("conn.php");
    if(isset($_POST['uname']) && isset($_POST['pwd']) && isset($_POST['a'])){
         $uname=$_POST['uname'];
         $pwd=$_POST['pwd'];

    //   echo   $hpwd=password_hash($pwd, PASSWORD_DEFAULT);
    //   echo '<br>';

        $q="SELECT * FROM `gdo` where `gdot`='$uname'";
        $re=mysqli_query($conn,$q);

        $num=mysqli_num_rows($re);

        if($num>0){
            
            while($row=mysqli_fetch_array($re)){
                if(password_verify($pwd, $row['gdol'])){
                    echo "true";   
                    $_SESSION['login']= true; 
                    //session_destroy();
                }
                else{
                    echo "false";
                }
            }
            
            
        }
        else{
            echo "false";
        }


    }


    if(isset($_POST['olduname']) && isset($_POST['oldpwd']) && isset($_POST['newpwd']) && isset($_POST['b'])){
         $olduname=$_POST['olduname'];
         $oldpwd=$_POST['oldpwd'];
         $newpwd=$_POST['newpwd'];
        $hnpwd=password_hash($newpwd, PASSWORD_DEFAULT);

        $q="SELECT * FROM `gdo` where `gdot`='$olduname'";
        $re=mysqli_query($conn,$q);

        $num=mysqli_num_rows($re);

        if($num==1){
            while($row=mysqli_fetch_array($re)){
                if(password_verify($oldpwd, $row['gdol'])){
                    $q="UPDATE `gdo` SET `gdol` = '$hnpwd' WHERE `gdo`.`gdot` = '$olduname'";
                    $re=mysqli_query($conn,$q);

                    if($re){
                        echo "true";
                    }
                    else{
                        echo "false";
                    }
                }
                else{
                    echo "false";
                }
            }
            
            
        }
        else{
            echo "false";
        }

    }
?>