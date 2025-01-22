<?php
require_once __DIR__ . '/../../app/config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['id'])) {
    $newsId = intval($_GET['id']);
    $target_dir = __DIR__ . "/../../uploads/news/";
    $target_file = $target_dir . basename($_FILES["news_image"]["name"]);

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    $news_filename = basename($_FILES["news_image"]["name"]);
    $news_title = $_POST['news_title'];
    $news_author = $_POST['news_author'];
    $news_content = $_POST['news_content'];
    $news_active = isset($_POST['news_active']) ? 1 : 0;

    if (!empty($news_filename) && move_uploaded_file($_FILES["news_image"]["tmp_name"], $target_file)) {
        $query = "UPDATE news SET news_filename = ?, news_title = ?, news_author = ?, news_content = ?, news_active = ? WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param('ssssii', $news_filename, $news_title, $news_author, $news_content, $news_active, $newsId);
    } else {
        $query = "UPDATE news SET news_title = ?, news_author = ?, news_content = ?, news_active = ? WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param('sssii', $news_title, $news_author, $news_content, $news_active, $newsId);
    }

    if ($stmt->execute()) {
        header('Location: ../../index.php?page=news&action=index');
        exit();
    } else {
        echo "Błąd podczas edycji aktualności: " . $stmt->error;
    }

    $stmt->close();
}
?>
