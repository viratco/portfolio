<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input data
    $Name = trim($_POST["Name"]);
    $Email = trim($_POST["Email"]);
    $Subject = trim($_POST["Subject"]);
    $Message = trim($_POST["Message"]);

    // Validate the input (you can add more validation as needed)
    if (empty($Name) || empty($Email) || empty($Subject) || empty($Message)) {
        echo "All fields are required!";
        exit;
    }

    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit;
    }

    // Connect to MySQL database
    $servername = "db"; // Change this if your MySQL server is hosted elsewhere
    $username_db = "virat"; // Change this to your MySQL username
    $password_db = "virat@10"; // Change this to your MySQL password
    $dbname = "portfolio";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert new user
    $sql = "INSERT INTO data (Name, Email, Subject, Message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters to the prepared statement
    $stmt->bind_param("ssss", $Name, $Email, $Subject, $Message);

    // Execute the statement
    if ($stmt->execute()) {
        // New user inserted successfully
        echo "<script>alert('User registered successfully'); window.location.href='contactme.php';</script>";
    } else {
        // Error in insertion
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect back to the contact form if accessed without POST method
    header("Location: contactme.php");
    exit;
}
?>
