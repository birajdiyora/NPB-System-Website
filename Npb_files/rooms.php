<?php
    session_start();
    if(!$_SESSION['login']){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boostrap\bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <script src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet"  href="fontaws\fontawesome-free-6.1.1-web\css\all.min.css">
    <style>
        .card{
            background-color: rgb(128, 213, 194);
        }

    i{
        color:red;
    }
       
        *{
            margin: 0;
            padding: 0;
           
           
        }
       
        nav{
             background-color: rgb(37, 72, 69); 
                        opacity: 0.9;
                        z-index: 1;
                        position: relative;
        }
        nav:after{
            content:'';
            clear: both;
            display: table;
        }
        nav ul{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            float:right;
            list-style: none;
            margin-right: 120px;
            position: relative;
            margin-bottom: 1px;
        }
        nav ul li{
           float: left;
            display: inline-block;
             background: rgb(37, 72, 69); 
            
            margin: 0 5px;
        }
        nav ul li a{
            color: white;
            text-decoration: none;
            line-height: 70px;
            font-size: 18px;
            padding: 8px 15px;
        }
        nav ul ul{
            position: absolute;
            top: 200px;
            opacity: 0;
            visibility: hidden;
            transition: top.3s;
            border-top: 5px solid cyan;
        }
        nav ul ul li{
            position: relative;
            margin: 0px;
            width: 200px;
            float: none;
            display: list-item;
            border-bottom: 1px solid rgba(0, 0, 0, 0.3);
        }
        nav ul ul ul li{
            position: relative;
            top: -70px;
            left: 150px;
        }
        nav ul li a:hover{
            color: cyan;
            box-shadow: 0 0 5px #33ffff,
                        0 0 5px #66ffff;
        }
        nav ul li:hover > ul{
            opacity: 1;
            visibility: visible;
            top: 70px;
        }
        nav ul ul ul li a{
            line-height: 50px;
        }
        nav ul ul li a:hover{
            color: cyan;
            box-shadow: none;
        }
        .logo{
            float: left;
            color: aliceblue;
            font-size: 40px;
            font-weight: 600;
            line-height: 70px;
            padding-left: 60px;
            margin-top: 0px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .show,.icon,.in{
            display: none;
        }
        #btn{
          margin-left: 10%;
          margin-bottom: 50px;
          margin-top: -30px;
        }
        
        @media all and (max-width:968px){
            nav ul{
                margin-right: 0px;
                float: left;
               
            }
            body{
                background-repeat: no-repeat;
                height: 100%;
            }
            nav .logo{
                padding-left: 30px;
                width: 80%;
            }
            nav ul li,nav ul ul li{
                display: block;
                width: 100%;
            }
            nav ul ul{
                top: 100px;
                position: static;
                border-top: none;
                float: none;
                display: none;
                opacity: 1;
                visibility: visible;
            }
            nav ul ul a{
                padding-left: 100px;
            }
            .show{
                display: block;
                color: white;
                font-size: 18px;
                cursor: pointer;
                line-height: 70px;
                padding: 0 20px;
            }
            .show:hover{
                color: cyan;
            }
            .icon{
                display: block;
                color: white;
                position: absolute;
                right: 40px;
                line-height: 70px;
                font-size: 25px;
                cursor: pointer;
            }
            nav ul li a:hover{
                box-shadow: none;
            }
            .show+a,ul{
                display: none;
            }
            [id^=btn]:checked + ul{
                display: block;
            }
            .card1{
                border-radius: 15px;
            }
           ul{
               margin-top: 6px;
           }
           .h-custom {
height: 100vh !important;
}
         #vbt{
               border-radius: 8px;
           }
           #rs{
                width:40%;
           }
        }
        #rs{
            margin-top: -13px;
            margin-left: 14px;
            padding-left: 5px;
            margin-bottom: 46px;
            background-color: rgb(128, 213, 194);
            padding: 15px;
            }
            #rsl{
            font-size:22px;
            }
            #rst{
                height: 35px;
            width: 117px;
            border:1px solid black;
            border-radius:12px;
            padding-left:12px;
            }
    #ni{
        color:white;
    }
    

        
        #section{
            z-index: 2;
        }
          
    </style>


