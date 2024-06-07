<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="index.css">
    
</head>
<body>
    <div id='form'>
        <form action="database.php" method="POST">
            <div id='input1'>
                <div id="FirstName">
                    <label>First Name:</label><br>
                    <input type="text" name="FirstName" id='FirstName' placeholder='First Name'>
                </div>
                <div id="LastName">
                    <label>Last Name:</label><br>
                    <input type="text" name="LastName" id='LastName' placeholder='Last Name'>
                </div>
                <div id="pwd">
                    <label>Password:</label><br>
                    <input type="password" name="pwd" id='pwd' >
                </div>
                <div id="birthday">
                    <label>Date of birth:</label><br>
                    <input type="date" name="dob" id='dob'>
                </div>
            </div>
            <div id="gender">
                <label>Gender:</label><br>
                <input type="radio" name="gender" id='gender' value="Male" >Male
                <input type="radio" name="gender" id='gender' value="Female">Female
                <input type="radio" name="gender" id='gender' value="Other">Other
            </div>
            <div id="submit">
                <input type="submit" name="submit" id='submit' value="Submit">
        </form>
    </div>        

    
</body>
</html>
