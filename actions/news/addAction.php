<?php
require_once __DIR__ . '/../../app/config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
    $news_publish_date = date('Y-m-d H:i:s');

    if (move_uploaded_file($_FILES["news_image"]["tmp_name"], $target_file)) {
        $query = "INSERT INTO news (news_filename, news_title, news_author, news_content, news_publish_date, news_active) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param('sssssi', $news_filename, $news_title, $news_author, $news_content, $news_publish_date, $news_active);

        if ($stmt->execute()) {
            header('Location: ../../index.php?page=news&action=index');
            exit();
        } else {
            echo "Błąd podczas dodawania aktualności: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Błąd podczas przesyłania pliku.";
    }
}
?>
