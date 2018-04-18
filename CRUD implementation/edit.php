<?php 

 session_start();

 if(array_key_exists('id', $_SESSION))
 {  
 
     $link = mysqli_connect("localhost","id3046045_aditya","aditya","id3046045_test");
       if(mysqli_connect_error())
    
         {
           echo "unsuccessful";
         }  

       if(array_key_exists('action', $_POST))
         {
     
            if($_POST['action'] == "1")
               {
         
                   $insert = 1;
         
               }
            if($_POST['action'] == "2")
               {
         
                   $update = 1;
         
               }
             if($_POST['action'] == "3")
               {
         
                   $delete = 1;
         
                }
         }

        if(array_key_exists('Firstname', $_POST) OR array_key_exists('Lastname', $_POST) OR array_key_exists('email', $_POST) OR array_key_exists('age', $_POST) OR array_key_exists('college', $_POST) OR array_key_exists('company', $_POST))
         {
    
              $error = "";
              if(!$_POST["Firstname"])
                {
                  $error .= "First Name ,";   
                }
              if(!$_POST["Lastname"])
                {
                  $error .= "Last Name ,";
                }
             
              if(!$_POST["email"])
                {
                  $error .= "Email ,";
                }
              if(!$_POST["age"])
                {
                  $error .= "Age ,";
                }
              if(!$_POST["college"])
                {
                  $error .= "College ,";
                }
              if(!$_POST["company"])
                {
                  $error .= "company .";
                }
      
       
              if($error != "")
                {
                   $alert = $error." Is required Try Again ";
                }
              else
                {
          
                   $query =   " INSERT INTO `user`(`fname`, `lname`, `email`, `age`, `college`, `company`, `role`) VALUES ('".mysqli_real_escape_string($link, $_POST['Firstname'])."','".mysqli_real_escape_string($link, $_POST['Lastname'])."','".mysqli_real_escape_string($link, $_POST['email'])."','".mysqli_real_escape_string($link, $_POST['age'])."','".mysqli_real_escape_string($link, $_POST['college'])."','".mysqli_real_escape_string($link, $_POST['company'])."','".mysqli_real_escape_string($link, $_POST['role'])."')";
           
            
   
                   if(mysqli_query($link, $query))
                       {
                            $inserted = "inserted";
     
                        }
                 else
                         {
                            header("Location: edit.php");
                         }
    
                }
        }


        if(array_key_exists('uid', $_POST) OR array_key_exists('field', $_POST))

        {  
          
          
              $error = "";
             
              if(!$_POST["field"])
                {
                  $error .= "FieldName ,";
                }
                if(!$_POST["val"])
                {
                  $error .= "Value ,";
                }
                
                if($error != "")
                {
                    $alert = $error."Is required Try Again";
                }
          
                else
                {        
                    $query1 = "UPDATE `user` SET `".mysqli_real_escape_string($link, $_POST['field'])."`='".mysqli_real_escape_string($link, $_POST['val'])."' WHERE `id`='".mysqli_real_escape_string($link, $_POST['uid'])."'"; 
    
                    if (mysqli_query($link, $query1))
                    {
                          $inserted = "Updated";
                    }
                }       
        }
  
  
        if(array_key_exists('delete', $_POST))
        {       
            
                $error = "";
              if(!$_POST["delete"])
                {
                  $error .= "ID ,";   
                }
              if($error != "")
                {
                    $alert = $error." Is required Try again"; 
                }    
              else
                {
                    $query1 = "DELETE FROM `user` WHERE `user`.`id` = ".mysqli_real_escape_string($link, $_POST['delete'])."";
                
 
                    if (mysqli_query($link, $query1))
                      {
                          $inserted = "deleted";
                       }
                }
        }
} 
else
{
    header("Location: home.php");

}


  
?>





