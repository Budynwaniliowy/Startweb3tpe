<style>


body {
    font-family: Arial, sans-serif;
    color: #eee;
    margin: 0;
    padding: 0 25px; 
}


table {
    width: 85%;
    border-collapse: collapse;
    margin: 20px 7%;
    font-size: 1em;
    min-width: 400px;
    color: #eee;
    background:rgb(55, 55, 55);
    box-shadow: 0 2px 3px rgba(0,0,0,0.1);
    border: 1px solid #ddd;
}

table th, table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table th {
    font-weight: bold;
}

table tr:nth-child(even) {
    background-color:rgb(36, 36, 36);
}

table img {
    border-radius: 5px;
    box-shadow: 0 2px 3px rgba(0,0,0,0.1);
}


a {
    text-decoration: none;
    color: #fff; 
    margin: 0 5px;
}

a:hover {
    text-decoration: underline;
    color: #51078c; 
}

form {
    margin: 20px 0;
}

form label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
    color: #6a0dad; 
}

form input[type="text"], form input[type="file"], form textarea {
    width: 100%;
    padding: 10px;
    margin: 5px 0 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

form input[type="submit"] {
    background-color: #6a0dad; 
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
}

form input[type="submit"]:hover {
    background-color: #51078c;
}

form input[type="checkbox"] {
    margin: 10px 0 20px;
}



</style>

<table>
    <tr>
        <th>Miniatura</th>
        <th>Tytuł</th>
        <th>Autor</th>
        <th>Data publikacji</th>
        <th>Akcje</th>
    </tr>
    <?php if (!empty($news)): ?>
        <?php foreach ($news as $item): ?>
        <tr>
            <td>
                <?php if (!empty($item['news_filename'])): ?>
                    <img src="/startweb3tpe/uploads/news/<?php echo $item['news_filename']; ?>" width="50">
                <?php else: ?>
                    Brak obrazka
                <?php endif; ?>
            </td>
            <td><?php echo $item['news_title']; ?></td>
            <td><?php echo $item['news_author']; ?></td>
            <td><?php echo $item['news_publish_date']; ?></td>
            <td>
                <a href="actions/news/edit.php?id=<?php echo $item['id']; ?>">Edytuj</a>
                <a href="actions/news/deleteAction.php?id=<?php echo $item['id']; ?>">Usuń</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5">Brak aktualności</td>
        </tr>
    <?php endif; ?>
</table>
