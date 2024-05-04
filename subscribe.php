<?php
// Database connection parameters
$servername = "localhost:3306"; 
$username = "project"; 
$password = "GWbooklink1"; 
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    // Insert email into database
    $sql = "INSERT INTO subscriptions (email) VALUES ('$email')";
    if ($conn->query($sql) === TRUE) {
        // Close the PHP tag to insert JavaScript
        ?>
        <script>
            // Show pop-up message
            alert("Thank you for subscribing!");
            // Redirect to the home page immediately
            window.location.href = "home.php";
        </script>
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
