<?php
if (!defined('DB_HOST')) {
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'startweb');

    $db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($db->connect_errno) {
        die("Failed to connect to database: " . $db->connect_error);
    }
}
?>
