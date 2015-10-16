<html>


<link href="css/bootstrap.min.css" rel="stylesheet"/>
<body>
<?php 

?>



 
 

                
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
     <?php
                include("dbconnect.php");
		$name = $_GET["name"];
			
 //echo $tags = $_GET["tags"]; 
				
				
		//$query  = "select * from listing where Name like '%".$name."%' or Categories like 'asdfasdf' or Tags like '%".$tags."%' order by Rating DESC";
		//$query  = "select * from listing where Name like '%".$name."%' or Categories like 'asdfasdf' or Tags like '%".$tags."%' order by Rating DESC";
		$query  = "select * from listing where Name like '%".$name."%' or Categories like '%null%' or Tags like '%null%' order by Rating DESC";
		
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result, MYSQL_ASSOC))
				{
					
				$id = stripslashes($row['id']);
				$Categories = stripslashes($row['Categories']);
				$tags = stripslashes($row['Tags']);
				$Name = stripslashes($row['Name']);
				
				?>
    <tr>
      <td><?php echo $id ?></td>
      <td><?php echo $Categories ?></td>
      <td><?php echo $tags ?></td>
      <td><a href="single-blog.php?name=<?php echo $Name ?>"><?php echo $Name ?></a></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <?php } ?>
  </tbody>
</table>

                
                 
 
</body>
</html>