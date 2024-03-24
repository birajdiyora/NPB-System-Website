<?php
  session_start();
  if(!$_SESSION['login']){
      header("location:login.php");
  }
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery-3.6.0.min.js"></script>
</head>
</html>
<?php
    require("conn.php");
  $chprt="";
  

    
//     echo '
// <script type="text/javascript">
// console.log("hello");
// $("#ase").attr("value", "cxcxc");
//   $("#ase").val("uyyu");
//   $("#ase2").val("jjhjhj");
// </script>
// '; 




  if(isset($_POST['pr'])){
   // echo "hello................";
    if(isset($_POST['chprt'])){
      //return false;
      //echo "hello................hello";
  
    }
    else{
      
     header("location:search.php");
      // echo '
      //   <script>
      //   event.preventDefault();
      //   console.log("hello");
      //     alert("Plaese Select Field To Print In Report");
      //     return false;
      //   </script>
      // ';
    }
  
    $sps="";
     $v=$_POST['sval'];
     $v2=$_POST['sval2'];
     $sps=$_POST['dl'];
  

  
    include('vendor\autoload.php');

//-----------printf function define-------------------------------




    
function printrecord($re){
  //echo "hello.........................";
  echo $chprt=$_POST['chprt'];
  
  if(mysqli_num_rows($re)>0){
    $html='
    <html>
    <head>
    <style>
          table {
          font-family: sans-serif;
          border: 1px solid black;
          border-collapse: collapse;
          }
          td,th{
            border:1px solid black;
           padding:7px;
          }
          h1{
            margin-left:30%;
          }

          </style>
          <body>
          
          <h1> Niru patel boarding</h1>
          
      <table border="1px solid black" autosize="1">
    
    ';
    $n=1;
    $html.='
    <thead>
    <tr>
    <th>No</th>
    ';
    foreach($chprt as $v){
      $html.= '

      <th>'.$v.'</th>
     
      ';
    }

    $html.='
    </tr>
    </thead>
    ';


    while($row=mysqli_fetch_array($re)){
      $html.='<tr>
      <td><p style="font-size:18px">'.$n.'</p></td>
      ';
      foreach($chprt as $v){
        $html.= '
        <td><p style="font-size:18px">'.$row[$v].'</p></td>
        ';
        
      }
      $html.='</tr>';
        // $html.='
        //     <tr>
        //     <td>'.$n.'</td>
        //     <td>'.$row['sid'].'</td>
        //     <td>'.$row['feenu'].'</td>
        //     <td>'.$row['sername'].'</td>
        //     <td>'.$row['studentname'].'</td>
        //     <td>'.$row['fathername'].'</td>
        //     <td>'.$row['rab'].'</td>
        //     <td>'.$row['course'].'</td>
        //     <td>'.$row['district'].'</td>
        //     <td>'.$row['taluko'].'</td>
        //     <td>'.$row['village'].'</td>
        //     <td>'.$row['studyin'].'</td>
        //     <td>'.$row['scname'].'</td>
        //     <td>'.$row['studenttype'].'</td>
        //     <td>'.$row['feetype'].'</td>
        //     <td>'.$row['adate'].'</td>
        //     </tr>
            
        
        // ';
        $n++;
    }
    $html.='</table>
      </body>
      </html>
    ';
    $mpdf = new mPDF();
    $mpdf->WriteHTML($html);
    $mpdf->Output(); 
}




 
}


//---------------function end---------------------------------

    
    if($v=="" && $v2==""){
      $q="SELECT * FROM `iso_2122`";
      $re=mysqli_query($conn,$q);
      
      printrecord($re);
      
    }

    if($v!=""){

      $q="SELECT * FROM `iso_2122` where `sid` LIKE '{$v}%' OR `feenu` LIKE '{$v}%' OR `sername` LIKE '{$v}%' OR `studentname` LIKE '{$v}%' OR `studentname` LIKE '{$v}%' OR `fathername` LIKE '{$v}%' OR `rab` LIKE '{$v}%'
      OR `course` LIKE '{$v}%' OR `district` LIKE '{$v}%' OR `taluko` LIKE '{$v}%' OR `village` LIKE '{$v}%' OR `studyin` LIKE '{$v}%' OR `scname` LIKE '{$v}%' OR `studenttype` LIKE '{$v}%' OR `feetype` LIKE '{$v}%' OR `adate` LIKE '{$v}%'";
      $re=mysqli_query($conn,$q);

      printrecord($re);

    }

    if($v2!=""){
      if($sps=="sid"){
        $q="SELECT * FROM `iso_2122` where `sid` LIKE '{$v2}%'";
        $re=mysqli_query($conn,$q);
        printrecord($re);

      }

    }

    if($sps=="sename"){
      $q="SELECT * FROM `iso_2122` where `sername` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    
    if($sps=="sname"){
      $q="SELECT * FROM `iso_2122` where `studentname` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    
    if($sps=="fname"){
      $q="SELECT * FROM `iso_2122` where `fathername` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    if($sps=="roomnu"){
      $q="SELECT * FROM `iso_2122` where `roomnu` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    
    if($sps=="feenu"){
      $q="SELECT * FROM `iso_2122` where `feenu` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    if($sps=="course"){
      $q="SELECT * FROM `iso_2122` where `course` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    if($sps=="district"){
      $q="SELECT * FROM `iso_2122` where `district` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    if($sps=="taluko"){
      $q="SELECT * FROM `iso_2122` where `taluko` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    
    if($sps=="village"){
      $q="SELECT * FROM `iso_2122` where `village` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    if($sps=="studyin"){
      $q="SELECT * FROM `iso_2122` where `studyin` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    if($sps=="scname"){
      $q="SELECT * FROM `iso_2122` where `scname` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    if($sps=="stype"){
      $q="SELECT * FROM `iso_2122` where `studenttype` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    if($sps=="feetype"){
      $q="SELECT * FROM `iso_2122` where `feetype` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }

    if($sps=="adate"){
      $q="SELECT * FROM `iso_2122` where `adate` LIKE '{$v2}%'";
      $re=mysqli_query($conn,$q);
      printrecord($re);
    }
  
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
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style>

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
           #dl{
             margin-left: 90px;
             margin-top: 20px;
           }
           
        }
/* 
        .cot{
          height:300px;
        }
        */
        .my-custom-scrollbar{
          position:relative;
          height:491px;
          overflow:auto;

        }
        .table-wrapper-scroll-y{
          display:block;
        }
        input[type="checkbox"]{
          width: 24px; /*Desired width*/
          height: 16px; /*Desired height*/
        }
      
        
        #section{
            z-index: 2;
        }
        #thclass2{
         position: relative;
         height:500px;
        }
        /*----------------------------------------------------------*/

        .MultiCheckBox {
            border:1px solid #e2e2e2;
            padding: 5px;
            border-radius:4px;
            cursor:pointer;
            position: relative;
           
        }

        .MultiCheckBox .k-icon{ 
            font-size: 15px;
            float: right;
            font-weight: bolder;
            margin-top: -7px;
            height: 10px;
            width: 14px;
            color:#787878;
        } 

        .MultiCheckBoxDetail {
            display:none;
            position:inline-block;
            border:1px solid #e2e2e2;
            overflow-y:hidden;
            background-color:green;
            
            
        }

        .MultiCheckBoxDetailBody {
            overflow-y:scroll;
           
    
        }

            .MultiCheckBoxDetail .cont  {
                clear:both;
                overflow: hidden;
                padding: 2px;
            }

            .MultiCheckBoxDetail .cont:hover  {
                background-color:#cfcfcf;
                
            }

            .MultiCheckBoxDetailBody > div > div {
                float:left;
            }

        .MultiCheckBoxDetail>div>div:nth-child(1) {
        
        }

        .MultiCheckBoxDetailHeader {
            overflow:hidden;
            position:relative;
            height: 28px;
             background-color:#3d3d3d; 
            
        }

            .MultiCheckBoxDetailHeader>input {
                position: absolute;
                top: 4px;
                left: 3px;
            }

            .MultiCheckBoxDetailHeader>div {
                position: absolute;
                top: 5px;
                left: 24px;
                color:#fff;
            }


            /*-------------------------------------------------------*/
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


  

  <form method="post">
<div class="container">
  <div class="row">
    <div class="col-lg-3 mt-5">
    <form method="post" id="fo">
      <label>Search Here</label>
      <input type="text" id="ase" placeholder="All search" name="sval" value="">
    </div>
    <div class="col-lg-4 mt-5">
    <select id="test">
        <option name="chprt[]" value="sid" id="sid" >Sid</option>
        <option  name="chprt[]" value="sername" id="sename">Student sername </option>
        <option  name="chprt[]" value="studentname" id="sname">Student name</option>
        <option  name="chprt[]" value="fathername" id="fname">Student fathername</option>
        <option  name="chprt[]" value="roomnu" id="roomnu">Room number</option>
        <option  name="chprt[]" value="feenu" id="feenu">Fee receipt number</option>
        <option  name="chprt[]" value="course" id="course">Course</option>
        <option  name="chprt[]" value="district" id="district">District </option>
        <option  name="chprt[]" value="taluko" id="taluko">Taluko</option>
        <option  name="chprt[]" value="village" id="village">Village</option>
        <option  name="chprt[]" value="studyin" id="studyin">Studyin</option>
        <option  name="chprt[]" value="scname" id="scname">&nbspSchool/college name</option>
        <option name="chprt[]" value="studenttype" id="stype">Student type</option>
        <option name="chprt[]" value="adate" id="adate">&nbspAdmission date</option>
    </select>

    <input type="submit" name="pr" value="Print" id="print">
    </div>
    <div class="col-lg-5 mt-5">
      <label>Search Here</label>
      <input type="text" id="ase2" placeholder="Specific search" name="sval2"> &nbsp &nbsp &nbsp &nbsp
      <select id="dl" name="dl">
        <option value="sid">Sid</option>
        <option value="sename">Sername</option>
        <option value="sname">student name</option>
        <option value="fname">father name</option>
        <option value="roomnu">Room number</option>
        <option value="feenu">Fee receipt number</option>
        <option value="course">Course</option>
        <option value="district">District</option>
        <option value="taluko">Taluko</option>
        <option value="village">Village</option>
        <option value="studyin">Studyin</option>
        <option value="scname">School/college name</option>
        <option value="stype">Student type</option>
        <option value="feetype">Fee half/full</option>
        <option value="adate">Admission date</option>

      </select>
    </div>
    <!-- <div class="col-lg-1 mt-5" id="se2">
    
    </div> -->
  </div>
</div>



<!-- <input type="submit" name="pr" value="Print" id="print">
<input type="checkbox" name="chprt[]" value="sid" id="sid" >&nbspSid &nbsp
<input type="checkbox" name="chprt[]" value="sername" id="sename">&nbspStudent sername &nbsp
<input type="checkbox" name="chprt[]" value="studentname" id="sname">&nbspStudent name &nbsp
<input type="checkbox" name="chprt[]" value="fathername" id="fname">&nbspStudent fathername &nbsp
<input type="checkbox" name="chprt[]" value="roomnu" id="roomnu">&nbspRoom number &nbsp
<input type="checkbox" name="chprt[]" value="feenu" id="feenu">&nbspFee receipt number &nbsp
<input type="checkbox" name="chprt[]" value="course" id="course">&nbspCourse &nbsp
<input type="checkbox" name="chprt[]" value="district" id="district">&nbspDistrict &nbsp
<input type="checkbox" name="chprt[]" value="taluko" id="taluko">&nbspTaluko &nbsp
<input type="checkbox" name="chprt[]" value="village" id="village">&nbspVillage &nbsp
<input type="checkbox" name="chprt[]" value="studyin" id="studyin">&nbspStudyin &nbsp
<input type="checkbox" name="chprt[]" value="scname" id="scname">&nbspSchool/college name &nbsp
<input type="checkbox" name="chprt[]" value="studenttype" id="stype">&nbspStudent type &nbsp
<input type="checkbox" name="chprt[]" value="adate" id="adate">&nbspAdmission date &nbsp
<input type="checkbox" name="" value="checkall" id="chall">&nbspCheck all  -->


<!-- <select id="test">
<input type="checkbox" name="chprt[]" value="sid" id="sid" >&nbspSid &nbsp
<input type="checkbox" name="chprt[]" value="sername" id="sename">&nbspStudent sername &nbsp
<input type="checkbox" name="chprt[]" value="studentname" id="sname">&nbspStudent name &nbsp
<input type="checkbox" name="chprt[]" value="fathername" id="fname">&nbspStudent fathername &nbsp
<input type="checkbox" name="chprt[]" value="roomnu" id="roomnu">&nbspRoom number &nbsp
<input type="checkbox" name="chprt[]" value="feenu" id="feenu">&nbspFee receipt number &nbsp
<input type="checkbox" name="chprt[]" value="course" id="course">&nbspCourse &nbsp
<input type="checkbox" name="chprt[]" value="district" id="district">&nbspDistrict &nbsp
<input type="checkbox" name="chprt[]" value="taluko" id="taluko">&nbspTaluko &nbsp
<input type="checkbox" name="chprt[]" value="village" id="village">&nbspVillage &nbsp
<input type="checkbox" name="chprt[]" value="studyin" id="studyin">&nbspStudyin &nbsp
<input type="checkbox" name="chprt[]" value="scname" id="scname">&nbspSchool/college name &nbsp
<input type="checkbox" name="chprt[]" value="studenttype" id="stype">&nbspStudent type &nbsp
<input type="checkbox" name="chprt[]" value="adate" id="adate">&nbspAdmission date &nbsp
<input type="checkbox" name="" value="checkall" id="chall">&nbspCheck all 
</select> -->
<!-- ------------------------------------------------------------------------------- -->



          </form>
<!-- ------------------------------------------------------------------------------- -->

<div class="container mt-5" id="cot">
    <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar mt-5">
        <!-- <table class="table table-striped table" id="te"> -->
        <table class="table table-hover" id="te">
            <thead class="" id="thclass">
              <tr class="bg-info text-white">
                <th scope="col">SR</th>
                <th scope="col">SID</th>
                <th scope="col">FEE RECEIPT</th>
                <th scope="col">FIRST NAME</th>
                <th scope="col">MIDDLE NAME</th>
                <th scope="col">LAST NAME</th>
                <th scope="col">ROOM NUMBER</th>
                <th scope="col">COURSE</th>
                <th scope="col">DISTRICT</th>
                <th scope="col">TALUKO</th>
                <th scope="col">VILLAGE</th>
                <th scope="col">STUDYIN</th>
                <th scope="col">SCHOOL/COLLEGE NAME</th>
                <th scope="col">STUDENT TYPE</th>
                <th scope="col">FEE TYPE</th>
                <th scope="col">ADMISSION DATE</th>
              </tr>
            </thead>
            <tbody id="tada">
              
            </tbody>
          </table>
        </div>
        <form method="post" id="fo">
</div>
</body>
</html>
<script>
  
    $(document).ready(function(){
      $("#printn").on("click",function(){
        window.stop();
      });
      
      $("#ase").val("");
      var fv=$("#ase").val();
      var sv=$("#ase2").val();
      $("#ase").val("");
      $("#ase2").val("");
      $.ajax({
        url:'search2.php',
        type:'post',
        data:{x:1},
        success:function(data){
          $("#tada").html(data);
        }

      });
    
      $("#dl").on("change",function(){
        var v=$("#ase2").val();
        var sps=$("#dl :selected").val();
        
        $.ajax({
          url:'search2.php',
          type:'post',
          data:{v:v,sps:sps},
          success:function(data){
            $("#tada").html(data); 
          }
        });

      });


      $("#ase2").on("keyup",function(){
        $("#ase").val("");
     

        var v=$(this).val();
        var sps=$("#dl :selected").val();
        
        $.ajax({
          url:'search2.php',
          type:'post',
          data:{v:v,sps:sps},
          success:function(data){
            $("#tada").html(data); 
          }
        });

        
      });

      $("#ase").on("keyup",function(){
        $("#ase2").val("");
      });


        $("#ase").on("keyup",function(){
            var v=$(this).val();
            $.ajax({
                url:'search2.php',
                type:'post',
                data:{v:v,a:1},
                success:function(data){
                   
                    $("#tada").html(data);
                }
            });
        });

        $("#chall").on("change",function(){
          if($(this).is(":checked")){
            $('#sid').prop('checked', true);
            $('#sename').prop('checked', true);
            $('#sname').prop('checked', true);
            $('#fname').prop('checked', true);
            $('#roomnu').prop('checked', true);
            $('#feenu').prop('checked', true);
            $('#course').prop('checked', true);
            $('#district').prop('checked', true);
            $('#taluko').prop('checked', true);
            $('#village').prop('checked', true);
            $('#studyin').prop('checked', true);
            $('#scname').prop('checked', true);
            $('#stype').prop('checked', true);
            $('#adate').prop('checked', true);

          }
          else{
            $('#sid').prop('checked', false);
            $('#sename').prop('checked', false);
            $('#sname').prop('checked', false);
            $('#fname').prop('checked', false);
            $('#roomnu').prop('checked', false);
            $('#feenu').prop('checked', false);
            $('#course').prop('checked', false);
            $('#district').prop('checked', false);
            $('#taluko').prop('checked', false);
            $('#village').prop('checked', false);
            $('#studyin').prop('checked', false);
            $('#scname').prop('checked', false);
            $('#stype').prop('checked', false);
            $('#adate').prop('checked', false);
          }
        });
          
        $("#sid").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });

        $("#sename").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });
        $("#sname").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });
        $("#fname").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });
        $("#roomnu").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });
        $("#feenu").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });
        $("#course").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });
        $("#district").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });
        $("#taluko").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });

        $("#village").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });
        $("#studyin").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });
        $("#scname").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });
        $("#stype").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });
        $("#adate").on("change",function(){
          if($(this).not(":checked")){
             // $("#chall").prop("checked",true);
             $("#chall").prop("checked",false);
          }
        
        });
        
        
       
    //   $("#pr2").on("click",function(){
    //     var sev=$("#ase").val();
    //     console.log("hello");
    //     $.ajax({

    //       type:'post',
    //       data:{sev:sev},
    //       success:function(data){
    //         console.log(data);
    //       }
    //     });
    //   });
     });

     /*----------------------------------------------------------*/

     $(document).ready(function () {
            $("#test").CreateMultiCheckBox({ width: '230px', defaultText : 'Select Below', height:'250px' });
        });

        $(document).ready(function () {
            $(document).on("click", ".MultiCheckBox", function () {
                var detail = $(this).next();
                detail.show();
            });

            $(document).on("click", ".MultiCheckBoxDetailHeader input", function (e) {
                e.stopPropagation();
                var hc = $(this).prop("checked");
                $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", hc);
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
            });

            $(document).on("click", ".MultiCheckBoxDetailHeader", function (e) {
                var inp = $(this).find("input");
                var chk = inp.prop("checked");
                inp.prop("checked", !chk);
                $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", !chk);
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
            });

            $(document).on("click", ".MultiCheckBoxDetail .cont input", function (e) {
                e.stopPropagation();
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();

                var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
                $(".MultiCheckBoxDetailHeader input").prop("checked", val);
            });

            $(document).on("click", ".MultiCheckBoxDetail .cont", function (e) {
                var inp = $(this).find("input");
                var chk = inp.prop("checked");
                inp.prop("checked", !chk);

                var multiCheckBoxDetail = $(this).closest(".MultiCheckBoxDetail");
                var multiCheckBoxDetailBody = $(this).closest(".MultiCheckBoxDetailBody");
                multiCheckBoxDetail.next().UpdateSelect();

                var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
                $(".MultiCheckBoxDetailHeader input").prop("checked", val);
            });

            $(document).mouseup(function (e) {
                var container = $(".MultiCheckBoxDetail");
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                   container.hide();
                }
            });
        });

        var defaultMultiCheckBoxOption = { width: '220px', defaultText: 'Select Below', height: '200px' };

        jQuery.fn.extend({
            CreateMultiCheckBox: function (options) {

                var localOption = {};
                localOption.width = (options != null && options.width != null && options.width != undefined) ? options.width : defaultMultiCheckBoxOption.width;
                localOption.defaultText = (options != null && options.defaultText != null && options.defaultText != undefined) ? options.defaultText : defaultMultiCheckBoxOption.defaultText;
                localOption.height = (options != null && options.height != null && options.height != undefined) ? options.height : defaultMultiCheckBoxOption.height;

                this.hide();
                this.attr("multiple", "multiple");
                var divSel = $("<div class='MultiCheckBox'>" + localOption.defaultText + "<span class='k-icon k-i-arrow-60-down'><svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='sort-down' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512' class='svg-inline--fa fa-sort-down fa-w-10 fa-2x'><path fill='currentColor' d='M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z' class=''></path></svg></span></div>").insertBefore(this);
                divSel.css({ "width": localOption.width });

                var detail = $("<div class='MultiCheckBoxDetail'><div class='MultiCheckBoxDetailHeader'><input type='checkbox' class='mulinput' value='-1982' /><div>Select All</div></div><div class='MultiCheckBoxDetailBody'></div></div>").insertAfter(divSel);
                detail.css({ "width": parseInt(options.width) + 10, "max-height": localOption.height });
                var multiCheckBoxDetailBody = detail.find(".MultiCheckBoxDetailBody");

                this.find("option").each(function () {
                    var val = $(this).attr("value");
                    var name = $(this).attr("name");
                   // console.log(val);
                    if (val == undefined)
                        val = '';

                    multiCheckBoxDetailBody.append("<div class='cont'><div><input type='checkbox' class='mulinput' name='"+ name +"' value='" + val + "' /></div><div>" + $(this).text() + "</div></div>");
                });

                multiCheckBoxDetailBody.css("max-height", (parseInt($(".MultiCheckBoxDetail").css("max-height")) - 28) + "px");
            },
            UpdateSelect: function () {
                var arr = [];

                this.prev().find(".mulinput:checked").each(function () {
                    arr.push($(this).val());
                });

                this.val(arr);
                console.log(arr[5]);
            },
        });
        $(document).ready(function () {
            $("#bu").click(function(){
           // console.log(arr[0]);

        });
        });
      

      /*----------------------------------------------------------------*/
</script>

