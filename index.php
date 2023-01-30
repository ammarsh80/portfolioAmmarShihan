<?php

$page = trim(filter_var($_GET['page'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

include 'template.php';
?>

