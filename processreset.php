<?php session_start();


$errorCount = 0; 

$token = $_POST['token'] != "" ? $_POST['token'] : $errorCount++;
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

    for ($counter = 0; $counter < $countAllUsersTokens; $counter++) {
        
        $currentTokenFile = $allUserTokens[$counter];
    
       if($currentTokenFile  == $email . ".json"){
          $tokenContent = file_get_contents("db/tokens/" . $currentTokenFile);

          $tokenObject = json_decode($tokenContent);

          $tokenFromDB = $tokenObject-> token;

          if($tokenFromDB ==  $token){

              $allUsers = scandir("db/users/");
              $countAllUsers = count($allUsers);
            
              for ($counter = 0; $counter < $countAllUsers; $counter++) {
        
                  $currentUser = $allUsers[$counter];
        
                 if($currentUser  == $email . ".json"){
                      $userString = file_get_contents("db/users/" . $currentUser);
                      $userObject = json_decode($userString);
        
                      $userObject-> password = password_hash($password,PASSWORD_DEFAULT);

                      unlink("db/users/" . $currentUser);  //file deleted, user data deleted

                      file_put_contents("db/users/". $email . ".json", json_encode($userObject));
                      $_SESSION["message"] = "Password Reset Succesful! You can now login " . $first_name;
                      header("Location: login.php");

                      die();
                    }

                }

              
             

            }
        
        }
    }
    $_SESSION["message"] = "Password Reset Failed, Token/Email invalid or expired! ";
    header("Location: login.php");
    
}

