<?php



$id = $_GET['id'];
$Name = $_GET['Name'];
$Address = $_GET['Address'];
$Categories = $_GET['Categories'];
$Tags = $_GET['Tags'];
$PhoneNumber = $_GET['PhoneNumber'];
$Email = $_GET['Email'];
$Website = $_GET['Website'];


include_once 'dbconnect.php'; 



/*
$sql = "INSERT INTO `webcreat_test`.`listing` (`id`, `UserName`, `UserID`, `UserEmail`, `Categories`, `photo`, `Name`, `Address`, `Tags`, `Number`, `Email`, `Rating`, `website`, `status`) VALUES (NULL, NULL, '".$UserID."', NULL, '".$Categories."', '".$photoProfile."', '".$Name."', '".$Address."', '".$Tags."', '".$Phone."', '".$Email."', '".$Rating."', '".$Website."', '".$Status."');";*/


$sql = "UPDATE `webcreat_test`.`listing` SET `Categories` = '".$Categories."', `Name` = '".$Name."', `Address` = '".$Address."', `Tags` = '".$Tags."', `Number` = '".$PhoneNumber."', `Email` = '".$Email."', `website` = '".$Website."' WHERE `listing`.`id` = '".$id."';";

 

mysql_query($sql) or die('Error updating database');






?>