<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      }
      else if(empty($_POST["user-name"]))  
      {  
           $error = "<label class='text-danger'>Enter user-name</label>";  
      }
      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter Password</label>";  
      }
      else if(empty($_POST["confirm-password"]))  
      {  
           $error = "<label class='text-danger'>Enter confirm-password</label>";  
      }
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Enter gender</label>";  
      }  
      else if(empty($_POST["date-of-birth"]))  
      {  
           $error = "<label class='text-danger'>Enter date-of-birth</label>";  
      }  
        
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'], 
                     'email'     =>     $_POST["email"], 
                     'user-name'     =>     $_POST["user-name"], 
                     'password'          =>     $_POST["password"], 
                     'confirm-password'          =>     $_POST["confirm-password"],
                     'gender'          =>     $_POST["gender"],  
                     'date-of-birth'     =>     $_POST["date-of-birth"]
                     
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:600px;">  
                <h3 align="">Append Data to JSON File</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                    <fieldset>
                      <legend>REGISTRATION</legend>
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>Email</label>  
                     <input type="text" name="email" class="form-control" /><br /> 
                     <label>User-Name</label>  
                     <input type="text" name="user-name" class="form-control" /><br /> 
                     <label>Password</label>  
                     <input type="text" name="password" class="form-control" /><br />  
                     <label>Confirm-Password</label>  
                     <input type="text" name="confirm-password" class="form-control" /><br /> 
                     <fieldset>
                     <legend>gender</legend>  
                      <lebel for="Male">Male</lebel><input name="gender"id="Male" type="radio" value="Male">
                      <lebel for="Female">Female</lebel><input name="gender"id="Female" type="radio" value="Female">
                     <lebel for="Other">Other</lebel><input name="gender"id="Other" type="radio" value="Other"> 
                     </fieldset>
                     <br>
                     <label>Date-Of-Birth</label>  
                     <input type="text" name="date-of-birth" class="form-control" /><br />  
                      
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" />
                     <input type="reset" name="reset" value="Reset" class="btn btn-info" /><br /> 
                     </fieldset> 

                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  