<?php

// its xamp defauslt vales 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "todo_db";


// connection with SQL
$conn = new mysqli($host, $user, $pass, $dbname, 3307);

// checking about the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}