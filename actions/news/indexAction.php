<?php
require_once __DIR__ . '/../../app/config/db.php';

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$query = "SELECT * FROM news";
$result = $db->query($query);
$news = $result->fetch_all(MYSQLI_ASSOC);

?>
