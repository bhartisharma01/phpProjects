<?php 
session_start();
include "header.php";
if (isset($_SESSION['Email'])) {
   ?>
   <span class="text-success">
           <div class="alert alert-success"> Welcome <?php echo $_SESSION['Email']; ?>!
               
           </div></span>


   <?php
}

?>





