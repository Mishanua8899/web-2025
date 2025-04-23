<div class="post">
    <div class="post-main">
        <img src=<?php echo $post['img_src'] ?> alt="img" width="474">
        <button class="reaction">
            <span>❤</span>
            <span>203</span>
        </button>
        <p class="description"><?php echo $post['content'] ?></p>
        <button>ещё</button>
        <p><?php echo date("F j, Y, g:i a", $post['date_of_creation']) ?></p>
    </div>
</div>