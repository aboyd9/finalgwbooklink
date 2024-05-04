<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy/Sell Books</title>
    <link rel="stylesheet" href="style.css">
    <style>
        header {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 20px;
        }
        .flex-container{
            display: flex;
            align-items: space-between;
        }
        
        input {
          width: 100%;
          padding: 10px;
          margin-bottom: 15px;
          border: 1px solid #ccc;
          border-radius: 5px;
          font-size: 16px;
          transition: border-color 0.3s ease;
        }
        
        /* Hover effect */
        input:hover {
          border-color: #999;
        }
        
        /* Focus effect */
        input:focus {
          outline: none;
          border-color: #007bff; /* Change color as desired */
        }
        
        /* Hide the default radio input */
        .radio {
          display: none;
        }
        
        /* Style the label to create custom radio buttons */
        .radio + label {
          display: inline-block;
          cursor: pointer;
          padding: 5px 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
          background-color: #f9f9f9;
        }
        
        /* Style for when the radio button is checked */
        .radio:checked + label {
          background-color: #007bff;
          color: white;
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
            <li><a href="home.html">Home</a></li> 
            <li><a href="buy_sell.php">Buy/Sell Books</a></li> 
            <li><a href="ratings4.php">Rate my Professor</a></li> 
            <li><a href="notes.php">Share Notes</a></li> 
        </ul> 
    </nav>

    <header>
        <h1>Upload your book</h1>
        <p>Please fill out the form below to list your textbook</p>
    </header>

    <div class="container">
        <form method="post" action="buy_sell.php">
                <label for="title">Book Title</label><br>
                <input type="text" name="title" id="title" placeholder="Book Title" required><br><br>

                <label for="edition">Book Edition</label><br>
                <input type="text" name="edition" id="edition" placeholder="Book Edition"><br><br>

                <p class=flex-container>Condition</p>
                <input type="radio" name="condition" id="poor" value="poor" class="radio">
                <label for="poor">Poor</label>
                <input type="radio" name="condition" id="bad" value="bad" class="radio">
                <label for="bad">Bad</label>
                <input type="radio" name="condition" id="neutral" value="neutral" class="radio">
                <label for="neutral">Neutral</label>
                <input type="radio" name="condition" id="good" value="good" class="radio">
                <label for="good">Good</label>
                <input type="radio" name="condition" id="mint" value="mint" class="radio">
                <label for="mint">Mint</label><br><br>

                <label for="price">Book Price</label><br>
                <input type="number" name="price" id="price" placeholdere="Book Price" required><br><br>

                <label for="description">Book Description</label><br>
                <textarea name="description" id="description" rows="3" cols="120"></textarea><br><br>

                <label for="contact_name">Contact Name</label><br>
                <input type="text" name="contact_name" id="contact_name" placeholder="Contact Name"><br><br>

                <label for="contact_email">Contact Email</label><br>
                <!--<input type="tel" name="contact_phone" id="contact_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890"><br><br>-->
                <input type="email" name="contact_email" id="contact_email" required>

                <button type="submit" value="Submit" name="submit">Submit Listing</button>
            </form>
    </div>
</body>
</html>