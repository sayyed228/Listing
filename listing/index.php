<?php /*include_once 'session.php';*/ ?>
<html>
<?php include_once 'header.php'; ?>
<body>
<?php  require_once('navbar.php');?>
<form action="results.php" method="get">
<!-- Name : <input type="text" name="username" value="<?php /*echo $userRow['username'];*/ ?> ">-->
 Tags : <input type="text" name="tags"><br>
<!--  id : <input type="text" name="id"><br>-->

<input type="submit">
</form>

<br/><br/><br/><br/>
<a href="results.php?tags=mumbra">Rooms</a>
</body>
</html>