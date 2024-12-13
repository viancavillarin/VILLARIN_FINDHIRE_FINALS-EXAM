<?php
session_start();
require_once 'core/models.php'; // Include the model file for database functions

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'applicant') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Dashboard</title>
    <link rel="stylesheet" href="styles/applicant_dashboard.css">
</head>
<body>
    <div class="navbar">
        <a href="jobListings.php">Job Listings</a>
        <a href="myApplications.php">My Applications</a>
        <a href="applicant_messages.php">Messages</a>
        <a href="core/handleForms.php?logoutAUser=1" class="logout-link">Logout</a>
    </div>

    <div class="dashboard-container">
        <h1>Welcome Applicant: <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        <p class="welcome-message">Your personalized dashboard where you can view job listings, track your applications, and check messages.</p>
        
        <a href="jobListings.php">View Job Listings</a>
        <a href="myApplications.php">My Applications</a>
        <a href="applicant_messages.php">Messages</a>
        <a href="core/handleForms.php?logoutAUser=1" class="logout-link">Logout</a>

        <h2>Your Dashboard</h2>
        <!-- Add any other dashboard content here -->
    </div>
</body>
</html>