
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Biller</title>
    <meta name="description" content="This is an example of a meta description.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/theme.css">

    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script src="//cdn-5ce4a003f911c80f50818892.closte.com/script.js" async></script>
  </head>
  <body padding=20px>
        <div align="right">
            <button  name="addBill" type="button" onClick="window.location = 'index.php'" style="font-size:24px"><img src="home.png" style="height:20px;width:20px; align:center"/>Home </button>
      </div>
        <h2 style="color:Tomato;">Add The bill</h2>
        <form role="form" method="POST" action="#">
            
                <div class="">
                    <label for="date" style="color:Tomato;" align="left">Date</label>  <br>
                    <input type="date" id="bDate" name="bDate"><br>
                </div>    
                <br><br>
                <div class="">
                    <label for="fname" style="color:Tomato;">Amount</label>  <br>
                    <input type="number" id="amount" name="amount">   <br>
                </div>
                <br><br>
                <div class="">
                    <label for="lname" style="color:Tomato;">Description/ Purpose</label> <br>
                    <input type="text" id="purpose" name="purpose"><br>
                </div>
            
            <br><br>
            
                    <input type="submit" class="button button1" name="addBill" value"Add Bill">
          </form>   
  </body>
</html>

<?php
    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
    if ($android== true) 
    { 
        header('Location: addBill.php');
    }
    if(isset($_POST['addBill'])){
                $date=$_POST['bDate'];
                $amount=$_POST['amount'];
                $purpose=$_POST['purpose'];
        
        /*Defining the database*/
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "house_expenses";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
        if($conn->connect_error){
        die('Connection Failed:'.$conn->connect_error);
        }
        else
        {   
             
			//echo "<h2>successfully Connected<h2>"."\n";
            //Inserting the data into database
		      $sql = "INSERT INTO bill (date, price, purpose)
								VALUES ('$date', '$amount','$purpose')";
            if ($conn->query($sql) === TRUE) {
			     
                echo '<script>alert("Bill Added Successfully...!!")</script>';
		      //Redirect using the Location header.
		      //    header('Location: success.html');
 
		
            }
            else {
                echo "<h2>Bill Failed to Add..</h2>"."\n"."<br>";
			 //Redirect using the Location header.
			//header('Location: fail.html');; //$conn->error;
		      }
            $conn->close();
        }	

    }
?>