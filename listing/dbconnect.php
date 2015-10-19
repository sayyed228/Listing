<?php

if(!mysql_connect("localhost","root",""))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("webcreat_test"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>



<?php
/*
$connect = mysql_connect('localhost:3306','webcreat_root','123456789');

if(!$connect)
{
die('Could not connect!' . mysql_error);
}

mysql_select_db('webcreat_test', $connect);
*/
?>