<?php
//collecting the data

$First_name =$_POST ["first_name"];
$last_name =$_POST ['last_name'];
$email =$_POST ['email'];
$password =$_POST ['password'];
$gender =$_POST ['gender'];
$designation =$_POST ['designation'];
$department =$_POST ['department'];

$errorArray = [];

//veryfing the data, validation
if($First_name == "") { 
    $errorArray = "first_name cannot be blank"; 
}
    print_r($errorArray);

    if($last_name == "") { 
        $errorArray = "last_name cannot be blank"; 
    }
        print_r($errorArray);

        if($email == "") { 
            $errorArray = "Email cannot be blank"; 
        }
            print_r($errorArray);

            if($password == "") { 
                $errorArray = "Password cannot be blank"; 
            }

            if($gender == "") { 
                $errorArray = "Gender cannot be blank"; 
            }
                print_r($errorArray);