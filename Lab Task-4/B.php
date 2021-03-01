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
                     'gender'     =>     $_POST["gender"], 
                     'date-of-birth'     =>     $_POST["date-of-birth"]
                     
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Successfuly</p>";  
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
           
           
      </head>  
      <body>  
           <br />  
           <?php  
        include('name.php');
        ?>
           <div>                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     
                    <fieldsets>
                      <legend>REGISTRATION</legend>
                     <label><b>Name</b></label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label><b>Email</b></label>  
                     <input type="text" name="email" class="form-control" /><br /> 
                     <label><b>User-Name</b></label>  
                     <input type="text" name="user-name" class="form-control" /><br /> 
                     <label><b>Password</b></label>  
                     <input type="text" name="password" class="form-control" /><br />  
                     <label><b>Confirm-Password</b></label>  
                     <input type="text" name="confirm-password" class="form-control" /><br /> 
                     <label><b>Gender </b></lable>
                     <input name="gender"id="Male" type="radio" value="male"> <lebel for="Male">Male</lebel>
                     <input name="gender"id="Female" type="radio" value="female"> <lebel for="Female">Female</lebel>
                     <input name="gender"id="Other" type="radio" value="Other"> <lebel for="Other">Other</lebel>
                     <<br>
                     <label><b>Date-Of-Birth</b></label>  
                     <input type="text" name="date-of-birth" class="form-control" /><br />  
                      
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" />
                     <input type="reset" name="reset" value="Reset" class="btn btn-info" /><br /> 
                     </fieldset> 
                     <hr>

                   

                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                     <?php  
                      include('footer.php');
                      ?>
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  