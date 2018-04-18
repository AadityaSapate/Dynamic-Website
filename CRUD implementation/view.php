<?php

    

     $link = mysqli_connect("localhost","id3046045_aditya","aditya","id3046045_test");
    
     if(mysqli_connect_error())
    
       {
           echo "unsuccessful";
       }  
    

?>















<!doctype html>
<html lang="en">
  <head>
    <title>View</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
                      }
        th, td {
          padding: 5px;
          text-align: left;
               }
    </style>
  </head>
  <body>
     
  
    
   <nav class="navbar fixed-top navbar-expand-lg  navbar-dark bg-dark">
       <a class="navbar-brand" href="http://adityasblog.000webhostapp.com/html/mysql/home.php">Home</a>
       <a class="navbar-brand" href="http://adityasblog.000webhostapp.com/html/mysql/edit.php">Edit</a>
       <a class="navbar-brand" href="http://adityasblog.000webhostapp.com/html/mysql/view.php">View</a>
   
   </nav>


   <div class="Students" style="margin-top:50px;">
          
   <?php 
          
               echo '<h2>Students</h2>' ;  
          
                     $table = ' <table style="width:100%">  <tr>
                     <th>Id</th>
                     <th>FirstName</th>
                     <th>LastName</th>
                     <th>Email</th>
                     <th>Age</th>
                     <th>College</th>
                    <th>Company</th>
                    <th>Role</th>
                    </tr> ';
          
              $query = "SELECT * FROM `user` WHERE role= 'student' ORDER BY id ";
          
              $result = mysqli_query($link, $query);
              while($row = mysqli_fetch_row($result))
                     {
                        $table .= '<tr>
                                   <td>'.$row[0].'</td>
                                   <td>'.$row[1].'</td>
                                   <td>'.$row[2].'</td>
                                   <td>'.$row[3].'</td>
                                   <td>'.$row[4].'</td>
                                   <td>'.$row[5].'</td>
                                   <td>'.$row[6].'</td>
                                   <td>'.$row[7].'</td>
                                   </tr>';
            
                      }
              $table .= '</table>';
              echo $table;
   ?>
          
          
   </div>
      
   <div class="Members">
          
   <?php 
          
              echo '<h2>Members</h2>' ;
                    $table = ' <table style="width:100%">  <tr>
                               <th>Id</th>
                               <th>FirstName</th>
                               <th>LastName</th>
                               <th>Email</th>
                               <th>Age</th>
                               <th>College</th>
                               <th>Company</th>
                               <th>Role</th>
                               </tr> ';
              $query = "SELECT * FROM `user` where role = 'member' ORDER BY id ";
          
              $result = mysqli_query($link, $query);
       
              while($row = mysqli_fetch_row($result))
                    {
                        $table .= '<tr>
                                   <td>'.$row[0].'</td>
                                   <td>'.$row[1].'</td>
                                   <td>'.$row[2].'</td>
                                   <td>'.$row[3].'</td>
                                   <td>'.$row[4].'</td>
                                   <td>'.$row[5].'</td>
                                   <td>'.$row[6].'</td>
                                   <td>'.$row[7].'</td>
                                   </tr>';
       
                    }
      
              $table .= '</table>';
              echo $table;
      
    ?>
          
          
    </div>
      
    <div class="Teachers">
          
    <?php 
          
          echo '<h2>Teachers</h2>' ; 
          
           
          $table = ' <table style="width:100%">  <tr>
                     <th>Id</th>
                     <th>FirstName</th>
                     <th>LastName</th>
                     <th>Email</th>
                     <th>Age</th>
                     <th>College</th>
                     <th>Company</th>
                     <th>Role</th>
                     </tr> ';
          
          
          $query = "SELECT * FROM `user` WHERE role= 'teacher' ORDER BY id";
          
          $result = mysqli_query($link, $query);
          while($row = mysqli_fetch_row($result))
                 {
                  $table .= '<tr>
                             <td>'.$row[0].'</td>
                             <td>'.$row[1].'</td>
                             <td>'.$row[2].'</td>
                             <td>'.$row[3].'</td>
                             <td>'.$row[4].'</td>
                             <td>'.$row[5].'</td>
                             <td>'.$row[6].'</td>
                             <td>'.$row[7].'</td>
                             </tr>';
                  }
          $table .= '</table>';
                   echo $table;
     ?>
          
          
     </div>
      
      
      
      
      
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  
    
  </body>
</html>