<!DOCTYPE html>
<html>
<head>
     <title>My Task</title>
     <link rel="stylesheet" type="text/css" href="css/task.css">
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
                      <li><a href="check.php" class="secondlist">ADD TASK</a></li>
                      <li><a href="#" class="firstlist"> MY TASK</a></li>

                  </ul>
               </div>
          </div>

         <h2 class="head">MY TASK</h2>
         <div class="mytask">
          <form action="index.php"  method="post">
          <table class="tbl" border="1" cellspacing="5">
               <tr>
                    <th>Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th colspan="2">DeadLine</th>
                    <th>Delete</th>
               </tr>
               <?php
                      $con = mysqli_connect('localhost','root','','add todo');
                      function showData(){

                         global $con;
                         $query = "SELECT * FROM `todo`";

                         $run = mysqli_query($con, $query);

                         if ($run == TRUE) {
                                
                                while ($data = mysqli_fetch_assoc($run)) {
                ?>
               <tr  style="height: 25px;border-color: yellow; background-color: black; color: white;">
                    <td><?php echo $data['title']; ?></td>
                    <td><?php echo $data['date']; ?></td>
                    <td><?php echo $data['time']; ?></td>
                    <td><button class="btn"><a href="delete.php?sid=<?php echo $data['id']; ?>">Delete</a></button></td>
               </tr><?php

                                }
                         }
                    }
                     


                     ?>

         <?php   showData();     ?>



          </table>
        </form>
              
         </div>


     </div>     
  </body>
</html>
