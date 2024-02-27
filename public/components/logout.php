<?php
session_start();
session_unset();
if(session_destroy()) {
    error_log("Session destroyed successfully.");
} else {
    error_log("Failed to destroy session.");
}
header("Location: ../../index.php");
?>