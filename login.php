<?php session_start();
  include_once ('Lib/header.php');
?>
   <p>
       <?php
             if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
             echo "<span style= 'color:green'>" . $_SESSION['message'] . "</span>";

             // destroy the session
              session_destroy(); 
              }
       ?>
    </p>
 login  from here

<?php include_once ('Lib/footer.php');?>