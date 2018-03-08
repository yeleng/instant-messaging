<?php

include ("connection.php");

$sql = "INSERT INTO mymessage (message,username) VALUES('$_POST[in]','$_POST[username]')";
mysql_query($sql);

?>