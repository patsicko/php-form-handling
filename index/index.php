
<?php 


$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirm=$_POST["confirm"];
$submit=$_POST["submit"];


if(isset($submit)){
   if(empty($name)){
    echo "name is required <br>";
   }else{


    if(!preg_match("/^[A-Z]+ [a-zA-Z]+$/",$name)){
     echo "First name must be in upper case!";
    }
    echo htmlspecialchars("$name");
 
   }


 

   if(empty($email)){
    echo "email is required <br>";
   }else{
   
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "email must be valid  <br>";
    }else{
      
    echo htmlspecialchars("$email");  echo "<br>";
    }

   }

   if(empty("$password")){
    echo "password is required <br>";
   }else{

    if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}+$/",$password)){
        echo " Password must contain at least one  number and one uppercase and lowercase letter,<br>
         and at least 8 or more characters <br>";
    } else{
        echo htmlspecialchars("$password");
    }
 
   }

   if(empty($confirm)){
    echo "repeat password <br>";
   }else{

    if($password!=$confirm){
        echo "password doesn't match";
    }else{
        echo htmlspecialchars("$confirm");
    }
   
   }
}


?>

<div class="grid">
<?php

require("../page/page.php");
require("../page/page.php");
require("../page/page.php");
require("../page/page.php");
require("../page/page.php");

?>

</div>

