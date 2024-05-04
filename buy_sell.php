<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buy/Sell Books - GW BookLink</title>
    <link rel="stylesheet" href="style.css">
    <style>
        header {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 20px;
        }
        .container{
            display: flex;
            flex-direction: column;
            padding: 30px;
            max-width: 1000px; /* Increased width for a more spacious layout */
            height: fit-content;
            margin: 20px auto; /* Reduced vertical margin for a tighter layout */
            background-color: #fff; /* White background */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }
        
        .listing-container{
            display: grid;
            justify-content: center;
            align-items: center;
            align-self: center;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: repeat(auto);
            gap: 25px;
            width: 80%;
        }

        .book-listing{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 10px 0 10px;
            max-width: 400px;
            max-height: 300px;
            background-color: white;
            filter: drop-shadow(16px 16px 0.5rem #d3d3d3);
            padding: 2rem;
            /*overflow: hidden;*/
        }
        
        /*.book-description{*/
        /*    overflow: hidden;*/
        /*    text-overflow: ellipsis;*/
        /*    white-space: nowrap;*/
        /*}*/

        .book-listing > *{
            margin: 0.5rem;
        }

        .book-description{
            margin: 0 2rem 0 2rem;
        }

        .book-image{
            max-width: 40%;
        }

        .book-title{
            font-size: 1.5rem;
            text-align: center;
        }
        button{
            padding: 10px 15px;
          border: 1px solid #ccc;
          border-radius: 4px;
          background-color: #f9f9f9;
          cursor: pointer;
          font-size: 1.5;
          
        }
        button:hover{
            background-color: #d9d9d9;
        }
        .sell-books{
            text-decoration: none;
            align-self: center;
            font-size: 16px;
            color: #000;
        }
    </style>
</head>
</head>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
</head>
<body>
    <h1 style="font-family: 'Montserrat', sans-serif;
            font-size: 50px; 
            text-align: center; 
            margin-top: 50px;"> GWU BookLink </h1>
<img src="logo2.jpg" alt="Logo" style="max-width: 200px; height: auto; position: absolute; top: 35px; left: 30px;">
</div>
<body>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="buy_sell.php">Buy/Sell Books</a></li>
            <li><a href="ratings4.php">Rate my Professor</a></li>
            <li><a href="notes.php">Share Notes</a></li>
        </ul>
    </nav>
    <header>
        <h1>Buy and Sell Textbooks</h1>
        <p>List and browse textbooks here!</p>
    </header>
    <div class="container">
        <button><a href="uploadBooks.php" class="sell-books btn">Submit a Book Listing Here</a></button>

        <div class="listing-container">
            <!-- the div below is what will be php'ed into the code with each addition of books being uploaded -->
            <?php
                $username="project";
                $password="GWbooklink1";
                $database="mydb";

                $mysqli = new mysqli("localhost", $username, $password, $database);

                // Check connection
                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }
                
                if(isset($_POST['submit']) && !empty($_POST['submit'])) {
                // Retrieve form data
                    $title = $_POST['title'];
                    $edition = $_POST['edition'];
                    $condition = $_POST['condition'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $contactName = $_POST['contact_name'];
                    $contact = $_POST['contact_email'];
                    
                    // SQL to insert data into database
                    $sqlinsert = "insert into books (BookTitle, BookEdition, BookCondition, BookPrice, BookDescription, SellerName,SellerContacts) 
        values('$title', '$edition', '$condition', '$price', '$description', '$contactName','$contact')";
                    
                    if ($mysqli->query($sqlinsert) === TRUE) {
                      echo "<script>console.log('New record created successfully')</script>";
                    } else {
                      echo "Error: " . $sqlinsert . "<br>" . $mysqli->error;
                    }
                    
                
                }
                

                // Prepare and execute SQL statement to retrieve data from the database
                $sql = "SELECT * FROM books";
                $result = $mysqli->query($sql);

                // Check if there are rows returned from the query
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        // Output HTML content for each row
                        echo '<div class="book-listing card-container card"> 
                            <h1 class="book-title">'.$row["BookTitle"].'</h1>
                            <p class="book-edition">Edition: '.$row["BookEdition"].'</p>
                            <p class="book-condition">Condition: '.$row["BookCondition"].'</p>
                            <p class="book-price">Price: $'.$row["BookPrice"].'</p>
                            <p class="book-description">'.$row["BookDescription"].'</p>
                            <form method="POST" action="purchase.php" id="ThisForm">
                                <button class="buy-btn btn" id="ThisNumber" data-book-id="'.$row["BookID"].'">Buy</button>
                            </form>
                        </div>';
                        
                    }
                } else {
                    echo "0 results";
                }

                // Close the database connection
                $mysqli->close();
                
                ?>
        </div>
    </div>

     <script>
        var form = document.querySelector('#ThisForm');
        var buyButtons = document.querySelectorAll('.buy-btn');
        buyButtons.forEach(function(button){
            var bookId = button.getAttribute('data-book-id');
            button.addEventListener('click', function(){
                var hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'bookId';
                hiddenInput.value = bookId;
                button.append(hiddenInput);
            })
        })
        
        
     
    //  document.addEventListener('DOMContentLoaded', function() {
    //     var buyButtons = document.querySelectorAll('.buy-btn');
    //     buyButtons.forEach(function(button) {
    //         button.addEventListener('click', function() {
    //             var bookId = button.getAttribute('data-book-id');
                
    //             var xhr = new XMLHttpRequest();
    //             xhr.open('POST', 'purchase.php', true);
    //             xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    //             xhr.onreadystatechange = function() {
    //                 if (xhr.readyState === XMLHttpRequest.DONE) {
    //                     if (xhr.status === 200) {
    //                          // Display success message or handle response
    //                         window.location.href = 'purchase.php'; // Redirect after successful processing
    //                     } else {
    //                         console.error('Error:', xhr.status, xhr.statusText); // Log error message
    //                         // Optionally, provide user feedback about the error
    //                     }
    //                 }
    //             };
    //             var data = 'bookId=' + encodeURIComponent(bookId);
    //             alert(data);
    //             xhr.send(data);
    //         });
    //     });
    // });
     </script>
</body>
</html>