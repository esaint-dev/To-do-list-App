<?php

// Function to get tasks from the file
function getTasks() {
    $tasks = [];

    // Open the tasks.txt file
    $file = fopen('tasks.txt', 'r');

    // Read tasks from the file
    while (!feof($file)) {
        $task = trim(fgets($file));
        if (!empty($task)) {
            $tasks[] = $task;
        }
    }

    // Close the file
    fclose($file);

    return $tasks;
}

// Function to add a task to the file
function addTask($task) {
    // Open the tasks.txt file in append mode
    $file = fopen('tasks.txt', 'a');

    // Add the task to the file
    fwrite($file, $task . PHP_EOL);

    // Close the file
    fclose($file);
}

// Function to delete a task from the file
function deleteTask($taskToDelete) {
    // Read all tasks from the file
    $tasks = getTasks();

    // Open the tasks.txt file in write mode
    $file = fopen('tasks.txt', 'w');

    // Write tasks back to the file, excluding the one to delete
    foreach ($tasks as $task) {
        if ($task != $taskToDelete) {
            fwrite($file, $task . PHP_EOL);
        }
    }

    // Close the file
    fclose($file);
}

?>
