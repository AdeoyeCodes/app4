<?php
$servername = "localhost";
$username = "boluxcod_Bolu";
$password = "Boluwatife@30";
$dbname = "boluxcod_mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate and sanitize the input data
$post_content = $conn->real_escape_string($_POST['post_content']);
$description = $conn->real_escape_string($_POST['description']);
$edit_mode = $_POST['edit_mode'] === 'true';
$post_id = $conn->real_escape_string($_POST['post_id']);

if ($edit_mode) {
    $sql = "UPDATE posts SET `post_content` = '".$post_content."', `description` = '".$description."' WHERE `post_id` = '".$post_id."'";
} else {
    // Insert data into the database for a new post
    $sql = "INSERT INTO posts (`post_content`, `description`) VALUES ('".$post_content."', '".$description."')";
}

if ($conn->query($sql) === TRUE) {
    // If insertion/update is successful, you can return a success message if needed
    echo "Post added/updated successfully!";
} else {
    // If there's an error, you can return an error message
    echo "Error adding/updating post: " . $conn->error;
}

$conn->close();
?>
