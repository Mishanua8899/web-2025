<?php
$user_data = [];
foreach($users as $user) {
    if($user['id'] == $post['user_id']) {
        $user_data = $user;
        break; 
    }
}
?>

<div class="post">
    <div class="post__header">
        <div class="post__author author">
            <img src=<?= $user['img_src'] ?> alt="" width="32" height="32" class="author__icon">
            <span class="author__name"><?= $user['user_name'] ?></span>
        </div>
        <button class="post__edit-button"><img src="src/Edit.png" alt=""></button>
    </div>
    <div class="post__main">
        <img src=<?= $post['img_src'] ?> alt="img" width="474" height="474" class="post__img">
        <button class="post__reaction">
            <span class="post__like">❤</span>
            <span class="post__like">203</span>
        </button>
        <p class="post__description"><?= $post['content'] ?></p>
        <button class="post__more-button">ещё</button>
        <p class="post__date"><?= date("F j, Y, g:i a", strtotime($post['date_of_creation'])) ?></p>
    </div>
</div>