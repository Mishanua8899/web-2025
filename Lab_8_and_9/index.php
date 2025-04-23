<?php
  include_once 'api.php';
  include_once 'database.php';
  $connection = connectDataBase();
  /*savePostToDataBase($connection, [
    'user_id' => 2,
    'content' => "Как у вас дела?",
    'img_src' => "src/post_image_2"
   ]) */
  /* saveUserToDataBase($connection, [
    'user_name' => "Лиза Демина",
    'user_description' => "bez nadejdi",
    'img_src' => "src/user_icon_2",
    'age' => "22",
    'email' => 'Liza@gmail.com'
   ]);*/
  $result = findPostInDatabase($connection, 3);
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
      foreach ($result as $key => $value) {
        echo "{$key} = {$value} <br>";
      }
      SaveDataToDatabaseFromPostRequest();
    ?>
</body>

</html>