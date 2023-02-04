<?php
  $con = mysqli_connect("localhost","root","") or die ("unable to connect");
  mysqli_select_db($con,"insert");


  if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $description = $_POST['message'];
    
  
    
   
 
    $sql = "insert into insert
    (name,email,subject,message) values ('$name','$email','$subject','$description')";
    
    $query_run = mysqli_query($connection,$sql);
    
    if($query_run){
        
        echo "comment inserted";
       
        
    }
	
    else{
         echo "comment not inserted";
    }
	
    
}
	


?>