<html>
    <head>
        <title>Home</title>
      <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>

<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>


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
        
    </style>

</head>
<body>
        <!-- MDB -->
    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>

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


  



    <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel" >
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselExampleIndicators"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleIndicators"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleIndicators"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active" >
      <img src="image/sardardham.jpeg" class="d-block w-100" alt="Wild Landscape" style="height:793px;"/>
    </div>
    <div class="carousel-item">
      <img src="image/sdham.png" class="d-block w-100"  style="height:793px;"/>
    </div>
    <div class="carousel-item"  style="background-size: cover; background-position: center;">
      <img src="image/sardardham3.png" class="d-block w-100" alt="Exotic Fruits" style="height:793px;"/>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </body>
</html>
