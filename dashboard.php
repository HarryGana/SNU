<?php include_once ('Lib/header.php');

if(!isset($_SESSION["loggedIn"]) ){
    header("Location: login.php ");
  }
 

?>
 <h3>Dashboard</h3>

  Welcome, <?php echo $_SESSION["fullname"] ?>,  You are logged in as (<?php echo $_SESSION["role"] ?>), and your ID is <?php echo $_SESSION["loggedIn"] ?>

<?php include_once ('Lib/footer.php');?>