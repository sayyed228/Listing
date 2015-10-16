<?php include_once 'session.php'; ?>
<html>
<?php include_once 'header.php'; ?>
<body>
<?php  require_once('navbar.php');?>



 <div class="container">
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo $userRow['username']; ?> </td>
    </tr>
     <?php
                include("dbconnect.php");
		//echo		$name = $_GET["name"];
			
  $tags = $_GET["tags"]; 
   //$username = $_GET["username"]; 
 echo $tags ;
  //echo  $username;
				
				
		//$query  = "select * from listing where Name like '%".$name."%' or Categories like 'asdfasdf' or Tags like '%".$tags."%' order by Rating DESC";
		//$query  = "select * from listing where Name like '%".$name."%' or Categories like 'asdfasdf' or Tags like '%".$tags."%' order by Rating DESC";
		$query  = "select * from listing where name like '%".$tags."%' or Categories like '%null%' or Tags like '%".$tags."%' order by Rating ASC";
//$query  = "select * from listing WHERE  id =  '".$id."' or Name like '%null%' or Categories like '%null%' or Tags like '%null%' order by Rating DESC";
		
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result, MYSQL_ASSOC))
				{
					
				$id = stripslashes($row['id']);
				$Categories = stripslashes($row['Categories']);
				$tags = stripslashes($row['Tags']);
				$Name = stripslashes($row['Name']);
				$Address = stripslashes($row['Address']);
				$Number = stripslashes($row['Number']);
				$Rating = stripslashes($row['Rating']);
				
				
				?>
    <tr>
      <td><?php echo $id ?></td>
      <td><?php echo $Categories ?></td>
      <td><?php echo $tags ?></td>
      <td><a href="single-blog.php?name=<?php echo $Name ?>"><?php echo $Name ?></a></td>
      <td><?php echo $Address ?></td>
      <td><?php echo $Number ?></td>
      <td><?php echo $Rating ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
 </div>
 

                
               

                
                 
 
</body>
</html>