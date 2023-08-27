<?php

file_put_contents("error.txt", "Error: " . $_GET['error'] . "\n", FILE_APPEND);

header('Location:index.php');
exit();
?>