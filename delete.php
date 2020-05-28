<?php

 	 $con = mysqli_connect('localhost','root','','add todo');

     $id = $_REQUEST['sid'];
 	
     $qry = "DELETE FROM `todo` WHERE `id` = '$id';";
     $runn = mysqli_query($con, $qry);
     
     if ($runn == true) {
     	?>
     	<script>
     		alert('Data Deleted Succesfully');
     		window.open('index.php','_self');
     	</script>
     	<?php
     }

 

 ?>