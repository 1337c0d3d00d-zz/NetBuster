<html>
<head>
    <title> NetBuster </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection"/>
    <!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
</head>


<body background="nb_background.jpg">


<p align=center>
<br><br><br><br><br>
<font size=+1 color=#ff0000>NetBuster Internet Selector</font><br><br><br>

<?php if ($_GET["is_encrypted"] == 2) 
  { ?> 
    <form action="wan_connect.php" method="post">    
    <font color=#ff0000>Enter the password for <?php echo $_GET["ssid"] ?>:</font> 
    <input type="password" name="password"> 
    <input type="hidden" name="ssid" value="<?php echo $_GET["ssid"] ?>">
    <input type="hidden" name="WAN" value="<?php echo $_GET["WAN"] ?>">
    </form>
  <?php
  }
  else
  { ?>
    <meta http-equiv="refresh" content="0; url=wan_connect.php?ssid=<?php echo $_GET["ssid"] ?>&WAN=<?php echo $_GET["WAN"] ?>" />
  <?php 
  }   
?>

</p>


</body>
</html>


