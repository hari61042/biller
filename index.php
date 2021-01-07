<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Our Biller</title>
    <meta name="description" content="This is an example of a meta description.">
    <link rel="stylesheet" type="text/css" href="css/theme.css">

    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script src="//cdn-5ce4a003f911c80f50818892.closte.com/script.js" async></script>
  </head>
  <body>
      <div align="center">
        <h1>Welcome</h1>
      <?php
      $hour= date('H');

      if ($hour >= 20) {
          $greetings = "Good Night";
      } elseif ($hour >=17) {
        $greetings = "Good Evening";
      } elseif ($hour >=12) {
        $greetings = "Good Afternoon";
      } elseif ($hour < 12) {
        $greetings = "Good Morning";
      }
      echo "<h2 >$greetings</h2>";
    
    ?><br>
      <br>
      <br>
      <button class="button button1" name="addBill" type="button" onClick="window.location = 'addBill.php'" >Add Bill</button>
      <button class="button button2" name="viewBill" type="button" onClick="window.location = 'viewBill.php'" >View Bill</button>    
          
      </div>
  </body>
</html>

