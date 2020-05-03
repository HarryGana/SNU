<?php session_start();
//collecting the data

$errorCount = 0; 
//veryfing the data, validation

$first_name = $_POST['first_name'] != "" ? $_POST['first_name'] : $errorCount++;
$last_name = $_POST['last_name'] != "" ? $_POST['last_name'] : $errorCount++;
$email = $_POST['email']!= "" ? $_POST['email'] : $errorCount++;
$password = $_POST['password']!= "" ? $_POST['password'] : $errorCount++;
$gender = $_POST['gender']!= "" ? $_POST['gender'] : $errorCount++;
$designation = $_POST['designation']!= "" ? $_POST['designation'] : $errorCount++;
$department = $_POST['department']!= "" ? $_POST['department'] : $errorCount++;

$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['email'] = $email;
$_SESSION['gender'] = $gender;
$_SESSION['designation'] = $designation;
$_SESSION['department'] = $department;

if($errorCount > 0){
    // this is to redirect to the first page.
    $_SESSION["error"] = "You have "  . $errorCount . " errors in your form submission";
    header("Location: register.php?  ");

}else { 
    $userObject = [
            'Id'=>1,
            'first_name'=> $first_name,
            'last_name'=> $last_name,
            'email'=> $email,
            'password'=> $password,
            'gender'=> $gender,
            'designation'=> $designation,
            'department'=> $department,
    ];
       //continue to database and save to a file
    file_put_contents("db/users/".$firstname . $lastname . ".json", json_encode($userObject));
    $_SESSION["message"] = "Registration Succesfull you can now login! " . $first_name ;
    header("Location: login.php?  ");
}