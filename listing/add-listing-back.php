<?php
$Name = $_GET['Name'];
$Address = $_GET['Address'];
$Categories = $_GET['Categories'];
$Tags = $_GET['Tags'];
$Phone = $_GET['Phone'];
$Email = $_GET['Email'];
$Rating = $_GET['Rating'];
$Website = $_GET['Website'];
$photoProfile = $_GET['photoProfile'];
$Status = $_GET['Status'];
$UserID = $_GET['UserID'];
$DateCurrent = $_GET['DateCurrent'];
include_once 'dbconnect.php'; 




//$sql = "INSERT INTO `sk_legal`.`what_we_do_list` (`id`, `Title`, `Description`, `listorder`) VALUES (NULL, '".$AddTitle."', '".$Adddescription."', '".$listorder."');";

/*$sql = "INSERT INTO `webcreat_test`.`listing` (`id`, `Categories`, `Sub_category`, `Name`, `Address`, `Tags`, `Number`, `Email`, `Rating`, `website`, `photo`) VALUES (NULL, '".$Categories."', NULL, '".$Name."', '".$Address."', '".$Tags."', '".$Phone."', '".$Email."', '".$Rating."', '".$Website."', '".$photo."');";*/


$sql = "INSERT INTO `webcreat_test`.`listing` (`id`, `UserName`, `UserID`, `UserEmail`, `Date`, `Categories`, `photo`, `Name`, `Address`, `Tags`, `Number`, `Email`, `Rating`, `website`, `status`) VALUES (NULL, NULL, '".$UserID."', NULL, '".$DateCurrent."','".$Categories."', '".$photoProfile."', '".$Name."', '".$Address."', '".$Tags."', '".$Phone."', '".$Email."', '".$Rating."', '".$Website."', '".$Status."');";

 

mysql_query($sql) or die('Error updating database');






?>