<?php
session_start(); // Start the session

// Establish database connection
$servername = "localhost:3306";
$username = "project";
$password = "GWbooklink1";
$database = "mydb";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $input_GWID = $_POST["GWID"];
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // Check if username already exists
    $check_username_query = "SELECT * FROM users WHERE username='$input_username'";
    $check_username_result = $conn->query($check_username_query);

    if ($check_username_result->num_rows > 0) {
        $error_message = "Username already exists. Please choose a different one.";
    } else {
        // Insert new user into database
        $insert_query = "INSERT INTO users (GWID, username, password) VALUES ('$input_GWID','$input_username', '$input_password')";
        
        if ($conn->query($insert_query) === TRUE) {
            $success_message = "Account created successfully. You can now <a href='index.php'>login</a>.";
        } else {
            $error_message = "Error creating account: " . $conn->error;
        }
    }
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* Set background image */
            background-image: url('background.jpeg');
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the background image */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
.container {
    text-align: center;
    background-color: rgba(255, 255, 255, 0.8); /* Add opacity to the container */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}
        form {
            width: 300px;
            margin: 0 auto; /* Center the form horizontally */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
            color: #333333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #4CAF50;
            color: #ffffff;
            cursor: pointer;
            border-radius: 3px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .welcome-message {
            margin-bottom: 20px;
            color: #333333;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
        .success-message {
            color: green;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Create an Account</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <label for="GWID"> GWID</label>
        <input type="text" id="GWID" name="GWID" required>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Create Account">
    </form>
    <?php if(isset($error_message)): ?>
    <p class="error-message"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <?php if(isset($success_message)): ?>
    <p class="success-message"><?php echo $success_message; ?></p>
    <?php endif; ?>
    <p>Already have an account? <a href="index.php">Login now</a>.</p>
</div>

</body>
</html>
