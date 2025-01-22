<style>


body {
    font-family: Arial, sans-serif;
    color: #eee;
    margin: 0;
    padding: 0 25px; 
}


form {
    margin: 20px 0;
}

form label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

form input[type="text"], form input[type="file"], #news_content {
    width: 60%;
    padding: 10px;
    margin: 5px 0 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    
}






</style>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="news_image">Obrazek:</label>
        <input type="file" class="form-control-file" id="news_image" name="news_image">
    </div>
    <div class="form-group">
        <label for="news_title">Tytuł:</label>
        <input type="text" class="form-control" id="news_title" name="news_title">
    </div>
    <div class="form-group">
        <label for="news_author">Autor:</label>
        <input type="text" class="form-control" id="news_author" name="news_author">
    </div>
    <div class="form-group">
        <label for="news_content">Treść:</label>
        <textarea class="form-control" id="news_content" name="news_content"></textarea>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="news_active" name="news_active" value="1">
        <label class="form-check-label" for="news_active">Aktywność</label>
    </div>
    <button type="submit" class="btn custom-btn">Zapisz</button>
</form>
