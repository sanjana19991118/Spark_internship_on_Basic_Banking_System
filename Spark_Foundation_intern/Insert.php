<?php
$mysqli = mysqli_connect("localhost:3306","root","","mysql");
if($mysqli === false){
            die("ERROR: Could not connect." . mysqli_connect_error());
        }
$receiver = $_REQUEST['name2'];
$amt = $_REQUEST['amount'];
$sql = "UPDATE trans SET receiver='$receiver',amount=$amt WHERE receiver='Geetanjali' AND amount=0;";
$transfer = mysqli_query($mysqli,$sql);
if ($transfer) {
        echo "";
}
else {
         echo "ERROR" . mysqli_error($mysqli);
}
$up = "UPDATE customers,trans set balance=balance-$amt where customers.name = trans.sender and balance=customers.balance";
$query = mysqli_query($mysqli,$up);
mysqli_close($mysqli);
?>

<?php
$username="root";
$password="";
$database="mysql";
$mysqli = new mysqli('localhost:3306',$username,$password,$database);
if($mysqli->connect_error)
{
        die("Connection Failed (" . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}
       $sql = "SELECT * FROM trans";
       $result = $mysqli->query($sql);
       $mysqli->close();
?>
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

     .container a{
      position: absolute;
      margin-right: 40px;
    
     }
    h2{
    color:rgb(92, 5, 73);
    text-shadow: 1px 2px 2px #000;
  }

h1{
    color:black;
    text-align:right;
    text-align:center;
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
}
table{
    width:50px;
    font-size: 20px;
    font-weight: 25px;
}
.cust{
    text-align: center;
    font-size: 30px;
    font-weight: 40px;
    padding: 40px;
}


.button{
    position:absolute;
    left:500px;
    list-style-type: none;
}

.button li a{
    border: 2px solid black;
    background-color:#282828;
    text-decoration:none;
    color:#fff;
    border-radius:2px;
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
        <h1>Transaction History</h1>   
        <table class="table table-dark table-hover">
                <tr>
                    <th>Transaction From</th>
                    <th>Transaction To</th>
                    <th>Amount</th>
                </tr>
                <?php
                    while($rows=$result->fetch_assoc())
                    {
                ?>        
                <tr>
                    <td><?php echo $rows['sender'];?></td>
                    <td><?php echo $rows['receiver'];?></td>
                    <td><?php echo $rows['amount'];?></td>
                </tr>
                <?php
                    }
                ?>
        </table>  
        <br> 
        <ul class="button">
            <li><a href="http://localhost/18CS63/Spark/Customer.php">Back to Customer page</a></li>
        </ul>  
    </body>
</html>