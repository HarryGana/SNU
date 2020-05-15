

<p>
   <a href ="Index.php">Home</a> |
   <?php if(!isset($_SESSION["loggedIn"])){ ?>
  
  <a href ="login.php">Login</a> |
  <a href ="Register.php">Register</a> |
  <a href ="forgot.php">Forgot Password</a> |

  <?php }else{ ?>

      <a href ="logout.php">Logout</a> |
      <a href ="Reset Password.php">Reset Password</a> |

  <?php } ?>
     

</p>



</body>
</html>