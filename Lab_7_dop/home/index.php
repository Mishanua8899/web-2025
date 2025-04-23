<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>

<body>
    <?php
    $users_json = file_get_contents('../users.json');
    $users = json_decode($users_json, true);
    $posts_json = file_get_contents('../posts.json');
    $posts = json_decode($posts_json, true);
    foreach ($users as $user) {
        foreach ($user as $key => $value) {
            echo "{$key} = {$value} <br>";
        }
    }
    foreach ($posts as $post) {
        foreach ($post as $key => $value) {
            echo "{$key} = {$value} <br>";
        }
    }
    ?>
    <div class="container">
        <div class="icon-menu">
            <img src="src/Home.png" alt="">
            <img src="src/User.png" alt="">
            <img src="src/Plus.png" alt="">
        </div>
        <div class="posts">
            <div class="post">
                <div class="post-header">
                    <div class="post-author">
                        <img src="src/user_icon.jpg" alt="" width="32" height="32">
                        <span>Ваня Денисов</span>
                    </div>
                    <button><img src="src/Edit.png" alt=""></button>
                </div>
                <div class="post-main">
                    <img src="src/for_post.jpg" alt="" width="474">
                    <button class="reaction">
                        <span>❤</span>
                        <span>203</span>
                    </button>
                    <p class="description">Так красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский:
                        «Поздно ночью, в уснувшей долине, на самом дне, в городке, занесенном снегом по ручку двери...»
                    </p>
                    <button>ещё</button>
                    <p>2 часа назад</p>
                </div>


                <div class="post">
                    <div class="post-header">
                        <div class="post-author">
                            <img src="src/user_icon_2.jpg" alt="" width="32" height="32">
                            <span>Лиза Демина</span>
                        </div>
                        <button><img src="src/Edit.png" alt=""></button>
                    </div>
                    <div class="post-main">
                        <img src="src/for_post_2.jpg" alt="" width="474">
                        <button class="reaction">
                            <span>❤</span>
                            <span>534</span>
                        </button>
                        <p>1 день назад</p>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>