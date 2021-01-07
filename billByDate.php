<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daily Bill</title>
    <meta name="description" content="This is an example of a meta description.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="//cdn-5ce4a003f911c80f50818892.closte.com/script.js" async></script>
      
      
    <style>
        .button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

        .button:hover {background-color: #3e8e41}

        .button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #4CAF50;
          color: white;
        }
      </style>
  </head>
  <body>    
      <div align="right">
            <button  name="addBill" type="button" onClick="window.location = 'index.php'" style="font-size:24px"><img src="home.png" style="height:20px;width:20px; align:center"/>Home</button>
      </div>
      <div align="center">
        <h1>Welcome</h1>
          <h2 style="color:Tomato;">Our Daily Bill is Here</h2>
      <br>
      <br>
      <br>
           <form role="form" method="POST" action="#">
            
                <div class="">
                    <label for="date" style="color:Tomato;" align="left">Select Required Bill Date:</label>  <br><br>
                    <input type="date" id="bDate" name="bDate" required ><br>
                </div>  
               <br>
                <br>
                <br>
                <input type="submit" name="getBill" class="button button1" value="Generate Bill"/>
          </form>
          
      </div>
  </body>
</html>

<?php

    if(isset($_POST['getBill']))
    {
        $date=$_POST['bDate'];
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
            //Getting Data from The Database the data into database
            echo "<h2 style='color:Tomato';>Selected Date</h2>";
            
            echo "\n$date\n\n<br><br>";
            $result = mysqli_query($conn,"SELECT * FROM bill where date='$date'");
            
            echo "<table border='2' id='customers'>
                        <tr>
                        <th style='text-align:center'>Purpose</th>
                        <th style='text-align:center'>Amount</th>
                        </tr>";
                    $sum=0;
                    while($row = mysqli_fetch_array($result))
                      {
                      echo "<tr>";
                      echo "<td style='text-align:center'>" . $row['purpose'] . "</td>";
                      echo "<td style='text-align:right'>" . $row['price'] . "</td>";
                      echo "</tr>";
                        $sum+=$row['price'];
                      }
                        echo "<tr>";
                      echo "<td style='text-align:center;' > Total Price </td>";
                      echo "<td style='text-align:right' >" . $sum . "</td>";
                      echo "</tr>";
                    echo "</table>";
            $conn->close();
        }
    }
?>
