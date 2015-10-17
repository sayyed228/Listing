<?php include_once 'session.php'; ?>
<html>
<?php include_once 'header.php'; ?>
<body>
<?php  require_once('navbar.php');?>



 <div class="container">
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
  <tbody>
    <tr>
      <td>Id</td>
      <td>Categories</td>
      <td>Tags</td>
      <td>Name</td>
      <td>Address</td>
      <td>Number</td>
      <td>Rating</td>
    </tr>
     <?php
                include("dbconnect.php");
				 echo $userRow['username']; 
				echo $_SESSION['user'];
		//echo		$name = $_GET["name"];
			
  //$tags = $_GET["tags"]; 
   //$username = $_GET["username"]; 
 //echo $tags ;
  //echo  $username;
				
				
		//$query  = "select * from listing where Name like '%".$name."%' or Categories like 'asdfasdf' or Tags like '%".$tags."%' order by Rating DESC";
		//$query  = "select * from listing where Name like '%".$name."%' or Categories like 'asdfasdf' or Tags like '%".$tags."%' order by Rating DESC";
		$query  = "select * from listing where UserID = '".$_SESSION['user']."'";  //user_id="
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
				$UserName = stripslashes($row['UserName']);
				$photo = stripslashes($row['photo']);
				
				
				
				?>
    <tr>
      <td class="id"><?php echo $id ?></td>
      <td><img src="uploads/<?php echo $photo ?>" style="width:100px; height:100px;"/></td>
      <td><?php echo $Categories ?></td>
      <td><?php echo $tags ?></td>
      <td><?php echo $Name ?></td>
      <td><?php echo $Address ?></td>
      <td><?php echo $Number ?></td>
      <td></td>
      <td class="Edit"><a href="#" class="btn btn-primary">Edit</button></td>
      <td><a href="delete-my-listing.php?id=<?php echo $id ?>" class="btn btn-danger">Delete</button></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
 </div>
 

       <script>
	   $(document).ready(function(e) {
        
		$('.Edit').click(function() {
		 var id = $(this).prevAll('td:nth-child(1)').text();
		 var photo = $(this).prevAll('td:nth-child(2)').text();
		 var Categories = $(this).prevAll('td:nth-child(3)').text();
		 var tags = $(this).prevAll('td:nth-child(4)').text();
		 var Name = $(this).prevAll('td:nth-child(5)').text();
		 var Address = $(this).prevAll('td:nth-child(6)').text();
		 var PhoneNumber = $(this).prevAll('td:nth-child(7)').text();
		 
			
			//alert(PhoneNumber);
			});
		
		
		
		
		//alert('asdf')
    });
	   </script>         
          
 
</body>
</html>