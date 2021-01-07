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
</style>
  </head>
  <body>
      <div align="right">
            <button  name="addBill" type="button" onClick="window.location = 'index.php'" style="font-size:24px"><img src="home.png" style="height:20px;width:20px; align:center"/>Home</button>
      </div>
      <div align="center">
        <h1>Welcome</h1>
      <br>
      <br>
      <br>
      <button class="button" name="byDate" type="button" onClick="window.location = 'billByDate.php'" >By Date</button>
      <button class="button" name="byMonth" type="button" onClick="window.location = 'billByMonth.php'" >Monthly</button>    
          
      </div>
  </body>
</html>

