function error(){
    var FirstName = document.getElementById("FirstName").value;
    var LastName = document.getElementById("LastName").value;
    var password = document.getElementById("pwd").value;
    var DateOfBirth = document.getElementById("dob").value;


    if(FirstName == ""){
        document.getElementById("fname_error").innerHTML = "Please enter your First Name";
        return false;
    
    }
    if(LastName == ""){
        document.getElementById("lname_error").innerHTML = "Please enter your Last Name";
        return false;
    }
    if(password == ""){
        document.getElementById("pwd_error").innerHTML = "Please enter your password";
        return false;
    }
    if(DateOfBirth == ""){
        document.getElementById("dob_error").innerHTML = "Please enter your Date of Birth";
        return false;
    }
    
    if(FirstName != "" && LastName != "" && password != "" && DateOfBirth !=""){
        return true;

    }
}