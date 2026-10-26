<?php

//include database connection 
include 'config.php';

//checking: form  = empty / come from POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST' && trim($_POST["task_name"] ?? '') !== '') {
//remome spacesand save only clean data
$task_name = trim($_POST["task_name"]);

//insert the new task into the database
$stmt = $conn->prepare("INSERT INTO tasks (task_name) VALUES (?)");
$stmt->bind_param("s", $task_name);
$stmt->execute();
}

//redirect back to the main page
header("Location: index.php");
exit();
?>