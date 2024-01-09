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

// Create the directory if it doesn't exist
$targetDir = __DIR__ . "/rentImages/"; // Adjusted path
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}

// Get form data
$rentName = $_POST['rentName'];
$rentPrice = $_POST['rentPrice'];
$rentCategory = $_POST['rentCategory'];

$rentImage = ''; // Placeholder for the image path

if ($_FILES['rentImage']['error'] == 0) {
    $extension = strtolower(pathinfo($_FILES['rentImage']['name'], PATHINFO_EXTENSION));
    $filename = $conn->insert_id . '_' . time() . '.' . $extension; // Auto-incremented filename with timestamp
    $targetFile = $targetDir . $filename;

    if (move_uploaded_file($_FILES['rentImage']['tmp_name'], $targetFile)) {
        $rentImage = 'rentImages/' . $filename; // Adjusted relative path
    } else {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'error' => 'Failed to move uploaded file']);
        exit;
    }
}

// Insert data into the database
$sql = "INSERT INTO RENT_TBL (RENT_NAME, RENT_IMAGE, RENT_PRICE, RENT_CATEGORY)
        VALUES ('$rentName', '$rentImage', '$rentPrice', '$rentCategory')";

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
