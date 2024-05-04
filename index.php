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
    // Retrieve entered username and password from form
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // Query database to retrieve user's record
    $sql = "SELECT * FROM users WHERE username = '$input_username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, fetch the record
        $row = $result->fetch_assoc();
        $stored_password = $row["password"];

        // Check if entered password matches stored password
        if ($input_password == $stored_password) {
            // Store user information in session variables
            $_SESSION["username"] = $input_username;

            // Redirect to the home page
            header("Location: home.php");
            exit();
        } else {
            $error_message = "Invalid username or password.";
        }
    } else {
        $error_message = "User not found.";
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
    <title>Login Page</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('background.jpeg'); /* Background image */
    background-size: cover; /* Cover the entire background */
    background-position: center; /* Center the background image */
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
            background-color: #ffffff;
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
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to GW BookLink</h1>
    <p class="welcome-message">Please login to access your account.</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Login">
    </form>
    <?php if(isset($error_message)): ?>
    <p class="error-message"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <p>Don't have an account? <a href="create_account.php">Create an account</a>.</p>
</div>

</body>
</html>
