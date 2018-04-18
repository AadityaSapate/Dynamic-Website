<?php
    
    session_start();
    
    if(array_key_exists("logout", $_GET))
        {
           session_unset();
        }
    else if(array_key_exists("id", $_SESSION))
        {
        
            header("Location: http://adityasblog.000webhostapp.com/html/mysql/edit.php");
        }
    

    if(array_key_exists('loginid', $_POST) OR array_key_exists('loginpass', $_POST))
        {
         

         
             if($_POST['loginid'] == "admin" && $_POST['loginpass'] == "admin" )
                     
             {
   
                   $_SESSION['id'] = 'logedin'; 
                  header("Location: http://adityasblog.000webhostapp.com/html/mysql/edit.php");
             }
             else 
             {
                 echo "check id pass";
             }
         }
         
         
     
     
 


?>

<html lang="en">
  <head>
    <title>Home</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
        #form
        {
            margin : 0 auto;
            width : 250px;
        }
        .jumbotron 
        {   
            
            
            background-color :  #d5dbdb ;
            
        }
    
       
    </style>
  </head>
  <body>
   
      <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
            <a class="navbar-brand" href="http://adityasblog.000webhostapp.com/html/mysql/home.php">Home</a>
            <a class="navbar-brand" href="http://adityasblog.000webhostapp.com/html/mysql/edit.php">Edit</a>
            <a class="navbar-brand" href="http://adityasblog.000webhostapp.com/html/mysql/view.php">View</a>
   

 

     </nav>
   
     <div class="jumbotron">
            <center><h3 class="display-3" >Admin LogIn</h3><br>
            <p>Please login using id = admin and password = admin To Edit </p>
            </center>
            <form id="form" method="POST">
            <div class="form-group">
               <label for="UserId">User Name</label>
               <input type="text" class="form-control" id="username"  placeholder="Enter Id" name="loginid">
   
            </div>   
  
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="loginpass">
            </div>
 
  
            <button type="submit" class="btn btn-primary">Log In</button>
            </form>  
  
      </div>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>













