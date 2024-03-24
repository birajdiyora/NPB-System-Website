<?php  
error_reporting(0);
session_start();
    if(!$_SESSION['login']){
        header("location:login.php");
    }
    if(isset($_GET['rab'])){
        $rab=$_GET['rab'];
         $rnu=substr($rab,0,3);
      
         $bad=substr($rab,4);
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
        *{
            margin: 0;
            padding: 0;
        }
        .row{
            margin: 20px;
            margin-top: 40px;
            border: 1px solid black;
            background-color:white;
            border-radius: 25px;
            padding: 10px;
            box-shadow:0 2px 7px 0 rgb(64, 63, 63);
            
        }
        .container{
           background-color: whitesmoke;
           border-radius: 15px;
           box-shadow:0 8px 20px 0 rgb(64, 63, 63);
         
        }
        label{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: bold;
        }
        h1{
            padding-top: 30px;
            padding-left: 40px;
        }
       
        input[type=text]{
            border-radius: 10px;
            border: 2px solid black;
            margin-top: 10px;
            background-color: rgb(171, 233, 230);
            height: 70%;
            padding-left: 10px;
            width:247px;
            size:fixed;
            padding-left: 14px;
        }
      
        input[type=radio]{
            margin: 10px;
           
            -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);
        }
        input[type=number]{
            border-radius: 5px;
            border: 2px solid black;
            margin-top: 10px;
            background-color: rgb(171, 233, 230);
            height: 70%;
            padding-left: 10px;
        }
        select{
            border-radius: 5px;
            border: 2px solid black;
            margin-top: 10px;
            background-color: rgb(171, 233, 230);
            height: 70%;
            padding-left: 10px;
            width:247px;
        }
        input[type=file]{
            border-radius: 5px;
            margin-top: 10px;
            background-color: rgb(135, 232, 205);
        }
        input[type=date]{
            border-radius: 5px;
            margin-top: 10px;
            background-color: rgb(171, 233, 230);
            height: 70%;
            padding-left: 10px;
        }
        ::placeholder{
            color: rgb(22, 21, 21);
            
        }
        .headerf{
                color:black;
            }
            label{
                font-size: 19px;
            }
            .fo{
                font-weight: bold;
                font-size: 16px;
            }
           
                        .file::-webkit-file-upload-button {
            visibility: hidden;
            }
            .file::before {
            content: 'Select Image';
            display: inline-block;
            background: linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid black;
            height:40px;
            border-radius: 7px;
            padding: 8px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            color:white;
            /* text-shadow: 1px 1px #fff; */
            /* font-weight: 700; */
            font-size: 10pt;
            }
            .file::before {
            border-color: black;
            }
            .file::before {
            background: black;
            }
            .inbtn{
                height: 30px;
                width: 50px;
            }
            #img{
            height:172px;
            width:199px;
            margin-left:-12px;
            
        }
            .btn-primary{
                margin-left: 30px;
                margin-top: 20px;
                padding-left: 20px;
                padding-right: 20px;
                padding-top: 8px;
                padding-bottom: 8px;
              
            }
            .btn-danger{
                margin-left: 30px;
                margin-top: 20px;
                padding-left: 20px;
                padding-right: 20px;
                padding-top: 8px;
                padding-bottom: 8px;
              

            }
            .btn-primary:hover{
                opacity:0.8;
            }
            .btn-danger:hover{
                opacity: 0.8;
            }
        /*menu*/


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


           label{
               font-size: 15px;
               position: absolute;
               margin-top: 10px;
           }
          #name{
               margin-bottom: 40px;
             }
         h3{
              margin-top: 10px;
              margin-bottom: 20px;
              color: black;
          }
          /* for address */
          .row2{
             margin: 20px;
              margin-top: 40px;
              border: 1px solid black;
              background-color:white;
                border-radius: 25px;
              padding: 5px;
              box-shadow:0 2px 7px 0 rgb(64, 63, 63);
              height:520px;
          }
          #add{
              margin-top: -10px;
                margin-left: -15px;
           }
         #con{
                margin-bottom: 40px;
          }
          #study{
              margin-bottom: 40px;
          }
          #room{
              margin-bottom: 40px;
          }
          #oth{
              margin-bottom: 40px;
          }
          .fo{
              margin-left: -5px;
          }
          #photo{
              margin-top: 40px;
              margin-left: -50px;
          }
          .img2{
              margin-left: -53px;
          }
          input[type=file]{
                width: 160%;
          }
         #insert{
             margin-left: 61px;
         }


     }
        .col{
            margin-bottom:15px;
        }
        .vm,.vm2,.vm3,.vm4,.vm5,.vm6,.vm7,.vm8,.vm9,.vm10,.vm11,.vm12,.vm13,.vm15,.vm14,.vm15,.vm16,.vm17,.vm18,.vm19{
            position:absolute;
            margin-top:-2px;
            color:red;
            font-style:italic;
            font-weight:bold;
        }
        #pincode{
            margin-top:8px;
            
        }
      
        #al1{
    
            color:green;
            font-weight:bold;
            font-style:italic;
           white-space:pre;
           position:absolute;
           margin-left:200px;
           margin-top:-81px;
           font-size:20px;
           display:none;
        }
        #al2{
    
            color:red;
            font-weight:bold;
            font-style:italic;
            white-space:pre;
            position:absolute;
            margin-left:200px;
            margin-top:-81px;
            font-size:20px;
            display:none;
            }
        
        
        #section{
            z-index: 2;
        }
        input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
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

        
    <div class="container mt-5 pb-5">
        <form enctype="multipart/form-data">
         
        <h1 class="headerf">Admission Form</h1>
        <div class="row p-4"id="name">
            <h3>Personal Info.</h3>
            <div class="col"id="name">
                <label>SERNAME</label><br>
                <input type="text"name="sename" id="sename" class="text" placeholder="Firstname">
                <div class="vm"></div>
            </div>
           
            <div class="col"id="name">
                <label>STUDENT NAME</label><br>
                <input type="text"name="sname" id="sname" class="text" placeholder="Studentname">
                <div class="vm2"></div>
            </div>
            <div class="col"id="name">
                <label>FATHER NAME</label><br>
                <input type="text"name="fname" id="fname" class="text" placeholder="Fathername"><br>
                <div class="vm3"></div>
            </div>
            
        </div>
        <div class="row p-4">
            <h3>Address Info.</h3>
            <div class="col-lg-3 p-4"id="add">
                <label>VILLAGE</label><br>
                <input type="text"name="village" id="village" placeholder="Student village">
                <div class="vm4"></div>
            </div>
            <div class="col-lg-3 p-4"id="add">
                <label>TALUKA</label><br>
                <input type="text"name="taluka" id="taluko" placeholder="Student subdistrict">
                <div class="vm5"></div>
            </div>
            <div class="col-lg-3 p-4" id="add">
                <label>CITY</label><br>
                <select id="city">
                    <option value="select">SELECT</option>
                    <option value="bhavnagar">bhavnagar</option>
                    <option value="surat">surat</option>
                    <option value="ahemdebad">ahemdebad</option>
                    <option value="botad">botad</option>
                    <option value="amreli">amreli</option>
                    <option value="rajkot">rajkot</option>
                    <option value="surendranagar">surendranagar</option>
                    <option value="jamnagar">jamnagar</option>
                    <option value="jungadh">jungadh</option>
                    <option value="porbandar">porbandar</option>
                    <option value="mahesana">mahesana</option>
                    <option value="vadodara">vadodara</option>
                    <option value="gandhinagar">gandhinagar</option>
                    <option value="anand">anand</option>
                    <option value="morbi">morbi</option>
                </select>
                <div class="vm19"></div>
            </div>
            <div class="col-lg-3 p-4"id="add">
                <label>PINCODE</label><br>
                <input type="number" id="pincode" name="pincode"placeholder="Pincode" >
                <div class="vm17"></div>
            </div>
        </div>
        <div class="row p-4">
            <h3>Contact By,</h3>
            <div class="col"id="con">
                <label>MOBILE NO.(STUD.)</label><br>
                <input type="number" maxlength="10" id="smo" placeholder="Sudent Mobile Number" name="stdmobileno">
                <div class="vm6"></div>
            </div>
            <div class="col"id="con">
                <label>MOBILE NO.(FATHER)</label><br>
                <input type="number" maxlength="10" id="fmo" placeholder="Father Mobile Number" name="fathermobileno">
                <div class="vm7"></div>
            </div>
        </div>
        <div class="row p-4">
            <h3>Study Info.</h3>
            <div class="col"id="study" >
                <label> STUDY IN</label><br>
                <select id="studyin">
                    <option value="select">SELECT</option>
                    <option value="school">SCHOOL</option>
                    <option value="college">COLLEGE</option>
                    <option value="sardardham">SARDARDHAM</option>
                </select>
                <div class="vm8"></div>
            </div>
            <div class="col"id="study">
                <label>COURSE/YEAR</label><br>
                <select id="course">
                    <option value="select">SELECT</option>
                    <option value="std 8">STD 8</option>
                    <option value="std 9">STD 9</option>
                    <option value="std 10">STD 10</option>
                    <option value="std 11(science)">STD 11(SCIENCE)</option>
                    <option value="std 11(commerece)">STD 11(COMMERCE)</option>
                    <option value="std 11(arts)">STD 11(ARTS)</option>
                    <option value="std 12(science)">STD 12(SCIENCE)</option>
                    <option value="std 12(commerce)">STD 12(COMMERCE)</option>
                    <option value="std 12(arts)">STD 12(ARTS)</option>
                    <option value="fy bca">FY BCA</option>
                    <option value="sy bca">SY BCA</option>
                    <option value="ty bca">TY BCA</option>
                    <option value="fy bscit">FY BSCIT</option>
                    <option value="sy bscit">SY BSCIT</option>
                    <option value="ty bscit">TY BSCIT</option>
                    <option value="fy bcom">FY BCOM</option>
                    <option value="sy bcom">SY BCOM</option>
                    <option value="ty bcom">TY BCOM</option>
                    <option value="ty bcom" id="sardardham">SARDARDHAM</option>
                 </select>
                <div class="vm9"></div>
            </div>
            <div class="col"id="study">
                <label>SCHOOL/COLLEGE/INSTITUTE</label><br>
                    <input type="text" id="scin" name="course" placeholder="School/college/institute name">
                    <div class="vm10"></div>
            </div>
        </div>
        <div class="row p-4">
            <h3>Room Info.</h3>
            <div class="col" id="room">
                <label>STUDENT TYPE</label><br>
                <font class="fo">OLD</font>&nbsp<input type="radio" class="stype" name="type1"value="old">
                <font class="fo">NEW</font>&nbsp<input type="radio" class="stype" name="type1"value="new">
                <div class="vm11"></div>
            </div>
            <div class="col"id="room">
                <label>ROOM NO.</label><br>
                <input type="number"id="roomnu" name="rommno" value="<?php echo $rnu; ?>">
                <div class="vm12"></div>
            </div>
            <div class="col"id="room">
                <label>BAD</label><br>
                <font class="fo">A</font><input type="radio" class="bad" name="bad1"value="a" <?php if($bad=="a"){echo "checked"; }?>>
                <font class="fo">B</font><input type="radio" class="bad" name="bad1"value="b" <?php if($bad=="b"){echo "checked"; }?>>
                <font class="fo">C</font><input type="radio" class="bad" name="bad1"value="c" <?php if($bad=="c"){echo "checked"; }?>>
                <font class="fo">D</font><input type="radio" class="bad" name="bad1"value="d" <?php if($bad=="d"){echo "checked"; }?>>
                <font class="fo">E</font><input type="radio" class="bad" name="bad1"value="e" <?php if($bad=="e"){echo "checked"; }?>>
                <div class="vm13"></div>
            </div>
        </div>
        <div class="row p-4">
            <h3>Other Info.</h3>
            <div class="col"id="oth">
                <label>FEE RECIEPT NO.</label><br>
                <input type="number" placeholder="Fee Receipt Number" id="feenu" class="fd" name="recieptno">
                <div class="vm14"></div>
            </div>
            <div class="col"id="oth">
               <label>FEE TYPE:</label><br>
                <font class="fo">Full fee</font><input type="radio" class="feetype" name="feetype"value="full"> &nbsp
                <font class="fo">Half fee(Loan)</font></label> <input type="radio" class="feetype" name="feetype"value="half">
                <div class="vm15"></div>
            </div>
            <div class="col"id="oth">
                <label>ADMISSION DATE</label><br>
                <input type="date"name="date" id="adate" class="fd">
                <div class="vm16"></div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-lg-10 p-5"id="i">
                <label class="img2">UPLOAD STUDENT PASSPORT SIZE IMAGE</label><br>
                <input type="file"name="photo" id="photo" class="file">
                <div class="vm18"></div>
            </div>
            <div class="col-lg-2 border border-dark">
                <image src="" id="img"></image>
            </div>
        </div>
       <div class="row3">
           <div class="col">
           <input type="hidden" id="hi">
        <button type="submit" id="insert" class="btn btn-primary mrl-5" >INSERT</button>
        <button type="clear"class="btn btn-danger  pr-10 btn-md" class="rebtn">RESET</button>
           </div>
           <div class="col">
           <div" id="al1" class="">
                  Data inserted successfuly
          </div>
          <div" id="al2" class="">
                  Data is not inserted successfuly 
          </div>
           </div>
       </div>
    </form>
    </div>
    
  
