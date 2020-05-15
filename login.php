<?php include_once ('Lib/header.php');
if(isset($_SESSION["loggedIn"]) && !empty($_SESSION["loggedIn"])){
  header("Location: dashboard.php ");
}

?>

<h3>Login</h3>
   <p>
       <?php
             if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
             echo "<span style= 'color:green'>" . $_SESSION['message'] . "</span>";

             // destroy the session
              session_destroy(); 
              }
       ?>
    </p>
    <form method = "POST" action = "processlogin.php">
    
      <?php
        if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
          echo "<span style= 'color:red'>" . $_SESSION['error'] . "</span>";

             // destroy the session
            session_destroy(); 
        }
      ?>

       <p>
         <label> Email</label><br />
         <input 
         <?php
            if(isset($_SESSION['email'])){
               echo "Value=" . $_SESSION['email'];
              }  
         ?>   
        
         type="text" name="email" placeholder="Email"  />         
       </p>

       <p>
         <label> Password</label><br />
         <input type="password" name="password" placeholder="Password" />         
       </p>
   
       <p>
         <button type = "submit">Login</button>       
       </p>
   </form>
   

<?php include_once ('Lib/footer.php');?>