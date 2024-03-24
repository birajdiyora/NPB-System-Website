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
  <script src="moment.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
</html>
<?php
    require("conn.php");
 
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
           #mid{
             margin-top:-23px;
           }
           
        }
        /* @media all and (max-width:1496px){
            #mid{
             margin-top:23px;
            }
        } */
/* 
        .cot{
          height:300px;
        }
        */

      
        
        #section{
            z-index: 2;
        }
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

        .container{
          color:black;
        }

        #mid{
          margin-top:10px;
        }
        #msg,#msg2{
         color:red;
         font-style:italic;
         font-size:14px;
        }
        #msg3{
          color:green;
          font-style:italic;
          font-weight:bold;
          margin-left:6px;
          margin-top:11px;
          margin-bottom:-29px;
        }
        #msg4{
          color:red;
          font-style:italic;
          font-weight:bold;
          margin-left:6px;
          margin-top:40px;
          margin-bottom:-29px;
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

<div class="container">

<?php
       date_default_timezone_set('Asia/Kolkata');
       $date= date('d-m-Y');
     
     
    ?>
    <div class="row">
    <div class="col-lg-10"></div>
   <div class="col-lg-1 mt-5">
         <input type="text" value="<?php echo $date; ?>" id="dte" disabled> 
        
   </div>
   <div class="col-lg-1"></div>
            
       </div>


  <div class="row">
    <div class="col-lg-3 mt-3">
    <form method="post" id="fo">
      <label>Search Here</label>
      <input type="text" id="ase" placeholder="All search" name="sval" value="">
    </div>
    <div class="col-lg-4">
    
    </div>
    <div class="col-lg-5 mt-3">
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


<div class="container mt-5" id="cot">
    <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
        <table class="table table-striped table" id="te">
            <thead class="">
              <tr class="bg-info text-white">
                <th scope="col">SR</th>
                <th scope="col">SID</th>
                <th scope="col">FEE RECEIPT</th>
                <th scope="col">FIRST NAME</th>
                <th scope="col">MIDDLE NAME</th>
                <th scope="col">LAST NAME</th>
                <th scope="col">ROOM NUMBER</th>
                <th scope="col">COURSE</th>
                <th scope="col">ADMISSION DATE</th>
                <th scope="col">ACTION</th>
              </tr>
            </thead>
            <tbody id="tada">
           
            </tbody>
          </table>
        </div>
        <form method="post" id="fo">
</div>

<div class="modal fade" id="modal1"  tabindex="-1" aria-labelledby="modal-title" aria-hidden="false" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Missbehaviour</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container mb-5">
    
        <div class="row" id="mid">
         
            <div class="col">
                <label>Full Name:</label>
                &nbsp<label id="fname"></label>
            </div>
            
           
        </div>
        
        <div class="row" id="mid">
            
            <div class="col">
                <label>Room NO:</label>
                 <label id="sroomnu"></label>
            </div>
           
        </div>
        
        <div class="row mt-3"  id="mid">
         
            <div class="col"id="col3">
                <label>Penalty For...</label><br>
                &nbsp &nbsp  <input type="checkbox" name="mt-3" class="panf" value="room clean"> &nbsp<font>Room Clean</font>&nbsp &nbsp
                &nbsp &nbsp  <input type="checkbox" class="panf" value="i card">&nbsp <font>I Card</font>&nbsp &nbsp
                &nbsp &nbsp  <input type="checkbox" class="panf" value="destroy things"> &nbsp<font>Destroyed Things</font>
                <div><p id="msg"></p></div>
            </div>
            
        </div>
        <div class="row mt-3"  id="mid">
           
            <div class="col"id="col4">
                <label>Penalty Value...</label><br>
                &nbsp &nbsp     <input type="radio"name="p"value="50" id="panv"class="panvc"><font>50</font>
                &nbsp &nbsp     <input type="radio"name="p"value="100" id="panv"class="panvc"><font>100</font>
                &nbsp &nbsp     <input type="radio"name="p"value="200" id="panv"class="panvc"><font>200</font>
                &nbsp &nbsp     <input type="radio"name="p"value="300" id="panv" class="panvc"><font>300</font>
                &nbsp &nbsp     <input type="radio"name="p"value="400" id="panv"class="panvc"><font>500</font>
                &nbsp &nbsp     <input type="radio"name="p"value="none" id="panv" class="panvc"><font>None</font>
                <div><p id="msg2"></p></div>
            </div>
            
        </div>
        <div class="row mt-4">
          
            <div class="col">
                <label>Other Details about Penalty</label><br><br>
                &nbsp<input type="text" name="n3s" id="othde" placeholder="OTHER DETAILS">
                <input type="hidden" id="sid">
            </div>
            
        </div>
     
        <div><p id="msg3"></p></div>
        <div><p id="msg4"></p></div>
        </div>

      <div class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="missu">Submit</button>
      </div>
    </div>
  </div>
