<?php
session_start();
    if(!$_SESSION['login']){
        header("location:login.php");
    }

    require("conn.php");
    $q="SELECT * FROM `iso_2122`";
    $re=mysqli_query($conn,$q);
    $ttc=mysqli_num_rows($re);

    $q="SELECT * FROM `iso_2122` where `feetype`='half'";
    $re=mysqli_query($conn,$q);
    $tl=mysqli_num_rows($re);

    $q="SELECT * FROM `cso_2122`";
    $re=mysqli_query($conn,$q);
    $tc=mysqli_num_rows($re);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="E:\NPB System\FONT_ASW\fontawesome-free-6.1.1-web\fontawesome-free-6.1.1-web\css\all.css">
    <link rel="stylesheet" href="boostrap\bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <script src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet"  href="fontaws\fontawesome-free-6.1.1-web\css\all.min.css">
    <style>
       .row{
           /* background: rgb(170, 198, 194); */
           box-shadow: 6px 11px 41px -28px #88d1d8;
                background-image: linear-gradient(305deg, #75ddd4, #3381df);
           padding-top: 54px;
           margin-top: -74px;
           border-radius: 20px;
       }
       h1{
           padding: 10px;
           margin-left: 15px;
           color: white;
       }
        *{
            margin: 0;
            padding: 0;
            color: aliceblue;
            box-sizing: border-box;
        }
        body{
          /*  background: url("image.jpg");*/
            background-size: cover;
            background-color: rgb(251, 251, 251);
            height: 100%;
            width:100%;
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

        }
        
#section{
    z-index: 2;
           #vbt{
               border-radius: 8px;
           }
        }
    </style>
 

</head>
<body >

<nav>
  
  
  <div class="logo">NPB System</div>
  <label for ="btn"class="icon">
      <span class="fa-solid fa-bars"></span>
   </label>
   <input class="in" type="checkbox"id="btn">   
  <ul>
    <li>
    <a href="home.php"><i class="fa-solid fa-house"></i>&nbsp &nbspHome</a></li>
    <li><a href="dashboard.php">
      <i class="fas fa-tachometer-alt"></i>&nbsp&nbspDashboard</a></li>
    <li><a href="rooms.php"><i class="fa-solid fa-person-booth"></i>&nbsp&nbspRooms</a></li>
    <li><a href="search.php"><i class="fa-solid fa-magnifying-glass"></i>&nbsp&nbspSearch</a></li>
    <li>
      <label for="btn-1"class="show"><i class="fa-solid fa-graduation-cap"></i>&nbsp&nbspStudents +</label>
      <a href="#"><i class="fa-regular fa-file-lines"></i>&nbsp&nbspAdmission</a>
      <input class="in" type="checkbox"id="btn-1">  
      <ul>
        <li><a href="rooms.php">


          <i class="fa-solid fa-circle-plus"></i>&nbsp&nbspNew Admission</a></li>
        <li><a href="stdedit.php"><i class="fa-solid fa-pen-to-square"></i>&nbsp&nbspEdit Details</a></li>
        <li><a href="displaynaughtything.php"><i class="fa-solid fa-eye"></i>&nbsp&nbspStudent View</a></li>
        <li><a href="roomchange.php"><i class="fa-solid fa-person-shelter"></i>&nbsp&nbspRoom change</a></li>
      </ul>
    </li>
    <li>
      <label for="btn-2"class="show">Others +</label>
      <a href="#"><i class="fa-solid fa-arrow-down"></i>&nbsp&nbspOthers</a>
      <input class="in" type="checkbox"id="btn-2">  
      <ul>
          <li><a href="missbehaviour.php"><i class="fa-solid fa-indian-rupee-sign"></i>&nbsp&nbspPenalty</a></li>
          <li><a href="missbehaviourdeposite.php"><i class="fa-solid fa-address-card"></i>&nbsp&nbspPenalty Record</a></li>
          <li><a href="prayer.php"><i class="fa-solid fa-person-praying"></i>&nbsp&nbspPrayer</a></li>
          <li><a href="prayerdisplay.php"><i class="fa-regular fa-clipboard"></i>&nbsp&nbspPrayer record</a></li>
        </ul>   
   </li>
  </ul>
  </nav>


         <div class="container mt-5 ml-5 bg-muted">
             <h1>Dashboard</h1>
                <div class="row">
                    <div class="col-lg-3 m-4">
                         <div class="card text-white bg-info "  style="width: 18rem;">
                            <div class="card-body" class="card1">
                              <h5 class="card-title text-black">TOTAL LIVING STUDENTS <p class="text-black">of current year</p></h5>
                              <h3 class="card-text text-black">&nbsp<?php echo $ttc; ?></h3>
                              <a href="#" class="btn btn-primary mt-3 rounded" id="vbt">View More</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-3 m-4">
                    <div class="card text-white bg-warning " style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title text-black">LOAN TAKE STUDENTS <p class="text-black">of current year</p></h5>
                          <h3 class="card-text text-black">&nbsp<?php echo $tl; ?></h3>
                          <a href="#" class="btn btn-primary mt-3 ">View More</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 m-4">
                        <div class="card text-white bg-success" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title text-black">TOTAL STUDENTS <p class="text-black">of Last year</p></h5>
                              <h3 class="card-text text-black">write data here</h3>
                              <a href="#" class="btn btn-primary mt-3">View More</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-3 m-4">
                            <div class="card text-white bg-danger" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title text-black">ADMISSION CANCEL STUDENTS <p class="text-black">of current year</p></h5>
                                  <h3 class="card-text text-black">&nbsp<?php echo $tc; ?></h3>
                                  <a href="#" class="btn btn-primary mt-3">View More</a>
                                </div>
                              </div>
                            </div>
               </div>
           </div>
          
</body>
</html>