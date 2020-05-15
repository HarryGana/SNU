<?php session_start();


$errorCount = 0; 

$last_name = $_POST['token'] != "" ? $_POST['token'] : $errorCount++;
$email = $_POST['email']!= "" ? $_POST['email'] : $errorCount++;
$password = $_POST['password']!= "" ? $_POST['password'] : $errorCount++;

$_SESSION['token'] = $token;
$_SESSION['email'] = $email;

if($errorCount > 0){
    
    $session_error  = "You have "  . $errorCount . " error";
    
    if($errorCount > 1) {
     $session_error  .= "s";
    }

    $session_error  .= " in your form submission";
    $_SESSION["error"] = $session_error;
    header("Location: reset.php");

}else {
    //TODO Do actual reset things here
    $allUserTokens = scandir("db/tokens/");
    $countAllUserTokens = count($allUserTokens);

    for ($counter = 0; $counter <= $countAllUsersTokens; $counter++) {
        $currentTokenFile = $allUserTokens[$counter];
    
       if($currentTokenFile  == $email . ".json"){
          echo "This is working proceed"
          die();
       }
    }
    $_SESSION["message"] = "Password Reset Failed, Token/Email invalid or expired! ";
    header("Location: login.php");
    
}

