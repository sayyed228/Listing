<?php include_once 'session.php'; ?>
<html>
<?php include_once 'header.php'; ?>
<body>
<?php  require_once('header-top.php');?>
<?php  require_once('navbar.php');?>
<div class="container">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
    <tbody>
      <tr>
        <td>Id</td>
        <td>Photo</td>
        <td>Categories</td>
        <td>Tags</td>
        <td>Name</td>
        <td>Address</td>
        <td>Number</td>
        <td>Email</td>
        <td>Website</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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
				$Email = stripslashes($row['Email']);
				$Website = stripslashes($row['website']);
				
				?>
    <tr>
      <td class="id"><?php echo $id ?></td>
      <td><span><img src="uploads/<?php echo $photo ?>" style="width:100px; height:100px;" class="displayPicture"/></span></td>
      <td><?php echo $Categories ?></td>
      <td><?php echo $tags ?></td>
      <td><?php echo $Name ?></td>
      <td><?php echo $Address ?></td>
      <td><?php echo $Number ?></td>
      <td><?php echo $Email ?></td>
      <td><?php echo $Website ?></td>
      <td class="Edit"><a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Edit</a></td>
      <td><a href="delete-my-listing.php?id=<?php echo $id ?>" class="btn btn-danger">Delete
        </button></td>
    </tr>
    <?php } ?>
      </tbody>
    
  </table>
 
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Update Listing</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Categories</label>
                <input type="text" class="form-control" id="Categories" placeholder="Categories">
                <input type="hidden" class="form-control" id="id" placeholder="Id" disabled>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" class="form-control" id="Name" placeholder="Name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Phone Number</label>
                <input type="text" class="form-control" id="PhoneNumber" placeholder="Number">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control" id="Email" placeholder="Email">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Website</label>
                <input type="text" class="form-control" id="Website" placeholder="Website">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <textarea id="Address" class="form-control" placeholder="Address"></textarea>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Tags</label>
                <textarea id="Tags" class="form-control" placeholder="Tags"></textarea>
              </div>
            </div>
          </div>
          <form>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary UpdateListing" data-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
   </div>
<script>
	   $(document).ready(function(e) {
        
		$('.Edit').click(function() {
		 var id = $(this).prevAll('td:nth-child(1)').text();
		 $('#id').val(id)
		 var Categories = $(this).prevAll('td:nth-child(3)').text();
		 $('#Categories').val(Categories)
		 var Tags = $(this).prevAll('td:nth-child(4)').text();
		 $('#Tags').val(Tags)
		 var Name = $(this).prevAll('td:nth-child(5)').text();
		 $('#Name').val(Name)
		 var Address = $(this).prevAll('td:nth-child(6)').text();
		 $('#Address').val(Address)
		 var PhoneNumber = $(this).prevAll('td:nth-child(7)').text();
		 $('#PhoneNumber').val(PhoneNumber)
		 var Email = $(this).prevAll('td:nth-child(8)').text();
		 $('#Email').val(Email)
		 var Website = $(this).prevAll('td:nth-child(9)').text();
		 $('#Website').val(Website)
		});
		
		
		/**  Add query excute here! **/

	function Update_Listing() {
		if (window.XMLHttpRequest) {
			aa = new XMLHttpRequest();
		}
		aa.onreadystatechange = function () {
			if (aa.readyState == 4 && aa.status == 200) {
				document.getElementById('txthint').innerHTML = aa.responseText
			}
		}
		
		
		
        var id = document.getElementById('id').value
		var Name = document.getElementById('Name').value
		var Address = $('#Address').val();
		var Categories = document.getElementById('Categories').value
		var Tags = document.getElementById('Tags').value
		var PhoneNumber = document.getElementById('PhoneNumber').value
		var Email = document.getElementById('Email').value
		var Website = document.getElementById('Website').value

		aa.open("GET", "update-listing-back.php?Name=" + Name + "&Address=" + Address + "&Categories=" + Categories + "&Tags=" + Tags + "&PhoneNumber=" + PhoneNumber + "&Email=" + Email + "&Website=" + Website + "&id=" + id, true)
		aa.send()
	//alert(Address)			 
	}
		
		
		$('.UpdateListing').click(function() {
			
			Update_Listing()
			
			setTimeout(function(){
  	  location.reload();
	 }, 600);
			});
		
		
    });
	  
	   </script>
</body>
</html>