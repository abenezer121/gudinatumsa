<?php 
    $name =  $_POST["user"];
    $pass = $_POST["pass"];
    session_start();
  
    if(isset($name) && isset($pass)){
    
        if($name == "gudinatumsa" && $pass == "foundation12")
        {
            
            /*session is started if you don't write this line can't use $_Session  global variable*/
            $_SESSION["login"] = "yes";
             include("next.php");
           
        }
        else
        {
            include("index.html");
        }
    }
    
 ?>