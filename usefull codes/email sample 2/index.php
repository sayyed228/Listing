<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "nsayyed@webcreativities.net";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" value="nazirahmed228@gmail.com"/><br />
  Subject: <input name="subject" type="text" Value="New Listing added"/><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40">New Listing added</textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>