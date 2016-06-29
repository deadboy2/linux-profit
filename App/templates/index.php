<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
        div.block {
            width: 100%;
            min-height: 10px;
            border: 1px gray solid;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>

<?php foreach($articles as $article): ?>
<div class="block">
    Заголовок новости: <?= $article->title ?><br>
    Содержимое новости: <?= $article->text ?><br>
    <?php if(!empty($article->author)): ?>
        Автор новости
        Имя: <?= $article->author->name ?><br>
        Фамилия: <?= $article->author->surname ?><br>
    <?php endif; ?>
</div>
<?php endforeach; ?>

</body>
</html>