</body>
</html>


<script>


    $(document).ready(function(){
        $("#sename").focus();
        
 

        //--------------------validation-------------------------------------
            $("#feenu").on("keyup",function(){
               // console.log("hello");
                var v=$(this).val();
                if(v.length>3){
                    $(".vm14").html("maximum allow input 3 number");
                   // console.log("nooo");
                   $("#insert").prop("disabled",true);
                }
                else{
                    $(".vm14").html("");
                   
                   $("#insert").prop("disabled",false);
                }

                
                        if(v.length==3){
                            $.ajax({
                                url:'admissionform2.php',
                                type:'post',
                                data:{v:v},
                                success:function(data){
                                    console.log(data);
                                    if(data=="already"){
                                        $(".vm14").html("This is already in our record");
                                        $("#insert").prop("disabled",true);
                                        
                                    }
                                
                                }
                            });
                        }
                            
                         if(v.length<3){
                            $(".vm14").html("Please enter minimum 3");
                             $("#insert").prop("disabled",true);
                                        
                         }
                         if(v==""){
                            $(".vm14").html("This field is require");
                             $("#insert").prop("disabled",true);  
                         }
                
            });

            $("#pincode").on("keyup",function(){
                var v=$(this).val();
                if(v.length<6){
                    $(".vm17").html("minimum 6 number require");
                   // console.log("nooo");
                   $("#insert").prop("disabled",true);
                }
                else{
                    $(".vm17").html("");
                   // console.log("nooo");
                   $("#insert").prop("disabled",false);
                }
                if(v.length>6){
                    $(".vm17").html("maximum allow input 6 number");
                   // console.log("nooo");
                   $("#insert").prop("disabled",true);
                }
                else{
                  
                }
               
            });

            $("#roomnu").on("keyup",function(){
                var nu=$(this).val();
                if(nu.length>3){
                    $(".vm12").html("maximum input is 3");
                    $("#insert").prop("disabled",true);  
                }
                if(nu.length<3){
                    $(".vm12").html("minimum 3 number require");
                    $("#insert").prop("disabled",true);  
                }

                
                if(nu.length==3){
                    $(".vm12").html("");
                    $("#insert").prop("disabled",false);  

                        if(nu>=101 && nu<=107 || nu>=201 && nu<=228 || nu>=301 && nu<=328 || nu>=401 && nu<=428 || nu>=501 && nu<=520){
                           
                        }
                        else{
                            $(".vm12").html("Please Insert valid room number");
                            $("#insert").prop("disabled",true);   
                        }

                        var bad=$(".bad:checked").val();
                        if(bad==""){

                        }
                        else
                        {
                            if(nu>=101 && nu<=107 || nu>=201 && nu<=228 || nu>=301 && nu<=328 || nu>=401 && nu<=428 || nu>=501 && nu<=520){
                           
                            
                            if(nu>109){
                                    if(bad=="d" || bad=="e"){
                                        $(".vm12").html("That Has No Any Bad For This Room Number");
                                        $("#insert").prop("disabled",true); 
                                        return false;
                                    }
                                    else{
                                        $("#insert").prop("disabled",false);  
                                    }
                                }
                            //console.log(bad);  
                            $.ajax({
                                url:'admissionform2.php',
                                type:'post',
                                data:{nu:nu,bad:bad,a:1},
                                success:function(data){
                                    console.log(data);
                                    if(data=="no"){
                                        $(".vm12").html("Selected room number and bad is already allocated");
                                        $("#insert").prop("disabled",true); 
                                    }
                                }
                            });
                        
                    }
                        }
                }

            });
            
                    
            $(".bad").on("change",function(){
                       $(".vm13").html("");
                        var bad=$(".bad:checked").val();
                            var nu=$("#roomnu").val();
                        // console.log(nu);
                            if(nu.length==3){
                                if(nu>109){
                                    if(bad=="d" || bad=="e"){
                                        $(".vm13").html("That Has No Any Bad For This Room Number");
                                        $("#insert").prop("disabled",true); 
                                        return false;
                                    }
                                    else{
                                        $(".vm12").html("");
                                        $("#insert").prop("disabled",false);  
                                    }
                                } 
                            $.ajax({
                                url:'admissionform2.php',
                                type:'post',
                                data:{nu:nu,bad:bad,b:1},
                                success:function(data){
                                    console.log(data);
                                    if(data=="no"){
                                                    $(".vm13").html("Selected room number and bad is already allocated");
                                                    $("#insert").prop("disabled",true); 
                                                }
                                                else{
                                                    $(".vm13").html("");
                                                    $(".vm12").html("");
                                                    $("#insert").prop("disabled",false); 
                                                }
                                }
                            });
                        }
                            
                        
                        });
                    

      
        $("#studyin").on("change",function(){
            if($("#studyin :selected").val()=="sardardham"){
                $("#scin").val("sardardham");
                $("#scin").prop("disabled",true);
                $("#sardardham").prop("selected",true);
                $("#course").prop("disabled",true);
                $(".vm9").html("");
                $(".vm10").html("");
            }
            else{
                $("#scin").val("");
                $("#scin").prop("disabled",false);
            }
        });

        var lcase = new RegExp("[a-z ]+");
       
       

        $("#sename").on("keypress",function(e){
            $(".vm").html("");
          
            if(!lcase.test(e.key)){
                e.preventDefault();
                //$(".vm").html("Please input only character in small case");
               // $(this).val(v.slice(0,-1));
             
               
            }
           
        });

        $("#sename").on("keyup",function(){
            var v=$(this).val();
            if(v.length>25){
                $(".vm").html("maximum input is 25 character");
                $("#insert").prop("disabled",true); 
            }
            else{
                $(".vm").html("");
                $("#insert").prop("disabled",false); 
            }

            
            if(v==""){
                $(".vm").html("");   
            }
        });

        $("#sname").on("keypress",function(e){
          
            if(!lcase.test(e.key)){
                e.preventDefault();
            }
        
        });

        $("#sname").on("keyup",function(){
            
            var v=$(this).val();
           

            if(v.length>25){
                $(".vm2").html("maximum input is 25 character");
                $("#insert").prop("disabled",true); 
            }
            else{
                $(".vm2").html("");
                $("#insert").prop("disabled",false); 
            }

            
            if(v==""){
                $(".vm2").html("");   
            }
           
        });

        
        $("#fname").on("keypress",function(e){
          
          if(!lcase.test(e.key)){
              e.preventDefault();
          }
      
      });

      $("#fname").on("keyup",function(){
          
          var v=$(this).val();
         

          if(v.length>25){
              $(".vm3").html("maximum input is 25 character");
              $("#insert").prop("disabled",true); 
          }
          else{
              $(".vm3").html("");
              $("#insert").prop("disabled",false); 
          }

          
          if(v==""){
              $(".vm3").html("");   
          }
         
      });

      $("#sname").on("keypress",function(e){
          
          if(!lcase.test(e.key)){
              e.preventDefault();
          }
      
      });

      $("#village").on("keyup",function(){
          
          var v=$(this).val();
         

          if(v.length>25){
              $(".vm4").html("maximum input is 25 character");
              $("#insert").prop("disabled",true); 
          }
          else{
              $(".vm4").html("");
              $("#insert").prop("disabled",false); 
          }

          
          if(v==""){
              $(".vm4").html("");   
          }
         
      });

      $("#taluko").on("keyup",function(){
          
          var v=$(this).val();
         

          if(v.length>25){
              $(".vm5").html("maximum input is 25 character");
              $("#insert").prop("disabled",true); 
          }
          else{
              $(".vm5").html("");
              $("#insert").prop("disabled",false); 
          }

          
          if(v==""){
              $(".vm5").html("");   
          }
         
      });

      $("#smo").on("keyup",function(){
                var v=$(this).val();
                if(v.length<10){
                    $(".vm6").html("minimum 10 number require");
                   // console.log("nooo");
                   $("#insert").prop("disabled",true);
                }
                else{
                    $(".vm6").html("");
                   // console.log("nooo");
                   $("#insert").prop("disabled",false);
                }
                if(v.length>10){
                    $(".vm6").html("maximum allow input 10 number");
                   // console.log("nooo");
                   $("#insert").prop("disabled",true);
                }
                else{
                  
                }
               
            });

            $("#fmo").on("keyup",function(){
                var v=$(this).val();
                if(v.length<10){
                    $(".vm7").html("minimum 10 number require");
                   // console.log("nooo");
                   $("#insert").prop("disabled",true);
                }
                else{
                    $(".vm7").html("");
                   // console.log("nooo");
                   $("#insert").prop("disabled",false);
                }
                if(v.length>10){
                    $(".vm7").html("maximum allow input 10 number");
                   // console.log("nooo");
                   $("#insert").prop("disabled",true);
                }
                else{
                  
                }
               
            });

            
      $("#scin").on("keypress",function(e){
          
          if(!lcase.test(e.key)){
              e.preventDefault();
          }
      
      });

            $("#scin").on("keyup",function(){
                var v=$(this).val();
                
                if(v.length>55){
                    $(".vm10").html("minimum 55 number require");
                   // console.log("nooo");
                   $("#insert").prop("disabled",true);
                }
                else{
                    $(".vm10").html("");
                   // console.log("nooo");
                   $("#insert").prop("disabled",false);
                }
                
               
            });

            $(".stype").on("change",function(){
                $(".vm11").html("");
                $("#insert").prop("disabled",false);
            });

            $(".feetype").on("change",function(){
                $(".vm15").html("");
                $("#insert").prop("disabled",false);
            });

            $("#course").on("change",function(){
                $(".vm9").html("");
                $("#insert").prop("disabled",false); 
            });

            $("#city").on("change",function(){
                $(".vm19").html("");
                $("#insert").prop("disabled",false); 
            });

            $("#studyin").on("change",function(){
                $(".vm8").html("");
                $("#insert").prop("disabled",false); 
            });
        //--------------------------------------------------------------------------------


        var x="";
        $('input[type="file"]').change(function(e) {
              x=1;          
        });

        // $('#photo').each(function () {
        //     $(this).rules('add', {
        //         required: true,
        //         accept: "image/jpeg, image/pjpeg"
        //     })
        // });
        $("#photo").on("change",function(){
           var photo2= $('#photo')[0].files[0]['name'];
           var format=photo2.substr(photo2.indexOf(".") + 1);

           if(format=="png" || format=="jpeg" || format=="jpg"){
               console.log('hello');
               var fd= new FormData();
               var files = $('#photo')[0].files[0];
                fd.append('photo',files);
                fd.append('x',1);

                    $.ajax({
                    url:'admissionform2.php',
                    type:'post',
                    data:fd,
                    contentType: false,
                     processData: false,
                   
                         success:function(data){
                        console.log(data);
                        $("#img").attr("src", data);
                    }
                });
           }
           else{
              $(".vm18").html("Please only upload png/jpeg/jpg photo");
           }
         //  console.log(format);
          

        });
 
        $("#insert").on("click",function(){
            event.preventDefault();
 
        var sename=$("#sename").val();
        var sname=$("#sname").val();
        var fname=$("#fname").val();
        var village=$("#village").val();
        var taluko=$("#taluko").val();
        var city=$("#city :selected").val();
        var pincode=$("#pincode").val();
        var smo=$("#smo").val();
        var fmo=$("#fmo").val();
        var studyin=$("#studyin :selected").val();
        var course=$("#course :selected").val();
        var scin=$("#scin").val();
        var stype=$(".stype:checked").val();
        var roomnu=$("#roomnu").val();
        var bad=$(".bad:checked").val();
        var feenu=$("#feenu").val();
        var feetype=$(".feetype:checked").val();
        var rdate=$("#adate").val();
       

        if(sename==""){
            $(".vm").html("This field is require");
            //$("#insert").prop("disabled",true);
           // return false;
        }
        
        if(sname==""){
            $(".vm2").html("This field is require");
            //$("#insert").prop("disabled",true);
           // return false;
        }
        if(fname==""){
            $(".vm3").html("This field is require");
            //$("#insert").prop("disabled",true);
            //return false;
        }
        if(fname==""){
            $(".vm3").html("This field is require");
            //$("#insert").prop("disabled",true);
           // return false;
        }
        if(village==""){
            $(".vm4").html("This field is require");
            //$("#insert").prop("disabled",true);
            //return false;
        }
        if(taluko==""){
            $(".vm5").html("This field is require");
            //$("#insert").prop("disabled",true);
          //  return false;
        }
        
        if(course=="select"){
            $(".vm9").html("This field is require");
        }

        if(pincode==""){
            $(".vm17").html("This field is require");
            //$("#insert").prop("disabled",true);
           // return false;
        }
        if(smo==""){
            $(".vm6").html("This field is require");
            //$("#insert").prop("disabled",true);
           // return false;
        }
        if(fmo==""){
            $(".vm7").html("This field is require");
            //$("#insert").prop("disabled",true);
           // return false;
        }
        if(scin==""){
            $(".vm10").html("This field is require");
            //$("#insert").prop("disabled",true);
          //
           // return false;
        }
        var ch3=$(".stype").is(':checked');
       if(!ch3){
            
            $(".vm11").html("This field is require");
            //$("#insert").prop("disabled",true);
           // return false;
        
       }
        if(roomnu==""){
            $(".vm12").html("This field is require");
            //$("#insert").prop("disabled",true);
            //return false;
        }
       var ch=$(".bad").is(':checked');
       if(!ch){
            
            $(".vm13").html("This field is require");
          //  $("#insert").prop("disabled",true);
            //return false;
       }
       
        if(feenu==""){
            $(".vm14").html("This field is require");
            //$("#insert").prop("disabled",true);
            //return false;
        }
        var ch2=$(".feetype").is(':checked');
       if(!ch2){
            
            $(".vm15").html("This field is require");
            //$("#insert").prop("disabled",true);
            //return false;
       }
      
        if(rdate==""){
            $(".vm16").html("This field is require");
            //$("#insert").prop("disabled",true);
            //return false;
        }

        if(city=="select"){
            $(".vm19").html("This field is require");
        }

        if(studyin=="select"){
            $(".vm8").html("This field is require");
        }

        $("#adate").change(function(){
            $(".vm16").html("");
           // return false;
        });

       

        
        if(sename=="" || sname=="" || fname=="" || village=="" || taluko=="" || pincode=="" || smo=="" || fmo=="" || scin=="" || roomnu=="" || feenu=="" ||course=="select" || city=="select" || studyin=="select"){
            $("#insert").prop("disabled",true);
          
            return false;
        }
        
      if(!ch || !ch2 || !ch3){
        $("#insert").prop("disabled",true);
          
          return false;
      }
                // let now = new Date();
 
        // let day = ("0" + now.getDate());
        // let month = ("0" + (now.getMonth() + 1));

        // let today = (day)+"-"+(month)+"-"+ now.getFullYear();


     // var date=  $('#adate').val(today);

       
         


        var photo="";

        if(x==1){

            photo=  $('#photo')[0].files[0]['name'];
        }

        
            //console.log(pho);
            console.log(sename);
            console.log(sname);
            console.log(fname);
            console.log(village);
            console.log(taluko);
            console.log(city);
            console.log(pincode);
            console.log(smo);
            console.log(fmo);
            console.log(studyin);
            console.log(course);
            console.log(scin);
            console.log(stype);
            console.log(roomnu);
            console.log(bad);
            console.log(feenu);
            console.log(feetype);
            console.log(rdate);
            console.log(photo);
            var dat=[];
            dat[0]=sename;
            dat[1]=sname;
            dat[2]=fname;
            dat[3]=village;
            dat[4]=taluko;
            dat[5]=city;
            dat[6]=pincode;
            dat[7]=smo;
            dat[8]=fmo;
            dat[9]=studyin;
            dat[10]=course;
            dat[11]=scin;
            dat[12]=stype;
            dat[13]=roomnu;
            dat[14]=bad;
            dat[15]=feenu;
            dat[16]=feetype;
            dat[17]=rdate;
            dat[18]=photo;
            var jss = JSON.stringify(dat);
            //sename:sename,sname:sname,fname:fname,village:village,taluko:taluko,city:city,pincode:pincode,smo:smo,fmo:fmo,studyin:studyin,course:course,scin:scin,stype:stype,roomnu:roomnu,bad:bad,feenu:feenu,feetype:feetype,rdate:rdate,photo:photo
        
            try{

                var photo2= $('#photo')[0].files[0]['name'];
                var format=photo2.substr(photo2.indexOf(".") + 1);

                }catch(e){


                }
        
          

           if(format=="png" || format=="jpeg" || format=="jpg"){
             
               var fd2= new FormData();
               var files = $('#photo')[0].files[0];
                fd2.append('photo',files);
                fd2.append('y',1);
                var d=1;
                    $.ajax({
                    url:'admissionform2.php',
                    type:'post',
                    data:fd2,
                    contentType: false,
                    processData: false,
                    success:function(data){
                        console.log(data);
                        
                    }
                });
           }
         



            $.ajax({
                url:'admissionform2.php',
                type:'post',
                data:{a:1,jss:jss},
                success:function(data){
                    console.log(data);
                    if(data=="true"){
                        $("#al1").css("display","block");
                        $("#al1").delay(5000).fadeOut(500);
                        $("input[type=text]").val("");
                        $("input[type=number]").val("");
                        $("input[type=date]").val("");
                        $('#photo').val('');
                        $("#img").attr("src","");
                        $('.feetype').prop('checked', false);
                        $('.stype').prop('checked', false);
                        $('.bad').prop('checked', false);

                    }
                    else{
                       $("#al1").css("display","none");
                       $("#al2").css("display","block");
                       $("#al2").delay(5000).fadeOut(500);
                    }
                }
            });
            
        });

    });
</script>

