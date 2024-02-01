<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
        <?php foreach ($blogs as $blog) :?>
        <div class="card">
            <h2><a href="blogs/<?=$blog->slug;?>"><?=$blog->title;?></a></h2>
            <p>Published at - <?= $blog->date?></p>
            <p><?=$blog->intro;?></p>
        </div>
        <?php endforeach; ?>
</body>
</html>
