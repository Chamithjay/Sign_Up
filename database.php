<?php
    //connect to the database
    
    

    //variable declaration from the form
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $pwd=$_POST['pwd'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender']=array('Male','Female','Other');

    //validation
    $patternFname='/^[A-Z][a-z]+$/';
    $patternLname='/^[A-Z][a-z]+$/';
    $patternPwd='/^[A-z0-9@#$%.]{5,}$/';
    if (preg_match($patternFname,$FirstName)&&preg_match($patternLname,$LastName)&&preg_match($patternPwd,$pwd)){
        
        echo "<h2>Sign In succesfull</h2>";
    }
    else if(!preg_match($patternFname,$FirstName)){
        echo "<h2>Invalid First name</h2>";
    }
    else if(!preg_match($patternLname,$LastName)){
        echo "<h2>Invalid Last name</h2>";
    }
    else if(!preg_match($patternPwd,$pwd)){
        echo "<h2>Invalid Password</h2>";
    }
?>