<?php include_once 'session.php'; ?>
<!DOCTYPE html>
<html>
<?php include_once 'header.php'; ?>
<style>
#listingimage {
	display: none;
}
</style>
<body>
<?php  require_once('navbar.php');?>
<div class="container">
  <div class="col-sm-6">
    <table class="table" align="center" border="0" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td>Name</td>
          <td><input type="text" id="Name" value="Aayush Multispeciality Hosp..." class="form-control"/></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><textarea class="form-control" id="Address">1st Floor, Marigold Apartment, Panch Pakhadi-Thane West, Thane - 400602, Opposite Nitin Co ...more (Map)</textarea></td>
        </tr>
        <tr>
          <td>Categories</td>
          <td><input type="text" id="Categories" value="Hospitals" class="form-control"/></td>
        </tr>
        <tr>
          <td>Tags</td>
          <td><input type="text" id="Tags" value="Book a taxi, book a cab, online cab booking, meru cabs, meru cabs tariff, radio taxi , cab service , Mumbra" class="form-control"/></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input type="text" id="Phone" value="(91)-22-38518434" class="form-control"/></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" id="Email"  value="aa@gmail.com" class="form-control"/></td>
        </tr>
        <tr>
          <td>Rating</td>
          <td><input type="text" id="Rating"  value="5" class="form-control"/></td>
        </tr>
        <tr>
          <td>website</td>
          <td><input type="text" id="Website" value="w3schools.com" class="form-control"/></td>
        </tr>
        <tr>
          <td>Status</td>
          <td><input type="text" id="Status" value="true" class="form-control"/></td>
        </tr>
        <tr>
          <td>UserID</td>
          <td><input type="text" id="UserID" value="<?php echo $_SESSION['user'];?>" class="form-control"/></td>
        </tr>
        <tr>
          <td>Select image to upload:</td>
          <td><form action="upload.php" method="post" enctype="multipart/form-data">
              <input type="file" name="fileToUpload" id="fileToUpload">
              <input id="listingimage" type="submit" value="Upload Image" name="submit" class="btn btn-default">
            </form></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><button class="btn btn-primary btn-block">Submit</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<script src="jquery.min.js" type="text/javascript"></script> 


<script>

$(document).ready(function() {
  
	 
	   
 });	   
	   

</script>


<script>

$(document).ready(function(e) {
  
   $('button').click(function() {
	   
	   Add_Listing() 
	   
	    
	   //var filename = $('input[type=file]').val().split('\\').pop();
	   
	  
		
  	   $("#listingimage").trigger("click");

	 
	 //alert(filename)
	
	   });
	   
	   
	   
	   
	   
	   
	   
  /**  Add query excute here! **/

    function Add_Listing() {

      
        if (window.XMLHttpRequest) {
            aa = new XMLHttpRequest();
        }

        aa.onreadystatechange = function () {
            if (aa.readyState == 4 && aa.status == 200) {
                document.getElementById('txthint').innerHTML = aa.responseText
            }
        }

        var Name = document.getElementById('Name').value
		var Address = $('#Address').text()
		var Categories = document.getElementById('Categories').value
		var Tags = document.getElementById('Tags').value
		var Phone = document.getElementById('Phone').value
		var Email = document.getElementById('Email').value
		var Rating = document.getElementById('Rating').value
		var Website = document.getElementById('Website').value
		var photo = $('input[type=file]').val().split('\\').pop();
		var Status = $('#Status').val();
		var UserID = $('#UserID').val()

        
		
		//var listorder = document.getElementById('listorder').value= highest_listorder_plus
	
	
        aa.open("GET", "add-listing-back.php?Name=" + Name + "&Address=" + Address + "&Categories=" + Categories + "&Tags=" + Tags + "&Phone=" + Phone + "&Email=" + Email + "&Rating=" + Rating + "&Website=" + Website + "&photo=" + photo + "&Status=" + Status + "&UserID=" + UserID, true)
        aa.send()
		alert(Status)	 
	
    }
	 
	   
    
});

</script>
</body>
</html>