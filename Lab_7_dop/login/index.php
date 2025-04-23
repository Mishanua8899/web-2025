<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Autorization</title>
</head>

<body>
    <?php
    $users_json = file_get_contents('../users.json');
    $users = json_decode($users_json, true);
    $posts_json = file_get_contents('../posts.json');
    $posts = json_decode($posts_json, true);
    foreach($users as $user) {
        foreach($user as $key => $value) {
            echo "{$key} = {$value} <br>";
        }
        
    }
    foreach($posts as $post) {
        foreach($post as $key => $value) {
            echo "{$key} = {$value} <br>";
        }
        
    }
    ?>
    <div class="container">
        <div class="image-block">
            <img src="src/human1.jpg" alt="" width="462" height="501">
            <div class="enter">
                <h1>Войти</h1>
            </div>
        </div>
        <form action="#" class="form-block">
            <label for="email">Элекропочта</label>
            <div class="email-block">
                <input type="email" id="email">
                <p>Введите элекропочту в формате *****@***.**</p>
            </div>
            <label for="password">Пароль</label>
            <div class="password-block">
                <input type="password" id="password">
                <img src="src/Eye-off.png" alt="jjjjj"
                    style="position: absolute; top: 24%; left: 90%;">
            </div>
            <button>Продолжить</button>
        </form>

    </div>
</body>

</html>