<?php
include '../database.php';
$connection = connectDataBase();
$users = [];
$posts = [];
for ($id = 1; $id < 100; $id++) {
    if (!findPostInDatabase($connection, $id)) {
        continue;
    }
    array_push($posts, findPostInDatabase($connection, $id));
}

for ($id = 1; $id < 100; $id++) {
    if (!findUserInDatabase($connection, $id)) {
        continue;
    }
    array_push($users, findUserInDatabase($connection, $id));
}

?>

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
    <div class="container">
        <div class="container__icon-menu icon-menu">
            <div class="icon-menu__wrapper">
                <img src="src/Home.png" alt="Home" class="icon-menu__home home">
            </div>
            <img src="src/User.png" alt="User" class="icon-menu__user user">
            <img src="src/Plus.png" alt="Plus" class="icon-menu__plus plus">
        </div>
        <div class="container__posts posts">
            <?php
            foreach ($posts as $post) {
                include 'patterns/post.php';
            }
            ?>
        </div>
</body>

</html>