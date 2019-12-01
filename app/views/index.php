
<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Blog</h1>

        <?php foreach ($articles as $article) : ?>
        <div class="article">
            <h2><?= $article->title ?></h2>
            <h4><?= (new Carbon($article->created_at))->diffForHumans() ?></h4>
            <p><?= $article->content ?></p>
        </div>
        <?php endforeach ?>

    </div>
</body>
</html>
