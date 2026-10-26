<?php
//connect with config.php file
include 'config.php';

//extract the tasks from the database, new will be on top
$result = $conn->query("SELECT * FROM tasks ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Todo List</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h1>My Todo List</h1>

        <!-- form to add new task -->
        <form action="add_task.php" method="POST" id="taskForm">
            <input type="text" name="task_name" id="taskInput" placeholder="Add a new task" required>
            <button type="submit">Add</button>
        </form>

        <!-- task list with by PHP loop -->

        <ul class="task-list">
            <?php while ($row = $result->fetch_assoc()): ?>
                <li class="<?php echo $row['is_completed'] ? 'completed' : ''; ?>">
                    <span class="task-name">
                     <?php echo htmlspecialchars($row['task']); ?>
                    </span>

                    <span class="task-actions">
                        <a href="complete_task.php?id=<?php echo $row['id']; ?>" class="btn-complete">Done</a>
                        
                        <a href="delete_task.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirmDelete();">Delete</a>
                    </span>

                </li>

            <?php endwhile; ?>
        </ul>
    </div>


    <script src="script.js"></script>


</body>
</html>
        