<?php
$users_json = file_get_contents('../users.json');
$users = json_decode($users_json, true);
$posts_json = file_get_contents('../posts.json');
$posts = json_decode($posts_json, true);
$is_set_id = false;
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    foreach ($users as $user) {
        $is_set_id = ($user['id'] == $id) ? true : false;
        if ($is_set_id) {
            $user_data = $user;
            break;
        };
    }
} else {
    header('Location: ../home/index.php');
    exit;
}
if (!$is_set_id) {
    header('Location: ../home/index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php
    /*foreach ($users as $user) {
        foreach ($user as $key => $value) {
            echo "{$key} = {$value} <br>";
        }
    }
    foreach ($posts as $post) {
        foreach ($post as $key => $value) {
            echo "{$key} = {$value} <br>";
        }
    }*/
    ?>
    <div class="container">
        <div class="container__icon-menu icon-menu">
            <img src="src/Home.png" alt="Home" class="icon-menu__icon home"><!--alt заполнить-->
            <div class="icon-menu__wrapper">
                <img src="src/User.png" alt="User" class="icon-menu__icon user">
            </div>
            <!--alt заполнить-->
            <img src="src/Plus.png" alt="Plus" class="icon-menu__icon plus"><!--alt заполнить-->
        </div>
        <div class="container__content content">
            <?php
            /*$user_data = [];
            foreach ($users as $user) {
                if ($user['id'] == 2) {
                    $user_data = $user;
                    break;
                }
            }*/
            include "patterns/profile.php"
            ?>

            <div class="content__posts">
                <?php
                foreach ($posts as $post) {
                    if ($post['user_id'] == $user_data['id']) {
                        include "patterns/post.php";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>