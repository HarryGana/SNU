<?php include_once ('Lib/header.php');?>
<h3> Forgot password</h3>
<p> Please provide email associated with your account </p>

<form action = "processforgot.php" method = "POST"> 
<p>
  <?php
    if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
    echo "<span style= 'color:red'>" . $_SESSION['error'] . "</span>";

       // destroy the session
      session_destroy(); 
    }
  ?>

</p>
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
    <button type = "submit">Send reset code</button>       
  </p>


</form>

<?php include_once ('Lib/footer.php');?>