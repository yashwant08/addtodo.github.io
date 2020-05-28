<!DOCTYPE html>
<html>
<head>
	<title>TODO LIST</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<style>
		.bgimage{
				   background:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url('images/t.jpg');
	               background-repeat: no-repeat;
                   background-attachment: fixed;
                   background-size: cover;
                   height: 100vh;
		        }


	</style>

    <div class="bgimage">
		<div class="menu">
			<div class="rightmenu">
			   <ul>
				  <li><a href="#" class="firstlist">ADD TASK</a></li>
				  <li><a href="index.php" class="secondlist"> MY TASK</a></li>
			   </ul>
			</div>
		</div>


	    <h2 class="head">ADD TODO</h2>
	    <div class="addtodo">
		    <form action="check.php" method="post" >
			     <h2 class="titl">TITLE</h2>
			     <input type="text" name="title" class="box" value="<?php if(isset($_POST['sbmit'])) {echo $_POST['title'];}?>">
			     <h2 class="ddline">DEADLINE</h2>
			     <input type="date" name="date" class="box1 " value="<?php if(isset($_POST['sbmit'])) {echo $_POST['date'];}?>">
                 <input type="time" name="time" class="box2" value="<?php if(isset($_POST['sbmit'])) {echo $_POST['time'];}?>"><br><br>
			     <button  class="btn"  name="sbmit">SUBMIT</button>&nbsp
			     <button  class="btn"  name="clear">CLEAR</button>
		    </form>
		
	   </div>		
	</div>



</body>
</html>

<?php


  if (isset($_POST['sbmit'])) {

     $title = $_POST['title'];
     $date =  $_POST['date'];
     $time = $_POST['time'];

     $con = mysqli_connect('localhost','root','','add todo');

     $query = "INSERT INTO `todo`(`title`, `date`, `time`) VALUES ('$title','$date','$time')";

     $run = mysqli_query($con, $query);

     if ($run == true) {
     	?>
     	<script>
     		alert('Data Inserted Successfully');
     	</script>
     	<?php
     }
  }

 if (isset($_POST['clear'])) {
 	
 	$_POST['title'] = '';
 	$_POST['date'] = '';
    $_POST['time'] = '';
 }
?>