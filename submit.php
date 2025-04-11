<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback (email, category, message) VALUES ('$email', '$category', '$message')";
    if ($conn->query($sql)) {
        echo "Feedback submitted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
    $conn->close();
} else {
    // Prevent 405 error when accessed directly
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
