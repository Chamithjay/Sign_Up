<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="index.css">
    <script src='index.js'></script>
    
</head>
<body>
    <div id='form'>
        <form id='innerForm' action="database.php" method="POST">
            <div id='input1'>
                <div id="firstName">
                    <label>First Name:</label><br>
                    <input type="text" name="FirstName" id='FirstName' placeholder='First Name'><br>
                    <p id='fname_error'></p>
                </div>
                <div id="lastName">
                    <label>Last Name:</label><br>
                    <input type="text" name="LastName" id='LastName' placeholder='Last Name'><br>
                    <p id='lname_error'></p>
                </div>
                <div id="Pwd">
                    <label>Password:</label><br>
                    <input type="password" name="pwd" id='pwd' minlength="4"><br>
                    <p id='pwd_error'></p>
                </div>
                <div id="birthday">
                    <label>Date of birth:</label><br>
                    <input type="date" name="dob" id='dob'>
                    <p id='dob_error'></p>
                </div>
            </div>
            <div id="Gender">
                <label>Gender:</label><br>
                <input type="radio" name="gender" id='gender' value="Male" >Male
                <input type="radio" name="gender" id='gender' value="Female">Female
                <input type="radio" name="gender" id='gender' value="Other">Other<br>
                <p id='gender_error'></p>
            </div>
            <div id="submit">
                <input type="submit" name="submit" id='submit' value="Submit" onclick="return error()">
        </form>
    </div>        

    
</body>
</html>
