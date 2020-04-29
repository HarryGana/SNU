<?php session_start()
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

if(errorCount > 0){
    //redirect back and display error
} 
else { //continue to database
}