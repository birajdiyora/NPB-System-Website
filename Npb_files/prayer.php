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
    <script src="moment.js"></script>
    <link rel="stylesheet"  href="fontaws\fontawesome-free-6.1.1-web\css\all.min.css">

    <style>
        .card{
            background-color: rgb(128, 213, 194);
        }

        input[type="checkbox"]{
            height:20px;
            width:26px;
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
           #dte{
               width:50px;
               position:absolute;
           }
        }
        #section{
    z-index: 2;
}
        #rs{
            margin-top: 31px;
            margin-left: 14px;
           /* padding-right:-20px; */
           padding-left:5px;
         
           margin-bottom:10px;
            background-color: rgb(128, 213, 194);
            padding:15px;
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
            #dte{
                padding-left:11px;
                width:127%;
                margin-left:66px;
            }
    </style>
</head>
<body>

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

               



    <div class="container mt-5">
        <div class="row">
        <div class="col-lg-3" id="rs">
                <label id="rsl"> Roomd Search</label> &nbsp
                <input type="text" id="rst" name="fname"placeholder="Search">
            </div>
            
    
    <div class="col-lg-7">
    
     </div>
     <?php
        date_default_timezone_set('Asia/Kolkata');
        $date= date('d-m-Y');

        require("conn.php");
        $q="SELECT * FROM `rco_2122` where `date`='$date'";
        $re=mysqli_query($conn,$q);
        
        if(mysqli_num_rows($re)>0){
            while($row=mysqli_fetch_array($re)){
                $rab=$row['rab'];
                echo'
                    <script>
                        $(document).ready(function(){
                            $("#'.$rab.'").prop("checked",true);
                        });
                    </script>
                ';
            }
        }
        
      
     ?>
    <div class="col-lg-1 mt-5">
          <input type="text" value="<?php echo $date; ?>" id="dte" disabled> 
    </div>
        </div>
        <div class="row">
            <div class="col-lg-3 mt-5" id="104">
                <div class="card">
                    <div class="card-header">
                        <h4>104</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"name="104"id="104-a">A</div>
                            <div class="col fa-2x"><input type="checkbox"name="104"id="104-b">B</div>
                            <div class="col fa-2x"><input type="checkbox"name="104"id="104-c">C</div>
                            <div class="col fa-2x"><input type="checkbox"name="104"id="104-d">D</div>
                            <div class="col fa-2x"><input type="checkbox"name="104"id="104-e">E</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="105">
                <div class="card">
                    <div class="card-header">
                        <h4>105</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="105-a">A</div>
                            <div class="col fa-2x"><input type="checkbox"id="105-b">B</div>
                            <div class="col fa-2x"><input type="checkbox"id="105-c">C</div>
                            <div class="col fa-2x"><input type="checkbox"id="105-d">D</div>
                            <div class="col fa-2x"><input type="checkbox"id="105-e">E</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="106">
                <div class="card">
                    <div class="card-header">
                        <h4>106</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"name="106"id="106-a">A</div>
                            <div class="col fa-2x"><input type="checkbox"name="106"id="106-b">B</div>
                            <div class="col fa-2x"><input type="checkbox"name="106"id="106-c">C</div>
                            <div class="col fa-2x"><input type="checkbox"name="106"id="106-d">D</div>
                            <div class="col fa-2x"><input type="checkbox"name="106"id="106-e">E</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt" >
               
            </div>
            <div class="col-lg-3 mt-5"id="107">
                <div class="card">
                    <div class="card-header">
                        <h4>107</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"name="107"id="107-a">A</div>
                            <div class="col fa-2x"><input type="checkbox"name="107"id="107-b">B</div>
                            <div class="col fa-2x"><input type="checkbox"name="107"id="107-c">C</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="201">
                <div class="card">
                    <div class="card-header">
                        <h4>201</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="201-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="201-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="201-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="202">
                <div class="card"> 
                    <div class="card-header">
                        <h4>202</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="202-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="202-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="202-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="203">
                <div class="card"> 
                    <div class="card-header">
                        <h4>203</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="203-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="203-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="203-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="204">
                <div class="card"> 
                    <div class="card-header">
                        <h4>204</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="204-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="204-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="204-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="205">
                <div class="card"> 
                    <div class="card-header">
                        <h4>205</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="205-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="205-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="205-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="206">
                <div class="card"> 
                    <div class="card-header">
                        <h4>206</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="206-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="206-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="206-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="207">
                <div class="card"> 
                    <div class="card-header">
                        <h4>207</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="207-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="207-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="207-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5"id="208">
                <div class="card"> 
                    <div class="card-header">
                        <h4>208</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="208-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="208-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="208-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="209">
                <div class="card"> 
                    <div class="card-header">
                        <h4>209</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="209-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="209-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="209-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="210">
                <div class="card"> 
                    <div class="card-header">
                        <h4>210</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="210-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="210-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="210-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="211">
                <div class="card"> 
                    <div class="card-header">
                        <h4>211</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="211-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="211-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="211-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="212">
                <div class="card"> 
                    <div class="card-header">
                        <h4>212</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="212-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="212-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="212-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="213">
                <div class="card"> 
                    <div class="card-header">
                        <h4>213</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="213-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="213-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="213-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="214">
                <div class="card"> 
                    <div class="card-header">
                        <h4>214</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="214-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="214-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="214-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="215">
                <div class="card"> 
                    <div class="card-header">
                        <h4>215</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="215-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="215-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="215-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="216">
                <div class="card"> 
                    <div class="card-header">
                        <h4>216</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="216-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="216-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="216-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="217">
                <div class="card"> 
                    <div class="card-header">
                        <h4>217</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="217-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="217-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="217-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="218">
                <div class="card"> 
                    <div class="card-header">
                        <h4>218</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="218-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="218-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="218-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="219">
                <div class="card"> 
                    <div class="card-header">
                        <h4>219</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="219-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="219-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="219-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="220">
                <div class="card"> 
                    <div class="card-header">
                        <h4>220</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="220-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="220-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="220-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="221">
                <div class="card"> 
                    <div class="card-header">
                        <h4>221</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="221-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="221-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="221-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="222">
                <div class="card"> 
                    <div class="card-header">
                        <h4>222</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="222-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="222-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="222-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="223">
                <div class="card"> 
                    <div class="card-header">
                        <h4>223</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="223-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="223-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="223-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="224">
                <div class="card"> 
                    <div class="card-header">
                        <h4>224</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="224-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="224-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="224-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="225">
                <div class="card"> 
                    <div class="card-header">
                        <h4>225</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="225-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="225-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="225-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="226">
                <div class="card"> 
                    <div class="card-header">
                        <h4>226</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="226-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="226-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="226-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="227">
                <div class="card"> 
                    <div class="card-header">
                        <h4>227</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="227-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="227-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="227-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="228">
                <div class="card"> 
                    <div class="card-header">
                        <h4>228</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="228-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="228-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="228-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-lg-3 mt-5" id="301">
                <div class="card">
                    <div class="card-header">
                        <h4>301</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"name="301"id="301-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"name="301"id="301-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"name="301"id="301-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="302">
                <div class="card"> 
                    <div class="card-header">
                        <h4>302</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"name="302"id="302-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"name="302"id="302-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"name="302"id="302-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="303">
                <div class="card"> 
                    <div class="card-header">
                        <h4>303</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"name="302"id="303-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"name="302"id="303-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"name="302"id="303-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="304">
                <div class="card"> 
                    <div class="card-header">
                        <h4>304</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="304-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="304-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="304-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="305">
                <div class="card"> 
                    <div class="card-header">
                        <h4>305</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="305-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="305-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="305-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="306">
                <div class="card"> 
                    <div class="card-header">
                        <h4>306</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="306-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="306-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="306-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="307">
                <div class="card"> 
                    <div class="card-header">
                        <h4>307</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="307-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="307-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="307-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="308">
                <div class="card"> 
                    <div class="card-header">
                        <h4>308</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="308-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="308-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="308-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="309">
                <div class="card"> 
                    <div class="card-header">
                        <h4>309</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="309-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="309-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="309-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="310">
                <div class="card"> 
                    <div class="card-header">
                        <h4>310</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="310-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="310-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="310-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="311">
                <div class="card"> 
                    <div class="card-header">
                        <h4>311</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="311-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="311-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="311-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="312">
                <div class="card"> 
                    <div class="card-header">
                        <h4>312</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="312-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="312-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="312-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="313">
                <div class="card"> 
                    <div class="card-header">
                        <h4>313</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="313-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="313-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="313-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="314">
                <div class="card"> 
                    <div class="card-header">
                        <h4>314</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="314-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="314-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="314-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="315">
                <div class="card"> 
                    <div class="card-header">
                        <h4>315</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="315-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="315-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="315-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="316">
                <div class="card"> 
                    <div class="card-header">
                        <h4>316</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="316-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="316-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="316-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="317">
                <div class="card"> 
                    <div class="card-header">
                        <h4>317</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="317-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="317-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="317-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="318">
                <div class="card"> 
                    <div class="card-header">
                        <h4>318</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="318-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="318-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="318-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="319">
                <div class="card"> 
                    <div class="card-header">
                        <h4>319</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="319-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="319-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="319-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="320">
                <div class="card"> 
                    <div class="card-header">
                        <h4>320</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="320-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="320-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="320-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="321">
                <div class="card"> 
                    <div class="card-header">
                        <h4>321</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="321-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="321-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="321-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="322">
                <div class="card"> 
                    <div class="card-header">
                        <h4>322</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="322-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="322-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="322-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="323">
                <div class="card"> 
                    <div class="card-header">
                        <h4>323</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="323-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="323-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="323-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="324">
                <div class="card"> 
                    <div class="card-header">
                        <h4>324</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="324-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="324-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="324-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="325">
                <div class="card"> 
                    <div class="card-header">
                        <h4>325</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="325-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="325-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="325-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="326">
                <div class="card"> 
                    <div class="card-header">
                        <h4>326</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="326-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="326-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="326-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="327">
                <div class="card"> 
                    <div class="card-header">
                        <h4>327</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="327-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="327-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="327-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="328">
                <div class="card"> 
                    <div class="card-header">
                        <h4>328</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="328-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="328-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="328-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 mt-5" id="401">
                <div class="card">
                    <div class="card-header">
                        <h4>401</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"name="401"id="401-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"name="401"id="401-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"name="401"id="401-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="402">
                <div class="card"> 
                    <div class="card-header">
                        <h4>402</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"name="402"id="402-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"name="402"id="402-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"name="402"id="402-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="403">
                <div class="card"> 
                    <div class="card-header">
                        <h4>403</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"name="302"id="403-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"name="302"id="403-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"name="302"id="403-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="404">
                <div class="card"> 
                    <div class="card-header">
                        <h4>404</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="404-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="404-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="404-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="405">
                <div class="card"> 
                    <div class="card-header">
                        <h4>405</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="405-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="405-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="405-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="406">
                <div class="card"> 
                    <div class="card-header">
                        <h4>406</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="406-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="406-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="406-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="407">
                <div class="card"> 
                    <div class="card-header">
                        <h4>407</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="407-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="407-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="407-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="408">
                <div class="card"> 
                    <div class="card-header">
                        <h4>408</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="408-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="408-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="408-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="409">
                <div class="card"> 
                    <div class="card-header">
                        <h4>409</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="409-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="409-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="409-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="410">
                <div class="card"> 
                    <div class="card-header">
                        <h4>410</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="410-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="410-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="410-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="411">
                <div class="card"> 
                    <div class="card-header">
                        <h4>411</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="411-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="411-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="411-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="412">
                <div class="card"> 
                    <div class="card-header">
                        <h4>412</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="412-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="412-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="412-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="413">
                <div class="card"> 
                    <div class="card-header">
                        <h4>413</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="413-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="413-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="413-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="414">
                <div class="card"> 
                    <div class="card-header">
                        <h4>414</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="414-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="414-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="414-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="415">
                <div class="card"> 
                    <div class="card-header">
                        <h4>415</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="415-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="415-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="415-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="416">
                <div class="card"> 
                    <div class="card-header">
                        <h4>416</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="416-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="416-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="416-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="417">
                <div class="card"> 
                    <div class="card-header">
                        <h4>417</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="417-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="417-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="417-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="418">
                <div class="card"> 
                    <div class="card-header">
                        <h4>418</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="418-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="418-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="418-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="419">
                <div class="card"> 
                    <div class="card-header">
                        <h4>419</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="419-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="419-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="419-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="420">
                <div class="card"> 
                    <div class="card-header">
                        <h4>420</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="420-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="420-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="420-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="421">
                <div class="card"> 
                    <div class="card-header">
                        <h4>421</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="421-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="421-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="421-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="422">
                <div class="card"> 
                    <div class="card-header">
                        <h4>422</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="422-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="422-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="422-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="423">
                <div class="card"> 
                    <div class="card-header">
                        <h4>423</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="423-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="423-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="423-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="424">
                <div class="card"> 
                    <div class="card-header">
                        <h4>424</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="424-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="424-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="424-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="425">
                <div class="card"> 
                    <div class="card-header">
                        <h4>425</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="425-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="425-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="425-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="426">
                <div class="card"> 
                    <div class="card-header">
                        <h4>426</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="426-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="426-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="426-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="427">
                <div class="card"> 
                    <div class="card-header">
                        <h4>427</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="427-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="427-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="427-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="428">
                <div class="card"> 
                    <div class="card-header">
                        <h4>428</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="428-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="428-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="428-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 mt-5" id="501">
                <div class="card">
                    <div class="card-header">
                        <h4>501</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="501-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="501-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="501-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="502">
                <div class="card"> 
                    <div class="card-header">
                        <h4>502</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="502-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="502-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="502-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="503">
                <div class="card"> 
                    <div class="card-header">
                        <h4>503</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="503-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="503-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="503-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="504">
                <div class="card"> 
                    <div class="card-header">
                        <h4>504</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="504-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="504-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="504-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="505">
                <div class="card"> 
                    <div class="card-header">
                        <h4>505</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="505-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="505-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="505-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="506">
                <div class="card"> 
                    <div class="card-header">
                        <h4>506</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="506-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="506-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="506-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="507">
                <div class="card"> 
                    <div class="card-header">
                        <h4>507</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="507-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="507-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="507-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="508">
                <div class="card"> 
                    <div class="card-header">
                        <h4>508</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="508-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="508-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="508-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="509">
                <div class="card"> 
                    <div class="card-header">
                        <h4>509</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="509-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="509-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="509-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="510">
                <div class="card"> 
                    <div class="card-header">
                        <h4>510</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="510-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="510-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="510-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="511">
                <div class="card"> 
                    <div class="card-header">
                        <h4>511</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="511-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="511-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="511-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="512">
                <div class="card"> 
                    <div class="card-header">
                        <h4>512</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="512-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="512-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="512-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="513">
                <div class="card"> 
                    <div class="card-header">
                        <h4>513</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="513-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="513-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="513-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="514">
                <div class="card"> 
                    <div class="card-header">
                        <h4>514</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="514-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="514-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="514-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="515">
                <div class="card"> 
                    <div class="card-header">
                        <h4>515</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="515-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="515-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="515-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="516">
                <div class="card"> 
                    <div class="card-header">
                        <h4>516</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="516-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="516-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="516-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="517">
                <div class="card"> 
                    <div class="card-header">
                        <h4>517</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="517-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="517-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="517-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="518">
                <div class="card"> 
                    <div class="card-header">
                        <h4>518</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="518-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="518-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="518-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="519">
                <div class="card"> 
                    <div class="card-header">
                        <h4>519</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="519-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="519-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="519-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-5" id="520">
                <div class="card"> 
                    <div class="card-header">
                        <h4>520</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col fa-2x"><input type="checkbox"id="520-a">&nbspA</div>
                            <div class="col fa-2x"><input type="checkbox"id="520-b">&nbspB</div>
                            <div class="col fa-2x"><input type="checkbox"id="520-c">&nbspC</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $("#rst").focus();
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
       
        $("input[type='checkbox']").click(function() {
            var time = moment().format("h:mm:ss A");
            var date=$("#dte").val();
            if ($(this).is(':checked')) {
               
                var id=$(this).attr("id");
                
                
                $.ajax({
                    url:'prayer2.php',
                    type:'post',
                    data:{id:id,date:date,time:time,a:1},
                    success:function(data){
                        console.log(data);
                        if(data=="false2"){
                            $("#"+id).prop("checked",false)
                        }
                    }
                });
            }
            else{
                var id=$(this).attr("id");
                 
                $.ajax({
                    url:'prayer2.php',
                    type:'post',
                    data:{id:id,b:1},
                    success:function(data){
                        console.log(data);
                    }
                });
            }
        });

      
    });
</script>