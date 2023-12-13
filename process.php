<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can now process the form data as needed (e.g., send an email, store in a database, etc.)
    
    // For demonstration purposes, let's just print the data
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message <br>";
}
?>
