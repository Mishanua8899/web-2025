<?php

use function PHPSTORM_META\type;

include_once 'database.php';
function SaveDataToDatabaseFromPostRequest()
{
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method === 'POST') {
        $data = json_decode($_POST['json'], true);
        if (!isset($data['title']) || !isset($data['content']) || !isset($data['user_id'])) {
            return throw new Error('Некоторые параметры не найдены');
        }

        if (gettype($data['title']) != "string" || gettype($data['content']) != "string" || gettype($data['user_id']) != "integer") {
            return throw new Error('Данные переданы некорректно');
        }

        if (strlen($data['title']) > 200 || strlen($data['content']) > 5000) {
            return throw new Error('Длина описания поста или заголовка превышает допустимую');
        }


        if (isset($_FILES['image'])) {
            if (!file_exists('../home/images/')) {
                mkdir('./home/images/');
            }
            $nameFile = trim(mb_strtolower($_FILES['image']['name']));
            $tmp_name = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmp_name, __DIR__."/home/images/{$nameFile}");
        } else {
            return throw new Error('Где картинка?');
        }

        $connection = connectDataBase();
        savePostToDataBase($connection, [
            'user_id' => $data['user_id'],
            'content' => $data['content'],
            'img_src' => "images/{$nameFile}"
        ]);
        return $connection->lastInsertId();
    }
}
?>
