<?php
// Database connection details
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$dbname = 'db_shopnswap';

// Establish a connection to the database
$conn = new mysqli($host, $user, $pass, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$rentreqDur = $_POST['rentreqDur'];
$rentreqComment = $_POST['rentreqComment'];

// Insert data into the database
$sql = "INSERT INTO RENTREQ_TBL (RR_DUR, RR_COMMENT)
        VALUES ('$rentreqDur', '$rentreqComment')";

if ($conn->query($sql) === TRUE) {
    header('Content-Type: application/json');
    echo json_encode(['success' => true]);
} else {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => $conn->error]);
}

// Close the database connection
$conn->close();
?>
