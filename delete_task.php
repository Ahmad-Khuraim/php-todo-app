<?php
include 'config.php';


//id from URL  (index.php)
if (isset($_GET['id'])) {
    //intval - convert string to integer
    $id = intval($_GET['id']);

    //delete the task from the database
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}


//redirect back to the main page
header("Location: index.php");
exit;
?>