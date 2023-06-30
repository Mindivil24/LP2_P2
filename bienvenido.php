<?php
  
  session_start();
  if(!isset($_SESSION["id"])){
    header("location:index.php");
  }

  echo "<h1> Bienvenido ".$_SESSION["nombre"]."</h1>";
  
  ?>

  <a href = "index.php">logout</a>