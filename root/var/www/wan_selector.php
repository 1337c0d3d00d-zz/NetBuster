<?php
/**
 * Simple example of extending the SQLite3 class and changing the __construct
 * parameters, then using the open method to initialize the DB.
 */
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('/home/pi/NetBuster/state.db');
    }
}

$db = new MyDB();
$row = array();
$i = 0;

$result = $db->query('SELECT * FROM WirelessNetworks');
while ($res = $result->fetchArray()) {
 $row[$i]['ssid'] = $res['essid'];
 $row[$i]['is_encrypted'] = $res['is_encrypted'];
 $i++;
}
 /*print_r($row);*/
?>

<html>
<head>
    <title> Net Buster </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection"/>
    <!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>
</head>


<body background="nb_background.jpg">


<p align=center>
<br><br><br><br><br>
<font size=+1 color=#ff0000>Net Buster Internet Selector</font><br><br><br>

       <ul class="dropdown">
                <li><a href="#">Select an Internet Source</a>
                        <ul class="sub_menu">
				 <?php foreach ($row as $r) { ?>
				   <li><a href="wan_selected.php?ssid=<?php echo $r['ssid']; ?>"><?php echo $r['ssid']; ?> 
				   <?php if ($r['is_encrypted']) 
                                           echo "<img src=\"padlock.png\" height=\"21\" width=\"21\">"; ?>
				   </a>
				   </li>
	                         <?php } ?>
                        </ul>
                </li>
       </ul>



</p>


</body>
</html>


