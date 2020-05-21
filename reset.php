<?php include_once ('Lib/header.php');

   if(!isset($_SESSION["loggedIn"]))  
  
 
 if(!isset($_GET['$token']) && !isset($_SESSION['token'])){
     $_SESSION["message"] = "You are not authorized to view that page! ";
    header("Location: login.php");

  }
    //if(isset($_SESSION["loggedIn"]) && !empty($_SESSION["loggedIn"]));
     //header("Location: reset.php ");
  
 
?>
<h3> Reset password</h3>
<p> Reset the password associated with this account: [email] </p>

<form action = "processreset.php" method = "POST"> 
<p>
  <?php
    if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
     echo "<span style= 'color:red'>" . $_SESSION['error'] . "</span>";

       // destroy the session
      session_destroy(); 
    }
  ?>

</p>
       
  <input 
    <?php
      if(!isset($_SESSION["loggedIn"]))
      if(isset($_SESSION['token'])){
        echo "value='" . $_SESSION['token'] . "'";
      }else{
       echo "value'" . $_GET['token' . "'"];
      }
    ?> 
  type="hidden" name="token"  />
<p>
    <label> Email</label><br />

    <input 
    <?php
      if(isset($_SESSION['email'])){
        echo "value=" . $_SESSION['email'];
      }
    ?>

     type="text" name="email" placeholder="Email"  />         
</p>
  <p>
         <label> Enter New Password</label><br />
         <input type="password" name="password" placeholder="Password" />         
       </p>
  <p>
    <button type = "submit">Reset Password</button>       
  </p>


</form>

<?php include_once ('Lib/footer.php');?>