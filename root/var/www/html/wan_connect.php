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
<font color=#ff0000>
<?php 
  $result = shell_exec('/home/pi/NetBuster/connect_to_ssid ' . $_POST["ssid"] .' ' . $_POST["password"]);
  echo "result=$result";
?>
</font>
</body>
</html>
