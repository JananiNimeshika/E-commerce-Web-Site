<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $description = $_POST['message'];
    
  
    
   
 
    $sql = "insert into contact
    (name,email,subject,message) values ('$name','$email','$subject','$description')";
    
    $query_run = mysqli_query($conn,$sql);
    
}
$conn->close();
?>

<?php
	session_start();
	include_once('connection.php');
	
	if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $description = $_POST['message'];
    
  
    
   
 
    $sql = "insert into contact
    (name,email,subject,message) values ('$name','$email','$subject','$description')";
    
    $query_run = mysqli_query($connection,$sql);
    
    if($query_run){
        
        echo "comment inserted";
       
        
    }
	
    else{
         echo "comment not inserted";
    }
	
    
}
	
	