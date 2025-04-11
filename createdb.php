<?php
$conn = new mysqli("localhost", "root", "");
$conn->query("CREATE DATABASE IF NOT EXISTS feedback_db");
$conn->select_db("feedback_db");

$sql = "CREATE TABLE IF NOT EXISTS feedback (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255),
  category VARCHAR(100),
  message TEXT,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  status VARCHAR(50) DEFAULT 'New'
)";

if ($conn->query($sql)) {
  echo "Database and table created successfully.";
} else {
  echo "Error: " . $conn->error;
}
$conn->close();
?>
