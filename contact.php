<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="D:\Study\Programming\WEB\First-website\Style\style.css">
</head>
<body>
    <ul>
        <li><a class="active" href="D:\Study\Programming\WEB\First-website\pages\index.html">HOME</a></li>
        <li><a class="active" href="D:\Study\Programming\WEB\First-website\pages\portfolio.html">PORTFOLIO</a></li>
        <li><a class="active" href="D:\Study\Programming\WEB\First-website\pages\ToDo_List.html">ToDo List</a></li>
        <li><a class="active" href="D:\Study\Programming\WEB\First-website\pages\contact.html">CONTACT</a></li>
    </ul>

    <style>
        .head {
            text-align: center;
        }
        

        .navbar {
            list-style-type: none;
            margin: 10;
            padding: 10;
            display: flex; 
            justify-content: center; 
            background-color: #333; 
            border: 2px solid #444; 
            border-radius: 8px; 
        }

        .navbar li {
            padding: 14px 20px; 
        }

        .navbar li a {
            color: white; 
            text-decoration: none; 
            display: block;
        }

        .navbar li a:hover {
            background-color: #575757; 
            border-radius: 4px; 
        }

        .info-text {
            color: #333; 
            font-family: 'Arial', sans-serif; 
            font-size: 18px;
            font-weight: normal; 
            text-align: center; 
            margin: 20px 0; 
            padding: 10px; 
            background-color: #f7f7f7; 
            border-left: 5px solid #444; 
            border-radius: 8px; 
        }

        
        .contact-form {
            width: 600px; 
            margin: 20px auto;
            padding: 20px;
            background-color: #9de8f5;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .contact-form .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .contact-form .form-group input[type="text"],
        .contact-form .form-group input[type="email"],
        .contact-form .form-group input[type="date"],
        .contact-form .form-group input[type="number"] {
            width: 48%; 
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        /* Centering the submit button */
        .button-container {
            text-align: center; 
            margin-top: 20px;
        }

        .contact-form input[type="button"] {
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #333;
            color: white;
            cursor: pointer;
        }

        .contact-form input[type="button"]:hover {
            background-color: #575757;
        }
    </style>
</head>
<body>

    <h1 class="head">This is the contact page</h1>

    <!-- Contact Us Form -->
    <div class="contact-form">
        <form id="contactForm" action="submit_contact.php" method="POST">
            <!-- Combined Name, Email, and DOB Fields under one label -->
            <label for="name">Input:</label>
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Name" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="date" id="dob" name="dob" required>
            </div>

            <label for="address1">Other:</label>
            <div class="form-group">
                <input type="text" id="address1" name="address1" placeholder="Address Line 1" required>
                <input type="text" id="address2" name="address2" placeholder="Address Line 2" required>
            </div>

            <label for="contact">Contact:</label>
            <div class="form-group">
                <input type="text" id="house" name="house" placeholder="House" required>
                <input type="text" id="block" name="block" placeholder="Block" required>
                <input type="text" id="road" name="road" placeholder="Road" required>
                <input type="text" id="area" name="area" placeholder="Area" required>
                <input type="text" id="country" name="country" placeholder="Country" required>
            </div>

            <label for="phone">Phone:</label>
            <div class="form-group">
                <input type="number" id="phone" name="phone" placeholder="Phone" required>
                <input type="number" id="mobile" name="mobile" placeholder="Mobile" required>
                <input type="number" id="fax" name="fax" placeholder="Fax" required>
            </div>

            
            <div class="button-container">
                <input type="submit" value="Submit">
            </div>            
        </form>
    </div>
</body>
</html>