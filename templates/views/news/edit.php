<?php
require_once __DIR__ . '/../../app/config/db.php';

if (isset($_GET['id'])) {
    $newsId = intval($_GET['id']);
    $query = "SELECT * FROM news WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('i', $newsId);
    $stmt->execute();
    $result = $stmt->get_result();
    $news = $result->fetch_assoc();
    $stmt->close();
}
?>

<form action="actions/news/editAction.php?id=<?php echo $news['id']; ?>" method="post" enctype="multipart/form-data">
    <label for="news_image">Obrazek:</label>
    <?php if (!empty($news['news_filename'])): ?>
        <img src="/startweb3tpe/uploads/news/<?php echo $news['news_filename']; ?>" width="50"><br>
    <?php endif; ?>
    <input type="file" id="news_image" name="news_image" accept=".jpg, .jpeg, .png, .gif"><br>

    <label for="news_title">Tytuł:</label>
    <input type="text" id="news_title" name="news_title" value="<?php echo htmlspecialchars($news['news_title']); ?>"><br>

    <label for="news_author">Autor:</label>
    <input type="text" id="news_author" name="news_author" value="<?php echo htmlspecialchars($news['news_author']); ?>"><br>

    <label for="news_content">Treść:</label>
    <textarea id="news_content" name="news_content"><?php echo htmlspecialchars($news['news_content']); ?></textarea><br>

    <label for="news_active">Aktywność:</label>
    <input type="checkbox" id="news_active" name="news_active" value="1" <?php echo $news['news_active'] ? 'checked' : ''; ?>><br>

    <input type="submit" value="Zapisz">
</form>
