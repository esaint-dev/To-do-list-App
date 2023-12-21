<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>


<div class="main-container-task">
<h3>Tasks:</h3>
    <ul>
        <?php
            // Include the file with the task functions
            include 'task_functions.php';

            // Display tasks
            $tasks = getTasks();
            foreach ($tasks as $task) {
                echo "<li>$task <a href='delete_task.php?task=$task'>Delete-Task</a></li>";
            }
        ?>
    </ul>
</div>

</body>
</html>