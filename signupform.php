<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include("../connection/connection.php");?>
    <link rel="icon" type="image/jpg" href="../ImagesFolder/Everest Deal.jpg"> 
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <div class="signupbegun">
        <h2>Signup</h2>
        <form action="../signup/Signup_process.php" method="POST" >
            <div class="init_signup">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required autocomplete="off">
            </div>
            <div class="init_signup">
            <label for="registrationId">PU Registration ID:</label>
            <input type="text" id="registrationId" name="registrationId" required autocomplete="off">
            </div>

            <div class="init_signup">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender"  required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="init_signup">
                <label for="passkey">Password:</label>
                <input type="password" id="passkey" name="passkey" required>
                <button type="button" id="o" onclick="passwordVisibility()">o</button>
            </div>
            <div class="init_signup">
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" id="confirmpassword" name="confirmpassword" required>
                <button type="button" id="oo"="confirmPasswordVisibility()">o</button>
            </div>
            <button type="submit" id="submit"name="submit">Sign Up</button>
            <div class="info"></div>

            <p id="info"></p>
            <p id="infopassword"></p>
            
            <!-- ../ is used to go up one level in the directory structure and then navigate to the LoginFolder -->
            <p>Already have an account? <a href="../login/loginform.php">Login</a></p>


            
        </form>
    </div>
    <script src="signup.js"></script>
    <script src="../javascript/passwordvisibility.js"></script>
</body>
</html>