<?php
include 'database.php';
$sql1="SELECT * FROM pack WHERE package='BASIC'";
$sql2="SELECT * FROM pack WHERE package='STANDARD'";
$sql3="SELECT * FROM pack WHERE package='PREMIUEM'";
$sql4="SELECT * FROM pack";
$results1=mysqli_query($conn,$sql1);
$results2=mysqli_query($conn,$sql2);
$results3=mysqli_query($conn,$sql3);
$results4=mysqli_query($conn,$sql4);
$row1=mysqli_num_rows($results1);
$row2=mysqli_num_rows($results2);
$row3=mysqli_num_rows($results3);
$row4=mysqli_num_rows($results4);
?>

<html>
    <head>
    <title>Admin Dashboard</title>
    <script src="https://kit.fontawesome.com/36af12e56f.js" crossorigin="anonymous"></script>
  </head>
    <body>
        <div class="side-menu">
            <div class="brand-name">
                <h1>Weddo</h1>
            </div>
            <ul>
                <li> <a href="dashboard.html"> <i class="fa fa-home"></i></a>&nbsp;Dashboard</li>
                <li> <a href="#"> <i class="fa fa-file-text"></i></a>&nbsp; Blogs & Events</li>
                <li>  <a href="#"><i class="fa fa-users"></i></a>&nbsp;Clients</li>
                <li> <a href="#"> <i class="fa fa-check-circle"></i></a>&nbsp;Services</li>
                <li> <a href="#"> <i class="fa fa-picture-o"></i></a>&nbsp;Gallery</li>
            </ul>
        </div>
        <div class="dash">
            <div class="head">
                <div clas="nav">
                    <h3>WELCOME TO ADMIN PANEL</h3>
                    </div>
                    <form action="logout.php" method="POST">
                   <button class="log" name="logout">LOGOUT</button>
                   </form>
                
            </div>
            <div class="card">
                <div class="box">
                    <p>3<br><br><span>Total customers</span></p>
                    <i class="fa fa-user"></i>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <p <?php echo $row4; ?>>5<br><br><span>Total Bookings</span></p>
                    <i class="fa fa-book"></i>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <p>4<br><br><span>Photos</span></p>
                    <i class="fa fa-picture-o"></i>
                </div>
            </div>
            <div class="card">
                <div class="box">
                <p>5<br><br><span>Blogs</span></p>
                    <i class="fa fa-file-text" ></i>
                </div>
            </div>
          
        
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
                font-family: sans-serif;
            }
            body{
                min-height: 100vh;
            }
            li{
                list-style: none;
            }
            h2{
                color:#444;
            }
            .side-menu{
                position:fixed;
                background: #fc036b;
                width:20vw;
                height: 100%;
                min-height: 100vh;
                display:flex;
                flex-direction: column;
            }
            .side-menu .brand-name{
                height: 10vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .side-menu li{
                font-size: 24px;
                padding:10px;
                color:#fff;
                display: flex;
                align-items: center;
                cursor: pointer;
            }
            .side-menu li:hover{
                background: #ffff;
                color:#fc036b;
            }
            
            .side-menu li a i{
                color:black;
                
               
            }
            .dash{
                position:absolute;
                right:0;
                width:80vw;
                height: 100vh;
                background:#fff;
            }
            .dash .head{
                font-family: serif;
                display: flex;
                justify-content: space-between;
                align-items: center;
                align-content: center;
                padding:0px 60px;
                width: 80vw;
                height: 10vh;
                background: #ffff;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            }
            .dash .head .nav{
                width: 90%;
                display: flex;
               
                
            }
            
            h3{
                font-size: 30px;
                color:#fc036b;
                align-items: justify;
            }
            
            .dash .card{
                width:25%;
                min-height:70px;
                float:left;
                padding-top: 50px;
                
            }
            .box{
                width:80%;
                height: 20vh;
                background-color:#fc036b;
                margin-left: 10px;
                padding:10px;
                cursor: pointer;
                border-radius: 7px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
            }
            .box p{
                font-size: 35px;
                color:white;
                font-weight: bold;
                line-height: 20px;
                padding-left:10px;
                margin-top:20px;
                display: inline-block;
            }
            .box p span{
                font-size:25px;
                font-weight: 400;
                color:#fff;
                padding-top: 15px;
                float: left;
            }
            .card .box a{
                color:#fff;
                font-size: 25px;
                font-weight: 300;
                align-items: center;
                padding-top:20px;
                float: auto;
            }
            .card .box i{
                color:#fff;
                font-size: 30px;
                float: right;
                display:flex;
                justify-content: space-around;
                align-items: center;
                padding-bottom:30px;
            }

            .log{
               display: flex;
               justify-content: space-between;
               align-items: center;
               padding:2px 10px;
               float:right;
               cursor: pointer;
            }
            button{
                border: none;
                border-radius: 10px;
                color:white;
                background: #fc036b;
                height: 7vh;
                font-size: 15px;
                font-weight:bold;
                
            }
            
        </style>
    </body>
</html>
