<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["Voter-Id"]))  
      {  
           $error = "<label class='text-danger'>Enter Voter-Id</label>";  
      }  
      else if(empty($_POST["shedul"]))  
      {  
           $error = "<label class='text-danger'>Enter Shedul</label>";  
      } 
      else if(empty($_POST["report"]))  
      {  
           $error = "<label class='text-danger'>Enter Report</label>";  
      }  
        
      else  
      {  
           if(file_exists('D1.json'))  
           {  
                $current_data = file_get_contents('D1.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array( 
                    'Voter-Id'               =>     $_POST['Voter-Id'], 
                     'shedul'     =>     $_POST["shedul"],  
                     'report'     =>     $_POST["report"]
                     
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('D1.json', $final_data))  
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
           <div class="container" style="width:700px;">                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     
                    <fieldset>
                      <legend>SET REPORT</legend>
                      <label><b>Voter-Id</b></label>
                     <input type="text" name="Voter-Id" class="form-control" /><br />
                     <label><b>Shedul</b></label>  
                     <input type="text" name="shedul" class="form-control" /><br />  
                     <label><b>Report</b></label>  
                     <input type="text" name="report" class="form-control" /><br />  
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" />
                     <input type="reset" name="reset" value="Reset" class="btn btn-info" /><br />  

                   

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