</head>
<body>

   <!-- <nav>
  
  
    <div class="logo">NPB System</div>
    <label for ="btn"class="icon">
        <span class="fa-solid fa-bars"></span>
     </label>
     <input type="checkbox"id="btn" class="in">   
    <ul>
      <li>
      <a href="#"><i class="fa-solid fa-house" id="ni"></i>&nbsp &nbspHome</a></li>
      <li><a href="#">
        <i class="fas fa-tachometer-alt" id="ni"></i>&nbsp&nbspDashboard</a></li>
      <li><a href="#"><i class="fa-solid fa-person-booth" id="ni"></i>&nbsp&nbspRooms</a></li>
      <li><a href="#"><i class="fa-solid fa-magnifying-glass" id="ni"></i>&nbsp&nbspSearch</a></li>
      <li>
        <label for="btn-1"class="show"><i class="fa-solid fa-graduation-cap" id="ni"></i>&nbsp&nbspStudents +</label>
        <a href="#"><i class="fa-regular fa-file-lines" id="ni"></i>&nbsp&nbspAdmission</a>
        <input type="checkbox"id="btn-1" class="in">  
        <ul id="drp1">
          <li><a href="#">
 
 
            <i class="fa-solid fa-circle-plus" id="ni"></i>&nbsp&nbspNew Admission</a></li>
          <li><a href="#"><i class="fa-solid fa-pen-to-square" id="ni"></i>&nbsp&nbspEdit Details</a></li>
          <li><a href="#"><i class="fa-solid fa-eye" id="ni"></i>&nbsp&nbspStudent View</a></li>
          <li><a href="roomchange.php"><i class="fa-solid fa-person-shelter"></i>&nbsp&nbspRoom change</a></li>
        </ul>
      </li>
      <li>
        <label for="btn-2"class="show" id="ni">Others +</label>
        <a href="#"><i class="fa-solid fa-arrow-down" id="ni"></i>&nbsp&nbspOthers</a>
        <input type="checkbox"id="btn-2" class="in">  
        <ul>
            <li><a href="#"><i class="fa-regular fa-file-word" id="ni"></i>&nbsp&nbspReport</a></li>
            <li><a href="#"><i class="fa-solid fa-address-card" id="ni"></i>&nbsp&nbspI-Card</a></li>
            <li><a href="#"><i class="fa-solid fa-indian-rupee-sign" id="ni"></i>&nbsp&nbspPanalty</a></li>
            <li><a href="#"><i class="fa-regular fa-clipboard" id="ni"></i>&nbsp&nbspPrayer record</a></li>
          </ul>   
     </li>
    </ul>
    </nav>

    -->

    <nav>
  
  
  <div class="logo">NPB System</div>
  <label for ="btn"class="icon">
      <span class="fa-solid fa-bars"></span>
   </label>
   <input class="in" type="checkbox"id="btn">   
  <ul>
    <li>
    <a href="home.php"><i class="fa-solid fa-house" id="ni"></i>&nbsp &nbspHome</a></li>
    <li><a href="dashboard.php">
      <i class="fas fa-tachometer-alt" id="ni"></i>&nbsp&nbspDashboard</a></li>
    <li><a href="rooms.php"><i class="fa-solid fa-person-booth" id="ni"></i>&nbsp&nbspRooms</a></li>
    <li><a href="search.php"><i class="fa-solid fa-magnifying-glass" id="ni"></i>&nbsp&nbspSearch</a></li>
    <li>
      <label for="btn-1"class="show"><i class="fa-solid fa-graduation-cap" id="ni"></i>&nbsp&nbspStudents +</label>
      <a href="#"><i class="fa-regular fa-file-lines" id="ni"></i>&nbsp&nbspAdmission</a>
      <input class="in" type="checkbox"id="btn-1">  
      <ul>
        <li><a href="rooms.php">


          <i class="fa-solid fa-circle-plus" id="ni"></i>&nbsp&nbspNew Admission</a></li>
        <li><a href="stdedit.php"><i class="fa-solid fa-pen-to-square" id="ni"></i>&nbsp&nbspEdit Details</a></li>
        <li><a href="displaynaughtything.php"><i class="fa-solid fa-eye" id="ni"></i>&nbsp&nbspStudent View</a></li>
        <li><a href="roomchange.php"><i class="fa-solid fa-person-shelter" id="ni"></i>&nbsp&nbspRoom change</a></li>
      </ul>
    </li>
    <li>
      <label for="btn-2"class="show">Others +</label>
      <a href="#"><i class="fa-solid fa-arrow-down" id="ni"></i>&nbsp&nbspOthers</a>
      <input class="in" type="checkbox"id="btn-2">  
      <ul>
          <li><a href="missbehaviour.php"><i class="fa-solid fa-indian-rupee-sign" id="ni"></i>&nbsp&nbspPenalty</a></li>
          <li><a href="missbehaviourdeposite.php"><i class="fa-solid fa-address-card" id="ni"></i>&nbsp&nbspPenalty Record</a></li>
          <li><a href="prayer.php"><i class="fa-solid fa-person-praying" id="ni"></i>&nbsp&nbspPrayer</a></li>
          <li><a href="prayerdisplay.php"><i class="fa-regular fa-clipboard" id="ni"></i>&nbsp&nbspPrayer record</a></li>
        </ul>   
   </li>
  </ul>
  </nav>
               

    <div class="container mt-5">
    <div class="row">
    <div class="col-lg-3" id="rs">
                <label id="rsl"> Room Search</label> &nbsp
                <input type="text" id="rst" name="fname"placeholder="Search">
            </div>
         
    </div>
    
        <div class="row">
            <div class="col-lg-3" id="104">
                <div class="card">
                    <div class="card-header">
                        <h4>104</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="104-a"></i></div>
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="104-b"></i></div>
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="104-c"></i></div>
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="104-d"></i></div>
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="104-e"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3" id="105">
                <div class="card">
                    <div class="card-header">
                        <h4>105</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="105-a"></i></div>
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="105-b"></i></div>
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="105-c"></i></div>
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="105-d"></i></div>
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="105-e"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3" id="106">
                <div class="card">
                    <div class="card-header">
                        <h4>106</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="106-a"></i></div>
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="106-b"></i></div>
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="106-c"></i></div>
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="106-d"></i></div>
                            <div class="col-lg-2 fa-2x"><i class="fa-solid fa-bed"id="106-e"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
            
            </div>

            <div class="col-lg-3 mt-5" id="107">
                <div class="card" >
                    <div class="card-header">
                        <h4>107</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><i class="fa-solid fa-bed"id="107-a"></i></div>
                            <div class="col fa-2x"><i class="fa-solid fa-bed"id="107-b"></i></div>
                            <div class="col fa-2x"><i class="fa-solid fa-bed"id="107-c"></i></div>
                            
                        </div>
                    </div>
                </div>
            </div>


            <?php
    for($i=201;$i<=228;$i++){
        echo '
        <div class="col-lg-3 pt-5" id="'.$i.'">
        <div class="card">
            <div class="card-header">
                <h4>'.$i.'</h4>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col fa-2x"><i class="fa-solid fa-bed"id="'.$i.'-a"></i></div>
                    <div class="col fa-2x"><i class="fa-solid fa-bed"id="'.$i.'-b"></i></div>
                    <div class="col fa-2x"><i class="fa-solid fa-bed"id="'.$i.'-c"></i></div>
                </div>
            </div>
        </div>
    </div>
        
        ';
    }

    for($a=301;$a<=328;$a++){
        echo '
        <div class="col-lg-3 pt-5" id="'.$a.'">
        <div class="card">
            <div class="card-header">
                <h4>'.$a.'</h4>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col fa-2x"><i class="fa-solid fa-bed"id="'.$a.'-a"></i></div>
                    <div class="col fa-2x"><i class="fa-solid fa-bed"id="'.$a.'-b"></i></div>
                    <div class="col fa-2x"><i class="fa-solid fa-bed"id="'.$a.'-c"></i></div>
                </div>
            </div>
        </div>
    </div>
        
        ';
    }

        for($i=401;$i<=428;$i++){
            echo '
            <div class="col-lg-3 pt-5" id="'.$i.'">
            <div class="card">
                <div class="card-header">
                    <h4>'.$i.'</h4>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col fa-2x"><i class="fa-solid fa-bed"id="'.$i.'-a"></i></div>
                        <div class="col fa-2x"><i class="fa-solid fa-bed"id="'.$i.'-b"></i></div>
                        <div class="col fa-2x"><i class="fa-solid fa-bed"id="'.$i.'-c"></i></div>
                    </div>
                </div>
            </div>
        </div>
            
            ';
        }

        for($i=501;$i<=520;$i++){
            echo '
            <div class="col-lg-3 pt-5" id="'.$i.'">
            <div class="card">
                <div class="card-header">
                    <h4>'.$i.'</h4>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col fa-2x"><i class="fa-solid fa-bed"id="'.$i.'-a"></i></div>
                        <div class="col fa-2x"><i class="fa-solid fa-bed"id="'.$i.'-b"></i></div>
                        <div class="col fa-2x"><i class="fa-solid fa-bed"id="'.$i.'-c"></i></div>
                    </div>
                </div>
            </div>
        </div>
            
            ';
        }
    

