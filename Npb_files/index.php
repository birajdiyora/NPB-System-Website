<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="boostrap\bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <script src="jquery-3.6.0.min.js"></script>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
        }
        body{
            background-color: rgb(159, 189, 189);
        }
        .container{
            margin-top: 150px;
        }
        .row{
            background-color: rgb(210, 212, 226);
            border-radius: 30px;
            padding: 20px;
        }
        img{
            border: 2px solid black;
            border-radius: 30px;
            margin-top: 25px;
        }
        .col-lg-7{
            
            padding: 10px;
            padding-left: 24px;
        }
        a{
            padding-left: 30px;
            text-decoration: none;
            font-size: 20px;
        }
        h3{
            padding-left: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid black;
        }
        .form-row .col-lg-7 ::placeholder{
            font-weight: bold;
            color: rgb(1, 10, 27);
        }
        .btn1{
            margin: 3px;
            margin-left: -5px;
            padding: 4px;
            padding-left: 80px;
            padding-right: 80px;
            background-color: rgb(31, 26, 26);
            color: aliceblue;
            font-size: 20px;
            border-radius: 10px;
        }
        .btn1:hover{
            background-color:  rgb(75, 62, 62);
            color:white;   

        }
        #loginbtn{
           height:45px;
           font-size: 20px;
           
        }
        #loginbtn:hover{
     
            background-color: rgb(117, 131, 241);
            border: none;
            
        }
        #submit:hover{
     
            background-color: rgb(117, 131, 241);
            border-color: rgb(117, 131, 241) ;
            
        }
        #am{
            color:red;
        }
        #co2{
            display:none;
            /* margin-left:20%;
             */
        }
        #lock{
            height:70%;
            width:100%;
            /* margin-left:50px; */
            margin-top:50px;
            

        }
        #se2{
            /* width:70%; */
    
        }
        #submit{
          height:44px;
          width:20px;
          font-size:20px;
        }
        #am,#am2,#am3,#am4,#am5,#am6,#am7,#am8,#am9{
            color:red;
            font-style:italic;
            font-weight:bold;
        }
        #sulogin{
            position:absolute;
            margin-top:-151px;
            width:100%;
            display:none;
        }
        #erlogin{
            position:absolute;
            margin-top:-151px;
            width:100%;
            display:none;
        }
        #supwd{
            position:absolute;
            margin-top:-151px;
            width:100%;
            display:none;
        }
        #erpwd{
            position:absolute;
            margin-top:-151px;
            width:100%;
            display:none;
        }
    </style>
  </head>

  <body>
      
  <div class="alert alert-success alert-dismissible fade show" role="alert" id="sulogin">
  <strong>Login Success!</strong> You can redirect to Dashboard automatically.
 
</div>

   
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="erlogin">
  <strong>Login Failed!</strong> Please Enter Uername and Password Correct.
  
</div>

<div class="alert alert-success alert-dismissible fade show" role="alert" id="supwd">
  <strong>Password change Successfuly!</strong> Please Login with your new password.

</div>

   
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="erpwd">
  <strong>Password change Failed!</strong> Please Enter Uername and old Password Correct.
 
</div>


    <section class="form my-4 mx-5">
        <div class="container" id="co">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="sardardham.jpeg" class="img-fluid"alt="not">
                </div>
                <div class="col-lg-7">
                    <form>
                        <h3>Login Here</h3>
                        <div class="form-row">
                            <div class="col-lg-7">
                               
                                <input type="text"name="uname" id="uname" placeholder="USER NAME"class="form-control">
                                <div id="am"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password"name="pwd" id="pwd" placeholder="NEW PASSWORD"class="form-control">
                                <div id="am2"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="submit"name="login" id="loginbtn" value="Login"class="btn btn-dark w-50 " id="loginbtn">
                            </div>
                        </div>

                            <a href="#" id="re">Resest Password ? </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
        <section class="form my-4 mx-5" id="se2">
        <div class="container" id="co2">
            <div class="row no-gutters">
                <div class="col-lg-3">
                    <img src="lock.jpg" class="img-fluid mb-5"alt="not" id="lock">
                </div>
                <div class="col-lg-9">
                    <form class="mt-4">
                        
                        <h3>Reset password here</h3>
                        <div class="form-row">
                            <div class="col-lg-7">
                               
                                <input type="text"name="uname" id="olduname" placeholder="USER NAME"class="form-control">
                                <div id="am3"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password"name="pwd" id="oldpwd" placeholder="OLD PASSWORD"class="form-control">
                                <div id="am4"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password"name="pwd" id="newpwd" placeholder="NEW PASSWORD"class="form-control">
                                <div id="am5"></div>
                                <div id="am6"></div>
                                <div id="am7"></div>
                                <div id="am8"></div>
                                <div id="am9"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="submit"name="login" id="submit" value="Submit"class="btn btn-dark w-50 " id="loginbtn">
                            </div>
                        </div>

                            <a href="#" id="lo">Login here? </a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="boostrap\bootstrap-5.0.2-dist\js\bootstrap.min.js"></script>

  
  </body>
</html>

