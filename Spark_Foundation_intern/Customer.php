<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Easy Banking System - The Spark Foundation</title>
    <script src="https://use.fontawesome.com/07d62e5a9f.js"></script>
    <style>
    body
    {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-color: hsla(281, 75%, 70%, 0.3);
            }
        

           .main-img {
            width:1000px;
            height:500px;
            position:absolute;
            left:300px;   
        }
          .rounded-circle{
           width:150px;
           height:150px;
           position: absolute;
           top:10px;
           right:2px;
           
    
          }  
        .container{
           position:absolute;
           top:100px;
           left:80px;
        }  


        .container a{
             position: absolute;
             margin-right: 40px;
    
        }
        h2{
            color:rgb(92, 5, 73);
            text-shadow: 1px 2px 2px #000;
         }

        .header{
           color:bisque;
           text-shadow: 4px 4px 4px #000;
           font-size: 25px;

         }


        #footer{
            width:100%;
            margin:auto;
            text-align: center;
            position:absolute;
            top:1800px;
         }

        table,th,td{

         border:2px solid black;
         margin:auto;
        }
        table{
          width:70%;
          font-size: 25px;
          font-weight: 30px;
        }
        .cust{
         text-align: center;
         font-size: 30px;
         font-weight:60px;
         padding: 50px;
        }

        .hovera:hover {
         background-color: whitesmoke;
        }
</style>

 
</head>
<body>
      <?php
          include 'navbar.php';
       ?>
       <div  class="container" >
            <p class="cust">View all Customers</p>
            <table class="table table-dark table-hover" >
                <thead>
                    <tr>
                        <th scope="col" class="disp">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col" class="disp">Email</th>
                        <th scope="col">Current Balance</th>
                        <th scope="col">Info</th>
                    </tr>
                </thead>
                <?php

                 // Username is root
                $user = 'root';
                $password = ''; 
  
                // Database name is mysql
                $database = 'mysql'; 
  
               // Server is localhost with
               // port number 3306
               $servername='localhost:3306';
               $mysqli = new mysqli($servername, $user, $password, $database);
  
               // Checking for connections
               if ($mysqli->connect_error) {
                      die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
               }

                
                // SQL query to select data from database
                $sql = "SELECT * FROM customers";
                $result = $mysqli->query($sql);
                $mysqli->close(); 
                
                $count=-1;
                // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
                    $count = $count + 1;
                ?>
            <form action="view ac (<?php echo $count; ?>).php" method="post">
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['balance'];?></td>
                <td><button type="submit" name="view" value="view">View</button></td>
            </tr>
            </form>
            <?php
                }
             ?>
                </div>
 
            <div class="atm">
                <img src="cust.png" class="rounded-circle" alt="card">
            
            </div>
         
            <div id="footer" >
               <div>
                <footer>
                <i class="social-icon fa fa-twitter" aria-hidden="true"></i>
                <i class="social-icon fa fa-facebook-square" aria-hidden="true"></i>
                <i class="social-icon fa fa-instagram" aria-hidden="true"></i>
                <i class="social-icon fa fa-envelope" aria-hidden="true"></i>
                <p>© Copyright 2020 SCB.</p>   
           </footer>
        </div>
        </div>
        
        
    
        </body>
        </html>