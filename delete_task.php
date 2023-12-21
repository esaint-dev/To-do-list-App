<?php

// Include the file with the task functions
include 'task_functions.php';

// Check if the task parameter is set in the URL
if (isset($_GET['task'])) {
    // Get the task to delete
    $taskToDelete = $_GET['task'];

    // Delete the task from the file
    deleteTask($taskToDelete);

    // Redirect back to the main page
    header('Location: index.php');
    exit;
}

?>