<!doctype html>
<html lang="en">
  <head>
    <title>Edit</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
 
  <body>
    
      
       <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
          <a class="navbar-brand" href="http://adityasblog.000webhostapp.com/html/mysql/home.php">Home</a>
          <a class="navbar-brand" href="http://adityasblog.000webhostapp.com/html/mysql/edit.php">Edit</a>
          <a class="navbar-brand" href="http://adityasblog.000webhostapp.com/html/mysql/view.php">View</a>
          <?php
              echo  '<a class="navbar-brand" href="home.php?logout=1" style="float:left">LogOut</a>';
  
          ?>
    
      </nav>

      <form method="POST" >

         <h3>Select Operation </h3>  
         <div class="row">
            <div class="col-4">
               <select class="form-control" name="action">
                    <option value="1">Insert</option>
                    <option value="2">Update</option>
                    <option value="3">Delete</option>
               </select>
            </div>
             <div class="col-4">
                <button type="submit" class="btn btn-primary" id="btn">Submit</button>
             </div>
         </div>
      </form>

    
      <p>
        
         <?php
            if($error != "") {
              echo  '<div class="alert alert-danger" role="alert">'.$alert.
                
                    '</div>';
                              }
             else if($inserted != "")
                              {
              echo '<div class="alert alert-success" role="alert">
                    Successfully '.$inserted.' 
                    </div>';
      
            
                              }
         ?>
        
        
      </p>
  
      <?php
   
            if( $insert == 1)
                  {
  
             echo ' <hr>
                    <h2>Create A User</h2><br>
                    <hr>
                    <form method="POST" >
                      <div class="row">
                         <div class="col-4">
                            <div class="form-group">
                               <label for="exampleFormControlInput1">First Name</label>
                               <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="first name" name="Firstname">
                            </div>
                         </div>
                         <div class="col-4">
                           <div class="form-group">
                                <label for="exampleFormControlInput1">Last Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Last name" name="Lastname">
                           </div>
                         </div>
   
                       </div>
                       <div class="row"> 
                         <div class="col-8">
                           <div class="form-group">
                               <label for="exampleFormControlInput1">Email address</label>
                               <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                           </div>
                          </div>
                       </div>
                       <div class="row"> 
                         
                         <div class="col-4">
                             <div class="form-group">
                                 <label for="exampleFormControlInput1">Age</label>
                                 <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="age">
                             </div>
                         </div>
                       </div>
                       <div class="row"> 
                             <div class="col-4">
                                <div class="form-group">
                                  <label for="exampleFormControlInput1">College</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="College name" name="college">
                                </div>
                             </div>
                             <div class="col-4">
                                <div class="form-group">
                                  <label for="exampleFormControlInput1">Company</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="company name" name="company">
                                 </div>
                             </div>
                       </div>
     
                       <div class="row">
          
                           <div class="col-4">
                              <div class="form-group">
                                 <label for="exampleFormControlInput1">Role</label>
                                 <select class="form-control" name="role">
                                     <option value="student">Student</option>
                                     <option value="member">Member</option>
                                     <option value="teacher">Teacher</option>
                                 </select>
                             </div>  
                          </div>  
                      </div>    
      
                      <div class="row"> 
                         <div class="col-4">
                              <button type="submit" class="btn btn-primary" style="margin-bottom:10px;">Insert</button>
                         </div>   
                      </div> 
                   </form>';
                 }

           if( $update == 1)
                 {
               echo ' <hr><h2>Update User By Using Id</h2><hr><br>  
                      <form method="post">
                         <div class="row">
                            <div class="col-3">
                                 <label for="exampleFormControlInput1">Id</label>
                                <input type="number" class="form-control" placeholder="" name="uid">
                            </div>
                         <div class="col-3">
                               <label for="exampleFormControlInput1">Field</label>
                               <select class="form-control" name="field">
                                    <option value="fname">fname</option>
                                    <option value="lname">lname</option>
                                    <option value="email">email</option>
                                    <option value="age">Age</option>
                                    <option value="college">College</option>
                                    <option value="company">Company</option>

                              </select>
                         </div>
                         <div class="col-3">
                              <label for="exampleFormControlInput1">Value</label>
                              <input type="text" class="form-control" placeholder="" name="val">
                         </div>
                         </div>
    
                         <button type="submit" class="btn btn-primary" style="margin-top:10px">Update</button>

                       </form>';
                 }
 
  if( $delete == 1)
                 {
                    echo ' <hr><h2>Delete An Existing User</h2><hr><br>
  
                           <form method="post">
  
                           <p>Id</p>
                           <div class="row">
     
                              <div class="col-3">
        
                                  <input type="number" class="form-control" placeholder="" name="delete">
                              </div>
    
   
                              <div class="col-3">
                                  <button type="submit" class="btn btn-primary" id="btn">Delete</button>
                              </div> 
                           </div> 
  
                           </form>';
                  }
       ?>
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>