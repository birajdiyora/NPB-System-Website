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
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
                font-size: 1rem;
                line-height: 2.15;
                padding-left: .75em;
                padding-right: .75em;
        }
        .card-registration .select-arrow {
                top: 13px;
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

        
        

           .h-custom {
height: 100vh !important;
}

        }
        #section{
    z-index: 2;
}
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

.gradient-custom-2 {
/* fallback for old browsers */
background: #a1c4fd;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
}

.bg-indigo {
background-color: #4835d4;
}
@media (min-width: 992px) {
.card-registration-2 .bg-indigo {
border-top-right-radius: 15px;
border-bottom-right-radius: 15px;
}
}
@media (max-width: 991px) {
.card-registration-2 .bg-indigo {
border-bottom-left-radius: 15px;
border-bottom-right-radius: 15px;
}
}
#section{
    z-index: 2;
}
#msg,#msg2,#msg3{
  color:red;
}
#msg5,#msg6{
  color:yellow;
}
/* #form3Examplea4{
  width: 178%;
} */
input[type=radio] {
    margin: 10px;
    -ms-transform: scale(1.5);
    -webkit-transform: scale(1.5);
    transform: scale(1.5);
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



        <section class="h-100 h-custom gradient-custom-2"id="section">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                  <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                      <div class="row g-0">
                        <div class="col-lg-6">
                          <div class="p-5">
                            <h3 class="fw-normal mb-5" style="color: #4835d4;">Room Change For Only One Student</h3>
                           
                            <div class="row">
                              <div class="col-md-12 pb-2">
          
                                <div class="form-outline form-white">
                                  <label class="form-label" for="form3Examplea4"> Student Fee Receipt No</label>
                                  <input type="number" id="fsf" class="form-control form-control-lg"placeholder=" Fee Receipt No." />
                                 
                                </div>
                              </div>
                            </div>
                              <!-- code for validation -->
                              <div class="row">
                                <div class="col-lg-6">
  
                                </div>
                                <div class="col-lg-6">
                                    <div id="msg"></div>
                                </div>
                              </div>
                              <!-- code for validation -->
                             
          
                                <div class="form-outline">
                                  <label class="form-label" for="form3Examplev3">Student name</label>
                                  <input type="text" id="fsn" class="form-control form-control-lg" placeholder="Student Name"disabled/>
                                 
                                </div>
          
                
                                <div class="row">
                              <div class="col-md-12 pb-2">
          
                                <div class="form-outline form-white">
                                  <label class="form-label mt-3" for="form3Examplea4">Student New Room Number</label>
                                  <input type="text" id="roomnu" class="form-control form-control-lg"placeholder=" Student Room No." />
                                 
                                </div>
                              </div>
                            </div>
                              <!-- code for validation -->
                              <div class="row">
                                <div class="col-lg-6">
  
                                </div>
                                <div class="col-lg-6">
                                    <div id="msg2"></div>
                                </div>
                              </div>
                              <!-- code for validation -->

                              <div class="row">
                              <div class="col-md-12 pb-2">
          
                                <div class="form-outline form-white">
                                  <label class="form-label mt-3" for="form3Examplea4">Student New Bad</label><br>
                                  <input type="radio" value="a" name="radio" class="bad"><font style="font-size:25px">a</font>
                                  <input type="radio" value="b" name="radio" class="bad"><font style="font-size:25px">b</font>
                                  <input type="radio" value="c" name="radio" class="bad"><font style="font-size:25px">c</font>
                                  <input type="radio" value="d" name="radio" class="bad"><font style="font-size:25px">d</font>
                                  <input type="radio" value="e" name="radio" class="bad"><font style="font-size:25px">e</font>
 
                                 
                                </div>
                              </div>
                            </div>
                              <!-- code for validation -->
                              <div class="row">
                                <div class="col-lg-6">
  
                                </div>
                                <div class="col-lg-6">
                                    <div id="msg3"></div>
                                </div>
                              </div>
                              <!-- code for validation -->
                          
                           <div class="row">
                             <div class="col-lg-4">
                              <button type="button" class="btn btn-outline-primary mt-3"id="btn1">Change Room</button>
                             </div>
                             <div class="col-lg-8 mt-1">
                                  <div id="msg4"></div>
                             </div>
                           </div>
          
                          </div>
                        </div>



                        <div class="col-lg-6 bg-indigo text-white">
                          <div class="p-5">
                            <h3 class="fw-normal mb-5">Room Change For Two Student</h3>
                           
                         
                            <div class="row">
                              <div class="col-md-12 pb-2">
          
                                <div class="form-outline form-white">
                                  <label class="form-label" for="form3Examplea4">First Student Fee Receipt No</label>
                                  <input type="number" id="ssf" class="form-control form-control-lg"placeholder=" Fee Receipt No." />
                                 
                                </div>
                              </div>
                            </div>
                              <!-- code for validation -->
                              <div class="row">
                                <div class="col-lg-6">
  
                                </div>
                                <div class="col-lg-6">
                                    <div id="msg5"></div>
                                </div>
                              </div>
                              <!-- code for validation -->
                                
                            <div class="mb-4 pb-2">
                              <div class="form-outline form-white">
                                <label class="form-label" for="form3Examplea2">First Student Name</label>
                                <input type="text" id="ssn" class="form-control form-control-lg"placeholder="Student Name"disabled />
                                
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12 pb-2">
          
                                <div class="form-outline form-white">
                                  <label class="form-label" for="form3Examplea4">Second Student Fee Reciept No</label>
                                  <input type="number" id="tsf" class="form-control form-control-lg" placeholder=" Fee Reciept No." />
                                  
                                </div>
                                </div>
                                </div>                 
                                <div class="row">
                                  <div class="col-lg-6">
    
                                  </div>
                                  <div class="col-lg-6">
                                      <div id="msg6"></div>
                                  </div>
                                </div>
                            <div class="mb-4 pb-2">
                              <div class="form-outline form-white">
                                <label class="form-label" for="form3Examplea3">Second student name</label>
                                <input type="text" id="tsn" class="form-control form-control-lg" placeholder="Student Name"disabled />
                                
                              </div>
                            </div>
          
                            
                            
                              </div>
                              
                              <div class="row"id="btn">
                                <div class="col-lg-4">
                                  <button type="button" id="btn2" class="btn btn-outline-warning">Change Room</button>
                                </div>
                                <div class="col-lg-8 mt-1">
                                     <div id="msg7"></div>
                                </div>
                              </div>
          
          
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
</body>
</html>
<script>
  $(document).ready(function(){
    $("#fsf").on("keyup",function(){
      var v=$(this).val();

      if(v.length>=3){
        console.log("hello");
        $.ajax({
          url:'roomchange2.php',
          type:'post',
          data:{v:v,a:1},
          success:function(data){
            var d=data;
            if(d=="not av"){
            //  $("#fsn").val("");
              $("#msg").html("Student not available");
              $("#btn1").prop("disabled",true);
              $("#fsn").val("");
            }
            else{

              $("#fsn").val(data);
            }
          }
        
      
        });
       
      }

      if(v.length<3){
        $("#msg").html("Minimum 3 number is required");
        $("#btn1").prop("disabled",true);
        $("#fsn").val("");
      }
      else{
        $("#msg").html("");
        $("#btn1").prop("disabled",false);
      }
      
    });

    $("#ssf").on("keyup",function(){
      var v=$(this).val();

      if(v.length>=3){
        console.log("hello");
        $.ajax({
          url:'roomchange2.php',
          type:'post',
          data:{v:v,a:1},
          success:function(data){
            var d=data;
            if(d=="not av"){
            //  $("#fsn").val("");
              $("#msg5").html("Student not available");
              $("#btn2").prop("disabled",true);
              $("#ssn").val("");
            }
            else{

              $("#ssn").val(data);
            }
          }
        
      
        });
       
      }



      if(v.length<3){
        $("#msg5").html("Minimum 3 number is required");
        $("#btn2").prop("disabled",true);
        $("#ssn").val("");
      }
      else{
        $("#msg5").html("");
        $("#btn2").prop("disabled",false);
      }
   
    });

    $("#tsf").on("keyup",function(){
      var v=$(this).val();

      if(v.length>=3){
        console.log("hello");
        $.ajax({
          url:'roomchange2.php',
          type:'post',
          data:{v:v,a:1},
          success:function(data){
            var d=data;
            if(d=="not av"){
            //  $("#fsn").val("");
              $("#msg6").html("Student not available");
              $("#btn12").prop("disabled",true);
              $("#tsn").val("");
            }
            else{

              $("#tsn").val(data);
            }
          }
        
      
        });
       
      }


      if(v.length>=3){
        console.log("hello");
        $.ajax({
          url:'roomchange2.php',
          type:'post',
          data:{v:v,b:1},
          success:function(data){
            console.log(data);
          }
        });
      }
      if(v.length<3){
        $("#msg6").html("Minimum 3 number is required");
        $("#btn2").prop("disabled",true);
        $("#tsn").val("");
      }
      else{
    
        $("#msg6").html("");
        $("#btn2").prop("disabled",false);
       
      }
      
    });
    $("#btn1").on("click",function(){

      var fsf=$("#fsf").val();
      var roomnu=$("#roomnu").val();
      var bad=$(".bad").is(":checked");
      var badv=$(".bad:checked").val();
    
      if(fsf==""){
        $("#msg").html("This field is required");
        
      }
      if(roomnu==""){
        $("#msg2").html("This field is required");
      }
      if(!bad){
        $("#msg3").html("This field is required");
      }
      if(fsf!="" || roomnu!="" || !bad){
        //return false;
        $("#btn1").prop("disabled",true);
      }

      $.ajax({
        url:'roomchange2.php',
        type:'post',
        data:{fsf:fsf,roomnu:roomnu,badv:badv,t:1},
        success:function(data){
          if(data=="true"){
            $("#msg4").html("Room Chnage Successfully");
            $("#msg4").css("color","green");
            setTimeout(function(){
            
            $("#msg4").html("");
            }, 3000);
          }
          else{
            $("#msg4").html("Something Went Wrong");
            $("#msg4").css("color","red");
            setTimeout(function(){
            
            $("#msg4").html("");
            }, 3000);

          }
        }
      });
      
    });

    $("#btn2").on("click",function(){
      var ssf=$("#ssf").val();
      var tsf=$("#tsf").val();

      if(ssf==""){
        $("#msg5").html("This Field Is Required");
      }
      if(tsf==""){
        $("#msg6").html("This Field Is Required");
      }
      if(ssf=="" || tsf==""){
        $("#btn2").prop("disabled",true);
      }

      if(ssf!="" && tsf!=""){
        $.ajax({
          url:'roomchange2.php',
          type:'post',
          data:{ssf:ssf,tsf:tsf,r:1},
          success:function(data){
            if(data=="true"){
                $("#msg7").html("Room Change Successfully");
                $("#msg7").css("color","green");
                setTimeout(function(){
            
            $("#msg7").html("");
            }, 3000);
            }
            else{
              $("#msg7").html("Something Went Wrong");
                $("#msg7").css("color","red");
                setTimeout(function(){
            
            $("#msg7").html("");
            }, 3000);
            }
          }
        });
      }
    });



    $("#roomnu").on("keyup",function(){
                var nu=$(this).val();
                if(nu.length>3){
                    $("#msg2").html("maximum input is 3");
                    $("#btn1").prop("disabled",true);  
                }
                if(nu.length<3){
                    $("#msg2").html("minimum 3 number require");
                    $("#btn1").prop("disabled",true);  
                }

                
                if(nu.length==3){
                    $("#msg2").html("");
                    $("#btn1").prop("disabled",false);  

                        if(nu>=101 && nu<=107 || nu>=201 && nu<=228 || nu>=301 && nu<=328 || nu>=401 && nu<=428 || nu>=501 && nu<=520){
                           
                        }
                        else{
                            $("#msg2").html("Please Insert valid room number");
                            $("#btn1").prop("disabled",true);   
                        }

                        var bad=$(".bad:checked").val();
                        if(bad==""){
                          //console.log("not checked");
                        }
                        else
                        {
                            if(nu>=101 && nu<=107 || nu>=201 && nu<=228 || nu>=301 && nu<=328 || nu>=401 && nu<=428 || nu>=501 && nu<=520){
                           
                            
                            if(nu>109){
                                    if(bad=="d" || bad=="e"){
                                        $("#msg2").html("That Has No Any Bad For This Room Number");
                                        $("#btn1").prop("disabled",true); 
                                        return false;
                                    }
                                    else{
                                        $("#btn1").prop("disabled",false);  
                                    }
                              
                            //console.log(bad);  
                            $.ajax({
                                url:'roomchange2.php',
                                type:'post',
                                data:{nu:nu,bad:bad,a:1},
                                success:function(data){
                                    console.log(data);
                                    if(data=="no"){
                                        $("#msg2").html("Selected room number and bad is already allocated");
                                        $("#btn1").prop("disabled",true); 
                                    }
                                }
                            });
                        }
                    }
                        }
                }

              

            });
            
                    
            $(".bad").on("change",function(){
                       $("#msg3").html("");
                        var bad=$(".bad:checked").val();
                            var nu=$("#roomnu").val();
                        // console.log(nu);

                        if(nu.length==3){
                                if(nu>109){
                                    if(bad=="d" || bad=="e"){
                                        $("#msg3").html("That Has No Any Bad For This Room Number");
                                        $("#btn1").prop("disabled",true); 
                                        return false;
                                    }
                                    else{
                                        $("#msg2").html("");
                                        $("#btn1").prop("disabled",false);  
                                    }
                                }


                            if(nu.length==3){
                                $.ajax({
                                url:'roomchange2.php',
                                type:'post',
                                data:{nu:nu,bad:bad,b:1},
                                success:function(data){
                                    console.log(data);
                                    if(data=="no"){
                                                    $("#msg3").html("Selected room number and bad is already allocated");
                                                    $("#btn1").prop("disabled",true); 
                                                }
                                                else{
                                                    $("#msg3").html("");
                                                    $("#msg2").html("");
                                                    $("#btn1").prop("disabled",false); 
                                                }
                                }
                            });
                        }
                            }
                        
                        });
                    




  });
</script>