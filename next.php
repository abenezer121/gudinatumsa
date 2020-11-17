<?php
  session_start();
  if($_SESSION["login"] == "yes" )
    {
       include("index1.html"); 
    }
    else
    {
        include("index.html");
    }
?>