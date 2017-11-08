<?php
$Date = mysql_real_escape_string($_GET['Date']);
$connection = mysql_connect("localhost","root","");
mysql_select_db("blog1")or die(mysql_error());
$result = mysql_query("SELECT * FROM sessionform WHERE Date = '" + $Date + "'");
print_r($result);