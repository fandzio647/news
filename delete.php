<?php
// Establish a connection to the database
$conn = mysqli_connect("localhost", "root", "", "news");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to delete a post
function delete($id) {
    global $conn; // Access the global $conn variable

    $sql = "DELETE FROM `wpisy` WHERE id='" . $id . "'";
    $result = mysqli_query($conn, $sql);

    // Redirect to index.php after deleting the post
    header("Location:index.php");
}

// Retrieve the post ID from the POST parameter
$id = $_POST['id'];

// Call the delete function
delete($id);

// Display a success message if the post was deleted
if ($result) {
    echo "Wpis został usunięty pomyślnie.";
    header("Location:index.php");
} else {
    echo "Wystąpił błąd podczas usuwania wpisu.";
    header("Location:index.php");
}
