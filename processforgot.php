<?php session_start();

$errorCount = 0; 
$email = $_POST['email']!= "" ? $_POST['email'] : $errorCount++;
$_SESSION['email'] = $email;

if($errorCount > 0){
  //$session_error = "You have " . $errorCount . (($errorCount > 1)? "errors" : "error") . " in your form submission";
   $session_error  = "You have "  . $errorCount . " error";
    

     if($errorCount > 1) {
        $session_error  .= "s";
     }

     $session_error  .= " in your form submission";
     $_SESSION["error"] = $session_error;

     header("Location: forgot.php");

}else {
    $allUsers = scandir("db/users/");
    $countAllUsers = count($allUsers);

    for ($counter = 0; $counter < $countAllUsers; $counter++) {
        $currentUser = $allUsers[$counter];

       if($currentUser  == $email . ".json"){
          /**
           * Token generation starts here
           */
          $token = "";
          $alphabets = ['a','b','c', 'd','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t', 'u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
          for($i = 0; $i < 20; $i++){

            $index= mt_rand(0,count($alphabets)-1);
            $token .= $alphabets[$index];
          }
          
          /**
           * Token generation ends here
           */
           // send email and rediect to reset password page
           //$to = "somebody@example.com";

           $subject = "Password Reset Link";
           $message = "A password reset has been inintiated in your account, 
           if you did not initiate this reset, please ignore this message, otherwise, 
           visit: localhost/snu/reset.php?token=" . $token;
           $headers = "From: no-reply@snu.org" . "\r\n" .
           "CC: harry@snu.org";

           file_put_contents("db/token/". $email . ".json", json_encode(['token'=> $token]));
          
           $try = mail($email,$subject,$message,$headers);
           //print_r($try);
           //die();

           if($try){
              $_SESSION["message"] = "Password reset has been sent to your email: " . $email;
              header("Location: login.php");
           }else {
              $_SESSION["error"] = "Something went wrong, we could not send password reset to: " . $email;
              header("Location: forgot.php");
           }
           die();
       }
    }
    $_SESSION["error"] = "Email not registred with us ERROR: " . $email;
    header("Location: forgot.php");
}