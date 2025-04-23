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
    /*$users_json = file_get_contents('../users.json');
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
        
    }*/
    ?>
    <div class="container">
        <div class="container__image-block">
            <div class="image-block">
                <img src="src/human1.jpg" alt="" width="462" height="501" class="image-block__img">
                <h1 class="image-block__text">Войти</h1>
            </div>
        </div>
        <form action="#" class="container__form form">
            <div class="form__input-group">
                <div class="input-group">
                    <div class="input-group__email-block">
                        <label for="email" class="input-group__label">Элекропочта</label>
                        <div class="email-block">
                            <input type="email" id="email" class="email-block__input">
                            <p class="email-block__warning">Введите элекропочту в формате *****@***.**</p>
                        </div>
                    </div>
                    <div class="input-group__password-block">
                        <label for="password" class="input-group__label">Пароль</label>
                        <div class="password-block">
                            <input type="password" id="password" class="password-block__input">
                            <img src="src/Eye-off.png" alt="" class="password-block__icon">
                        </div>
                    </div>
                </div>
            </div>

            <button class="button form__button">Продолжить</button>
        </form>

    </div>
</body>

</html>