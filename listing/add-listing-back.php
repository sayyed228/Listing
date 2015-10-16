<?php
$Name = $_GET['Name'];
$Address = $_GET['Address'];
$Categories = $_GET['Categories'];
$Tags = $_GET['Tags'];
$Phone = $_GET['Phone'];
$Email = $_GET['Email'];
$Rating = $_GET['Rating'];
$Website = $_GET['Website'];

include_once 'dbconnect.php'; 




//$sql = "INSERT INTO `sk_legal`.`what_we_do_list` (`id`, `Title`, `Description`, `listorder`) VALUES (NULL, '".$AddTitle."', '".$Adddescription."', '".$listorder."');";

$sql = "INSERT INTO `local_search_engine`.`listing` (`id`, `Categories`, `Sub_category`, `Name`, `Address`, `Tags`, `Number`, `Email`, `Rating`, `website`) VALUES (NULL, '".$Categories."', NULL, '".$Name."', '".$Address."', '".$Tags."', '".$Phone."', '".$Email."', '".$Rating."', '".$Website."');";

 

mysql_query($sql) or die('Error updating database');






?>