<html>
<head>
    <title> Net Buster </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection"/>
    <!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
</head>


<body background="nb_background.jpg">


<p align=center>
<br><br><br><br><br>
<font size=+1 color=#ff0000>Net Buster Internet Selector</font><br><br><br>

<form action="wan_connect.php" method="post">
<font color=#ff0000>Enter the password for <?php echo $_GET["ssid"] ?>:</font>
<input type="password" name="password">
<input type="hidden" name="ssid" value="<?php echo $_GET["ssid"] ?>"> 
</form>

</p>


</body>
</html>


