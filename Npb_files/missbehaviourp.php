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
        label{
            font-weight: bold;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        input[type=text]{
            border-radius: 10px;
            border: 2px solid black;
            margin-top: 10px;
            background-color: white;
            height:95%;
            padding-left: 10px;
            width:247px;
        }
        input[type=radio]{
            margin: 10px;
           
            -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);
        }
        input[type=checkbox]{
            transform: scale(1.5);
        }
        font{
            font-weight: bold;
        }
        button{
            margin-bottom: 20px;
        }
        .container{
            width: 70%;
            border-radius: 30px;
        }
        /* @media all and (max-width:968px){
            #col3{
                white-space: pre;
                margin-left: -72px;
                margin-top: -20px;
            }
            #col4{
                white-space: pre;
                margin-left:-75px;
                margin-top: -40px;
            }
            input[type=radio]{
                margin-left: -19px;
                margin-top: -10px;
            }
            input[type=checkbox]{
                margin-left: -11px;
                margin-top: -20px;
            }
            input[type=text]{
                height: 60%;
                width: 100%;
            }
            #btn1{
                margin-left: 10px;
                margin-bottom: -58px;
            }
            #btn2{
                margin-left: 135px;
            }
            #icon{
                margin-left: 199px;
                margin-top: -70px;
            }
            h3{
                white-space: pre;
                margin-left: -136px;
            }
            #msg{
                margin-left: 80px;
            }
        } */
        h3{
            font-weight: bold;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        #icon{
            margin-top:22px;
            font-size: 29px;
            
        }
        
    </style>
</head>
<body>
    <div class="container bg-info mt-5 ">
        <div class="row">
            <div class="col-lg-11"></div>
            <div class="col-lg-1">
                <i class="fa-solid fa-xmark"id="icon"></i>
           </div>
        </div>
        <div class="row">
           <div class="col">
               <h3 class="mt-3"> &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Add Student Panelty</h3>
           </div>
           
        </div>
        <div class="row mt-5">
            <div class="col-lg-2"></div>
            <div class="col">
                <label>Full Name:</label>
                &nbsp<label>DIYORA BIRAJ B.</label>
            </div>
            
           
        </div>
        
        <div class="row mt-3">
            <div class="col-lg-2"></div>
            <div class="col">
                <label>Room NO.</label>
                &nbsp <label>105</label>
            </div>
           
        </div>
        
        <div class="row mt-3">
            <div class="col-lg-2"></div>
            <div class="col"id="col3">
                <label>Panelty For...</label><br>
                &nbsp &nbsp  <input type="checkbox"class="mt-3"> &nbsp<font>Room Clean</font>&nbsp &nbsp
                &nbsp &nbsp  <input type="checkbox">&nbsp <font>I Card</font>&nbsp &nbsp
                &nbsp &nbsp  <input type="checkbox"> &nbsp<font>Destroyed Things</font>&nbsp &nbsp
                <div id="msg">hello</div>
            </div>
            
        </div>
        <div class="row mt-3">
            <div class="col-lg-2"></div>
            <div class="col"id="col4">
                <label>Panelty Value...</label><br>
                &nbsp &nbsp     <input type="radio"name="p"value="p1"><font>50</font>
                &nbsp &nbsp     <input type="radio"name="p"value="p2"><font>100</font>
                &nbsp &nbsp     <input type="radio"name="p"value="p3"><font>200</font>
                &nbsp &nbsp     <input type="radio"name="p"value="p4"><font>300</font>
                &nbsp &nbsp     <input type="radio"name="p"value="p5"><font>500</font>
                &nbsp &nbsp     <input type="radio"name="p"value="p6"><font>None</font>
            </div>
            
        </div>
        <div class="row mt-4">
            <div class="col-lg-2"></div>
            <div class="col">
                <label>Other Details about panalty</label>
                &nbsp<input type="text" name="n3s"placeholder="OTHER DETAILS">
            </div>
            
        </div>
        <div class="row mt-5">
            <div class="col-lg-4"></div>
            <div class="col">
                &nbsp &nbsp &nbsp &nbsp<button type="submit"class="btn btn-primary mrl-5" id="btn1">INSERT</button>
                &nbsp &nbsp &nbsp &nbsp<button type="clear"class="btn btn-danger  pr-10 btn-md" class="rebtn" id="btn2">RESET</button>
            </div>
            
        </div>
    </div>
</body>
</html>