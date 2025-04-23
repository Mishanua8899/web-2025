<?php
$users_json = file_get_contents('users.json');
$users = json_decode($users_json, true);
$posts_json = file_get_contents('posts.json');
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
    header('Location: home.php');
}
if (!$is_set_id) {
    header('Location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($is_set_id) {
        include './patterns/description.php';
        echo "<h2>Посты</h2>";
        foreach ($posts as $post) {
            if ($post['user_id'] == $user_data['id']) {
                include "./patterns/post.php";
            }
        }
    }

    ?>
</body>

</html>