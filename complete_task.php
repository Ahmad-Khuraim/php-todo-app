<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);


    //1-0= 1 (complete), 1-1= 0 (incomplete) - toggle!
    $stmt = $conn->prepare("UPDATE tasks SET is_completed = 1 - is_completed WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

//redirect back to the main page
header("Location: index.php");
exit;

?>