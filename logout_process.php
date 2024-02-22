<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect the user to the desired page after logout
header("Location:loginform.php ");
exit();
?>
