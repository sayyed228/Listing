<?php

$id = $_GET['id'];

include_once 'dbconnect.php'; 




//$sql = "INSERT INTO `sk_legal`.`what_we_do_list` (`id`, `Title`, `Description`, `listorder`) VALUES (NULL, '".$AddTitle."', '".$Adddescription."', '".$listorder."');";

/*$sql = "INSERT INTO `webcreat_test`.`listing` (`id`, `Categories`, `Sub_category`, `Name`, `Address`, `Tags`, `Number`, `Email`, `Rating`, `website`, `photo`) VALUES (NULL, '".$Categories."', NULL, '".$Name."', '".$Address."', '".$Tags."', '".$Phone."', '".$Email."', '".$Rating."', '".$Website."', '".$photo."');";*/


$sql = "DELETE FROM `webcreat_test`.`listing` WHERE `listing`.`id` = '".$id."'";



mysql_query($sql) or die('Error updating database');


header('Location: my-listing.php');



?>