<script>
    $("#uname").focus();
    $(document).ready(function (){
        $("#re").on("click",function(){
            console.log("hello");
            $("#co2").css("display","block");
            $("#co").css("display","none");
            $("#sulogin").css("display","none");
            $("#erlogin").css("display","none");
        });
        $("#lo").on("click",function(){
            $("#co2").css("display","none");
            $("#co").css("display","block");
            $("#supwd").css("display","none");
            $("#erpwd").css("display","none");
        });
        $("#loginbtn").on("click",function(){
            event.preventDefault();

           // console.log("hello");
           var uname=$("#uname").val();
           var pwd=$("#pwd").val();

           if(uname.lenght<=0 || pwd.length<=0){
            $("#am2").html("All field is required");        
            $("#loginbtn").prop("disabled",true);
            return false;
           }
           else{
               $.ajax({
                   url:'loginsystem.php',
                   type:'post',
                   data:{uname:uname,pwd:pwd,a:1},
                   success:function(data){
                   //console.log(data);
                        if(data=="true"){
                            $("#erlogin").css("display","");
                            $("#sulogin").css("display","block");
                            $("#sulogin").delay(5000).fadeOut(500);
                            window.location.replace("home.php");
                        }
                        else{
                            $("#sulogin").css("display","");
                            $("#erlogin").css("display","block");
                            $("#erlogin").delay(5000).fadeOut(500);
                        }
                   }
               });
           }
           
        });

        $("#uname").on("keyup",function(){
            var v=$(this).val();
            if(v.length<=0){
                $("#am").html("This field is required");
                $("#loginbtn").prop("disabled",true);
                return false;
            }
            else{
                $("#am").html("");
                $("#loginbtn").prop("disabled",false);
            }
        });

        $("#pwd").on("keyup",function(){
            var v=$(this).val();
            if(v.length<=0){
                $("#am2").html("This field is required");
                $("#loginbtn").prop("disabled",true);
            }
            else{
                $("#am2").html("");
                $("#loginbtn").prop("disabled",false);
            }
        });
       

        $("#submit").on("click",function(){
            event.preventDefault();

           // console.log("hello");
           var olduname=$("#olduname").val();
           var oldpwd=$("#oldpwd").val();
           var newpwd=$("#newpwd").val();
          
           var ucase = new RegExp("[A-Z]+");
            var lcase = new RegExp("[a-z]+");
            var num = new RegExp("[0-9]+");

           if(olduname.lenght<=0 || oldpwd.length<=0 || newpwd.length<=0){
            $("#am5").html("All field is required");        
            $("#submit").prop("disabled",true);
            return false;
           }
           else{
               $.ajax({
                   url:'loginsystem.php',
                   type:'post',
                   data:{olduname:olduname,oldpwd:oldpwd,newpwd:newpwd,b:1},
                   success:function(data){
                      console.log(data);
                        if(data=="true"){
                            $("#erpwd").css("display","none");
                            $("#supwd").css("display","block");
                            $("#supwd").delay(5000).fadeOut(500);
                        }
                        else{
                            $("#supwd").css("display","none");
                            $("#erpwd").css("display","block");
                            $("#erpwd").delay(5000).fadeOut(500);
                        }
                   }
               });
           }
       
           
        });

        $("#olduname").on("keyup",function(){
            var v=$(this).val();
            if(v.length<=0){
                $("#am3").html("This field is required");
                $("#submit").prop("disabled",true);
                return false;
            }
            else{
                $("#am3").html("");
                $("#submit").prop("disabled",false);
            }
        });

        $("#oldpwd").on("keyup",function(){
            var v=$(this).val();
            if(v.length<=0){
                $("#am4").html("This field is required");
                $("#submit").prop("disabled",true);
                return false;
            }
            else{
                $("#am4").html("");
                $("#submit").prop("disabled",false);
            }
        });

        $("#newpwd").on("keyup",function(){
            var v=$(this).val();
            var ucase = new RegExp("[A-Z]+");
            var lcase = new RegExp("[a-z]+");
            var num = new RegExp("[0-9]+");
            var sp=new RegExp("[!@#$^&*()_|?]+");
            if(v.length<8){
               
                $("#am5").html("Password must be 8 character long");
               
            }
            else{
                $("#am5").html("");
            }

	      if(!ucase.test(v)){
            $("#am7").html("you must Enter 1 Uppercase letter");
              
          }
          else{
                $("#am7").html("");
            }
          
          if(!lcase.test(v)){
            $("#am8").html("you must Enter 1 Lowercase letter");
                
          }
          else{
                $("#am8").html("");
            }
          
          if(!num.test(v)){
            $("#am6").html("you must Enter 1 Number");
              
          }
          else{
                $("#am6").html("");
            }

            if(!sp.test(v)){
            $("#am9").html("you must Enter 1 Special character");
             
          }
          else{
                $("#am9").html("");
            }
          

            if(v.length<=0){
                $("#am5").html("This field is required");
               
              
            }
            else{
              //  $("#am5").html("");
               // $("#submit").prop("disabled",false);
            }

            if( v.length<8 || !ucase.test(v) || !lcase.test(v) || !sp.test(v) || !num.test(v)){
                $("#submit").prop("disabled",true);
                return false;
            }
            else{
                $("#submit").prop("disabled",false);
            }
        });


    });
</script>

