<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>
<h2>Welcome to Dashboard</h2>
<a href="exam.php">Start Exam</a><br>
<a href="logout.php">Logout</a>