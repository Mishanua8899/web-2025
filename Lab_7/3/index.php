<?php
    $users_json = file_get_contents('users.json');
    $users = json_decode($users_json, true);

    $posts_json = file_get_contents('posts.json');
    $posts = json_decode($posts_json, true);
    
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
       $user_data = [];
       foreach($users as $user) {
          if($user['id'] == 2) {
            $user_data = $user;
            break;
          }
       }
       include './patterns/description.php'
    ?>
    <h2>Посты</h2>
    <?php
       foreach($posts as $post) {
          if($post['user_id'] == $user_data['id']){
            include "./patterns/post.php";
          }   
       } 
    ?>
</body>
</html>