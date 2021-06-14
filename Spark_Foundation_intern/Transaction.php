<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Easy Banking System - The Spark Foundation</title>
    <script src="https://use.fontawesome.com/07d62e5a9f.js"></script>
    <style>
    body{
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
       top:100px;
       left:1%;
    
      }

     .container p{
      position: absolute;
      top:120px;
      left:550px;
    
     }
   
h1{
    color:black;
    text-align:right;
    margin-right:10px;
    padding:10px 10px 10px 10px;
    font-size: 25px;
   
}
.header{
    color:bisque;
    text-shadow: 4px 4px 4px #000;
    font-size: 25px;

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
    font-weight: 60px;
    padding: 40px;
}

form{
    position:absolute;
    top:250px;
    left:500px;
}

.btn1{
    position:absolute;
    left:600px; 
}

.hovera:hover {
    background-color: whitesmoke;
}

#footer{
    width: 100%;
    text-align:center;
    position:absolute;
    top:1000px;
    right:100px;
}
    </style>
     </head>
      <body>
      <?php
          include 'navbar.php';
       ?>
        <h1>Fluent in Finance</h1>
        
        <div class="container"> 
        <p class="cust">Transfer Money</p>
        

        <div class="atm">
            <img src="Trans.jpg" class="rounded-circle" alt="card">
            
        </div>
        <br>
        <br>
        <form action="Insert.php" method="post">
        <label for="To">Transfer Money(to customer) : </label>
        <input type="text" id="name2" name="name2" placeholder="Name">
        <br>
        <br>
        <label for="amount">Amount(Rs.) : </label>
        <input type="number" id="amount" name="amount" placeholder="in Rs.">
        <br>
        <div class="btn1">
            <button class="btn btn-dark"  type="submit" name="transfer" value="transfer">Transfer</button>
        </div>
        </form>
</body>
</html>



        