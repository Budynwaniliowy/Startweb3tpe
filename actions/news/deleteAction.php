<?php
require_once __DIR__ . '/../../app/config/db.php';

if (isset($_GET['id'])) {
    $newsId = intval($_GET['id']);

    $query = "DELETE FROM news WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('i', $newsId);

    if ($stmt->execute()) {
        header('Location: ../../index.php?page=news&action=index');
        exit();
    } else {
        echo "Błąd podczas usuwania aktualności: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Nie podano ID aktualności do usunięcia.";
}
?>
