<?php
session_start();        // Start the session (to access session variables)
session_unset();        // Clear all session variables
session_destroy();      // Destroy the session
header("Location: login.php");  // Redirect to login page after logout
exit();
?>
