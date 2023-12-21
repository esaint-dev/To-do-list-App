<?php

// Include the file with the task functions
include 'task_functions.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the task from the form
    $newTask = $_POST['task'];

    // Add the task to the file
    addTask($newTask);
}
    // Redirect back to the main page
    header('Location: task.php');
    exit;


    // $task = $_POST['task'];
    // echo "Task: ".$task
?>
