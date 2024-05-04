<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>purchase</title>
    <link rel="stylesheet" href="style.css">
    <style>
        header {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 20px;
            font-size: 2rem;
        }
        .flex-center{
            justify-self: center;
        }
        .return-btn{
            margin: 10px 15px 10px 15px;
            bordeer-radius: 20px;
        }
        .return-btn:hover{
            
        }
        
    </style>
</head>
<body>
    <h1 style="font-family: 'Montserrat', sans-serif;
            font-size: 50px; 
            text-align: center; 
            margin-top: 50px;"> GWU BookLink </h1>
<img src="logo2.jpg" alt="Logo" style="max-width: 200px; height: auto; position: absolute; top: 35px; left: 30px;">
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="buy_sell.php">Buy/Sell Books</a></li>
            <li><a href="ratings4.php">Rate my Professor</a></li>
            <li><a href="notes.php">Share Notes</a></li>
        </ul>
    </nav>
    <header>
        <h1>Thank you for your purchase!</h1>
    </header>
</body>

<?php 
    $username="project";
    $password="GWbooklink1";
    $database="mydb";

    $mysqli = new mysqli("localhost", $username, $password, $database);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

if ($_SERVER['REQUEST_METHOD'] === 'POST')  {
    // Retrieve the bookId value from the URL
    $bookId = $_POST['bookId'];
    
    // Use the bookId value as needed
    // echo "Book ID: " . $bookId;
}else{
    echo "error";
}

//email section
$emailQuery = "SELECT SellerContacts from books where BookID=$bookId";
$bookQuery = "SELECT BookTitle from books where BookID=$bookId";
$bookResult = $mysqli->query($bookQuery);
$sellerNameQuery = "SELECT SellerName from books where BookID=$bookId";
$nameResult = $mysqli->query($sellerNameQuery);
$titleQuery = "SELECT BookTitle from books where BookId=$bookId";
$titleResult = $mysqli->query($titleQuery);
$result = $mysqli->query($emailQuery);

if($nameResult -> num_rows > 0){
    $nameRow = $nameResult->fetch_assoc();
    $name = $nameRow["SellerName"];
    $titleRow = $titleResult -> fetch_assoc();
    $title = $titleRow["BookTitle"];
    
    echo "<p>Your book <strong>$title</strong> is just one email away!</p>";
    echo "<p class='flex-center'>Below is the seller's name and contact information. Please reach out to the seller to discuss book exchange plans and payment.</p>";
    echo "<h3 class='flex-center'>Please contact $name for more information.</h3><br>";
}

if (($result->num_rows > 0) && ($bookResult->num_rows > 0)) {
    // Retrieve the email address from the database
    $row = $result->fetch_assoc();
    $bookRow = $bookResult->fetch_assoc();
    $to = $row["SellerContacts"];// sending the email
    $book = $bookRow["BookName"];
    $subject = "Your book has been sold!";
    $body = "Hello!
    
    We have great news! Your book listing for $book has been sold! The buyer will be contacting you soon, so keep an eye out for their email!
    
    Thank you for using GW Booklink!";
    
    mail($to, $subject, $body);
    
    echo "<h3 class='flex-center'>You can reach the seller at $to. <br></h3>";
    echo "<p>Thank you for choosing GW Booklink!</p>";
    echo "<a href='buy_sell.php' class='return-btn'>Click here to return to the listing page</a> ";
}

// if(mail($result, $subject, $body)){
//     echo "Email sent successfully to $result.";
// } else{
//     echo "Email sending failed...";
// }

$deleteQuery = "delete from books where BookID=$bookId";
if($mysqli->query($deleteQuery) === TRUE){
    alert("record deleted successfully");
    
}

$mysqli->close();
?>

</html>