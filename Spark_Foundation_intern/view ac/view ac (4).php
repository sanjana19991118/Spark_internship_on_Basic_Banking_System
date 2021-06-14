<?php
$username="root";
$password="";
$database="mysql";
$mysqli = new mysqli('localhost:3306',$username,$password,$database);
if($mysqli->connect_error)
{
        die("Connection Failed (" . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}
           $sql1 = "INSERT into trans VALUES ('ramya','Geetanjali',000)";
           $query = mysqli_query($mysqli,$sql1);
       $sql = "SELECT * FROM customers where name = 'ramya' ";
       $result = mysqli_query($mysqli,$sql);
       if ($result) {
        echo "";
        }
        else {
         echo "ERROR" . mysqli_error($mysqli);
}
$rows=mysqli_fetch_assoc($result);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
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
        .btn{
            position:absolute;
            left:500px;
        }
        .btn a{
            border: 2px solid black;
            background-color:#282828;
            text-decoration:none;
            color:#fff;
            border-radius:2px;      
        }
        .hovera:hover {
         background-color: whitesmoke;
        }
</style>

 
</head>
<body>
<nav class="navbar  bg-primary">
        <span class="navbar-brand mb-0 h1"><h2>Spark Co-operative bank</h2></span>
        <h1 class="header">The Next Stage In Banking</h1>
</nav>
       <div  class="container" >
            <p class="cust">View Customer</p>
            <table class="table table-dark table-hover" >
                <thead>
                    <tr>
                        <th scope="col" class="disp">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col" class="disp">Email</th>
                        <th scope="col">Current Balance</th>
                       
                    </tr>
                </thead>
    
           
                <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['balance'];?></td>
                </tr>
                </table>
          <br><br>
          <div class="btn">
          <a href="Transaction.php" >Transfer Money</a>
          </div>



          <div class="atm">
                <img src="cust.png" class="rounded-circle" alt="card">
            
            </div>
          <br>

          <div id="footer" >
               <div>
                <footer>
                <i class="social-icon fa fa-twitter" aria-hidden="true"></i>
                <i class="social-icon fa fa-facebook-square" aria-hidden="true"></i>
                <i class="social-icon fa fa-instagram" aria-hidden="true"></i>
                <i class="social-icon fa fa-envelope" aria-hidden="true"></i>
                <p>© Copyright 2020 SCB.</p>   
           </footer>
       </body>
</html>