<?php
session_start(); // Start the session

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: index.php");
    exit; // Stop further execution
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #fffaf0;
            margin: 0;
            padding: 0;
        }

        /* Header Animation */
        .website-name {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px 0;
            font-size: 24px;
            font-weight: bold;
            animation: fadeInDown 1s ease;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

       /* Navigation bar styles */
        nav {
            color: white;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 25px; /* Oval shape */
            background-color: white; /* Default button color */
            border: 2px solid; /* Border color and thickness */
            transition: transform 0.3s ease, background-color 0.3s ease; /* Smooth transition effect */
            display: inline-block; /* Ensure the links are block-level */
        }

        nav ul li a:hover {
            background-color: #f0e8d6; /* Darker button color on hover */
            cursor: pointer; /* Change cursor to pointer on hover */
            transform: scale(1.05); /* Increase size on hover */
        }

        /* Main content styles */

        .container {
            padding: 20px;
            max-width: 800px;
            margin: 40px auto;
            background-color: #ffffff; /* White background */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }
        .container2a {
            padding: 80px;
            max-width: 800px;
            margin: 40px auto;
            background-color: #ffffff; /* White background */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
            display: flex; /* Add flexbox */
            flex-direction: row; /* Horizontal layout */
            justify-content: space-between; /* Spacing between items */
        }
         .container2 {
            padding: 35px;
            flex-basis: calc(50% - 20px);
            background-color: #fffaf0; 
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
            margin-right: 20px;
            transition: background-color 0.3s ease; /* Smooth transition effect */
            text-align: center;
        }

        .container2:hover {
            background-color: #f0e8d6; /* Darker beige color when hovered */
            cursor: pointer; /* Change cursor to pointer on hover */
        }

        .container3 {
            padding: 20px;
            max-width: 800px;
            margin: 40px auto;
            background-color: #ffffff; /* White background */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
            transition: background-color 0.3s ease; /* Smooth transition effect */
            text-align: center;
        }

        .container3:hover {
            background-color: #f0e8d6; /* Darker beige color when hovered */
            cursor: pointer; /* Change cursor to pointer on hover */
        }

        .container2, .container3 {
            transition: transform 0.3s ease; /* Smooth transition effect */
        }

        .container2:hover, .container3:hover {
            transform: scale(1.05); /* Increase size on hover */
        }

        .social-icons-container {
            text-align: right;
            margin-top: -50px;

        }

        .image-container {
            display: flex;
            justify-content: center;
        }

        .image-container img {
            max-width: 50%; /* Each image takes up 50% of the container */
            height: auto;
        }

        /* Logout button styles */
        .logout-btn {
            font-size: 16px; /* Adjust font size */
            padding: 10px 20px; /* Increase padding */
            border-radius: 25px; /* Oval shape */
            background-color: white; /* Default button color */
            border: 2px solid; /* Border color and thickness */
            transition: transform 0.3s ease, background-color 0.3s ease; /* Smooth transition effect */
        }

        .logout-btn:hover {
            background-color: #f0e8d6; /* Darker button color on hover */
            cursor: pointer; /* Change cursor to pointer on hover */
            transform: scale(1.05); /* Increase size on hover */
        }


    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
</head>
<body>
    <h1 style="font-family: 'Montserrat', sans-serif;
            font-size: 50px; 
            text-align: center; 
            margin-top: 50px;"> GWU BookLink </h1>
<img src="logo2.jpg" alt="Logo" style="max-width: 200px; height: auto; position: absolute; top: 35px; left: 30px;">

                    <!-- Social Media Icons -->
<div class="social-icons-container">
    <div style="display: inline-block; margin-right: 30px;">
        <a href="https://facebook.com" target="_blank" style="display: inline-block; margin-right: 10px;">
            <img src="facebook-icon.jpeg" alt="Facebook" style="max-width: 50px; height: auto;">
        </a>
        <a href="https://twitter.com" target="_blank" style="display: inline-block; margin-right: 10px;">
            <img src="twitter-icon.jpeg" alt="Twitter" style="max-width: 50px; height: auto;">
        </a>
        <a href="https://instagram.com" target="_blank" style="display: inline-block;">
            <img src="instagram-icon.jpeg" alt="Instagram" style="max-width: 50px; height: auto;">
        </a>
    </div>
</div>

    <!-- Navigation bar -->
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="buy_sell.php">Buy/Sell Books</a></li>
            <li><a href="ratings4.php">Rate my Professor</a></li>
            <li><a href="notes.php">Share Notes</a></li>
        </ul>
    </nav>

<p style="font-size: 32px; text-align:center; font-weight: bold;">Hello <?php echo $_SESSION['username']; ?></p>

                <!-- Logout button -->
    <div style="text-align: right; margin-top: -70px; margin-right: 30px;">
        <?php
        // Check if user is logged in
        if (isset($_SESSION['username'])) {
            // Display logout button if user is logged in
            echo '<form action="logout.php" method="post">
                    <input class="logout-btn" type="submit" value="Logout">
                  </form>';
        }
        ?>
    </div>

</br> 
<div class="image-container">
    <img src="img1.jpeg">
    <img src="img2.jpeg">
</div>


    <!-- Main content -->
    <div class="container" style="text-align: center;">
        <h1>Welcome to GWBookLink</h1>
        <p>The GWU Book Exchange platform is an essential resource for the George Washington University community. We simplify the process of acquiring textbooks, making it easier for students to find what they need and facilitating seamless transactions between peers.</p>
    </div>

<div class="container2a">

    <div class="container2" onclick="redirectToBuySellgPage()"> 
            <h2 >Buy and Sell Books</h2>
            <p> Utilize our buy and sell feature to easily purchase textbooks from fellow students or sell your own to others in the GWU community. </p> </br>
            <a href="buy_sell.php" style="color: blue;"> <h2 style="font-size: 20px;"> Begin Buying and Selling</h2> </a>
    </div>
        <div class="container2" onclick="redirectToRatingPage();">
            <h2>Rate my Professor</h2>
            <p> Rate and review professors to help fellow students make informed decisions, ensuring a valuable academic experience for all within the GWU community. </p> </br>
          <a href="ratings4.php" style="color: blue;"> <h2 style="font-size: 20px;"> Start Rating professors</h2> </a>

        </div>
        <!-- Second content section -->
        <div class="container2" onclick="redirectToSharePage()">
            <h2>Share notes</h2>
            <p> Share and exchange study materials with your peers using our note-sharing feature, fostering collaborative learning within the GWU community. </p> </br></br>
          <a href="notes.php" style="color: blue;"> <h2 style="font-size: 20px;"> Start Sharing Notes</h2> </a>
        </div>
</div>

        <!-- Newsletter Signup -->
    <div class="container3" style="text-align: center;">
        <h2>Stay Updated with GWBookLink</h2>
        <p>Subscribe to our newsletter for updates, news, and special offers!</p>
        <form action="subscribe.php" method="post">
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="submit" value="Subscribe">
        </form>
    </div>

        <!-- Footer Section -->
    <footer style="background-color: #333; color: white; text-align: center; padding: 20px;">
        <p>&copy; 2024 GWBookLink. All rights reserved.</p>
    </footer>

    <script>
        function redirectToRatingPage() {
           window.location.href = "ratings4.php"; // Redirect to rating2.php
        }
        function redirectToSharePage() {
           window.location.href = "notes.php"; // Redirect to rating2.php
        }
        function redirectToBuySellgPage() {
           window.location.href = "buy_sell.php"; // Redirect to rating2.php
        }
    </script>

</body>
</html>