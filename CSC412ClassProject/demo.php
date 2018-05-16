<!DOCTYPE html> 
<html>
<head>
</head>
<body>


<?php
	//phpinfo();
        
        // define variables and set to empty value
        $firstName = $email = $lastName = "";
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $firstName = test_input($_POST["firstName"]);
            $lastName = test_input($_POST["lastName"]);
            $email = test_input($_POST["email"]);
            
            
        }//end if
        
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        
?>
    
    
    <h2>PHP demo</h2>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    
       Last Name: <input type="text" name="lastName">
  <br><br>
         Test First Name: <input type="text" name="firstName">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>   
    <input type="submit" name="submit" value="Submit">  

    
    <?php
    
    echo "<br>Thank you "; 
    echo $lastName;
    echo $firstName;
    echo " for visit!!";
    
    ?>

    
    </form>
    
</body>
</html>
