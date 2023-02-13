<?php

session_start();

if(isset($_SESSION['init']) === true) {
  session_unset(); // Delete all session variables
  session_destroy(); // Destroy the session
  echo 'The session has been finalized' . '<br>';
} else {
  echo 'The session has not been initialized' . '<br>';
}

echo '<a href="sessions2.php">Click to go back </a><br>';