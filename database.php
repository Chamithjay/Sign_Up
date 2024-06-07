<?php
    //connect to the database
    $host='localhost';
    $user='Chamitha';
    $password='root';
    $db='sign_up';

    $con=new mysqli($host,$user,$password,$db);
    

    //variable declaration from the form
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $pwd=$_POST['pwd'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];

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

    //insert data to the database
    $format="INSERT INTO sign_up(firstname,lastname,pwd,date_of_birth,gender) VALUES('$FirstName','$LastName','$pwd','$dob','$gender');";
    $con->query($format);
?>