</div>



</body>
</html>
<script>
  $("#ase").focus();
  function  addstd(sid){
   
      
          $.ajax({
            url:'missbehaviour2.php',
            type:'POST',
             dataType: 'json',
            data:{sid:sid,c:1},
            success:function(data){
              $("#fname").html(data[0]+" "+data[1]+" "+data[2]);
              $("#sroomnu").html(data[3]);
              $("#sid").val(sid);
            }
          });
        }
    $(document).ready(function(){
      $("#ase").val("");
      var fv=$("#ase").val();
      var sv=$("#ase2").val();
      $("#ase").val("");
      $("#ase2").val("");
      $.ajax({
        url:'missbehaviour2.php',
        type:'post',
        data:{x:1},
        success:function(data){
          $("#tada").html(data);

        }

      });

      $(".panf").on("change",function(){
        $("#msg").html("");
        
        if($(".panvc").is(":checked")){
          $("#missu").prop("disabled",false);
        }
          
      });

      $(".panvc").on("change",function(){
        $("#msg2").html("");
        $.ajax({
           type:'post',
           data:{e:1},
           success:function(){

           }
         });
           
        if($(".panf").is(":checked")){
          $("#missu").prop("disabled",false);
        }

      });
    
      $("#dl").on("change",function(){
        var v=$("#ase2").val();
        var sps=$("#dl :selected").val();
        
        $.ajax({
          url:'missbehaviour2.php',
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
          url:'missbehaviour2.php',
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
                url:'missbehaviour2.php',
                type:'post',
                data:{v:v,a:1},
                success:function(data){
                    console.log(data);
                    $("#tada").html(data);
                }
            });
        });

       
         

        $("#missu").on("click",function(){
         var panf=[];
         var panv="";
         panv=$("#panv:checked").val();
         var othde=$("#othde").val();
         var sid=$("#sid").val();
         var rab=$("#sroomnu").html();
        var date=$("#dte").val();
      
        var time = moment().format("h:mm:ss A");
        
         $(".panf").each(function(){
              if ($(this).is(":checked")) {
                  panf.push($(this).val());
              }
          });
            
     
        var panfa=panf.toString();

        if(panfa==""){
          $("#msg").html("This field is required");
          $("#missu").prop("disabled",true);
           //return false;
         }
         var valpanv=$(".panvc").is(':checked');
         if(!valpanv){
          $("#msg2").html("This field is required");
          $("#missu").prop("disabled",true);
           //return false;
         }
         
      if(panfa!="" && valpanv!=""){
        $.ajax({
          url:'missbehaviour2.php',
          type:'post',
         // dataType: 'json',
          data:{sid:sid,rab:rab,panfa:panfa,panv:panv,othde:othde,date:date,time:time,d:1},
          success:function(data){
            console.log(data);
            if(data=="true"){ 
              $("#msg3").html("Record Save Successfuly");
              $(".panf").prop("checked",false);
              $(".panvc").prop("checked",false);
              $("#othde").val("");
              // $("#msg3").delay(5000).fadeOut(500);
              setTimeout(function(){
            
              $("#msg3").html("");
              }, 3000);
            }
            else{
              $("#msg4").html("Record is not save successfuly");
              setTimeout(function(){
            
                $("#msg4").html("");
                }, 3000);
            }
          }
        });
      }
       
        
        });
        
        // $(".addbtn").on("click",function(){
        //   console.log("hello");
        // });
      
       
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
</script>