?>


        </div>
    </div>

    <script src="BOOTSTRAP/js/bootstrap.min.js"></script>
</body>
</html>
<?php

        require("conn.php");
        $q="SELECT * FROM `iso_2122`";
        $re=mysqli_query($conn,$q);

        $arr=[];
        while($row=mysqli_fetch_array($re)){
            $arr[]=$row[6];
        }

        foreach($arr as $v){
            echo '
        
            <script>
        function badco(){
            try{

                $("#'.$v.'").css("color","blue");
                $("#'.$v.'").attr("disabled", "true");

                $("#'.$v.'").css({
                    "cursor": "wait",
                    "pointer-events": "none"
                });
          

                }catch(e){

                
                }

            }

         badco();
               
            </script>
       ';
        }
       
?>
<script>
     // badco();

$("#rst").focus();

    $(document).ready(function(){
      
        var v="";
        //var num = new RegExp("[0-9]+");
        $("#rst").on("keyup",function(){
             v=$(this).val();

            

            $(".pt-5").css("display","none");
            $(".col-lg-3").css("display","none");
            $("#rs").css("display","");
        
           

            try{

                $($(`#${v}`)).css("display","");

                }catch(e){

                
                }

            if(v.length<=0){
               
            $(".pt-5").css("display","block");
            $(".col-lg-3").css("display","block");
            }

            
        });

        $(".fa-bed").on("click",function(){
          
            var rab=$(this).attr("id");
            console.log(rab);
            location.href = 'admissionform.php?rab='+rab;
            


        });        


        
    });
</script>