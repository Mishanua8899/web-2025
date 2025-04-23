<?php
function connectDataBase(): PDO
{
    $dsn = "mysql:host=localhost;dbname=blog";
    $user = "root";
    $pass = "";
    return new PDO($dsn, $user, $pass);
};

function savePostToDataBase(PDO $connection, array $params):int
{
    $user_id = $connection->quote($params['user_id']);
    $img_src = $connection->quote($params['img_src']);
    $content = $connection->quote($params['content']);
    $query = <<<SQL
                INSERT INTO
                    post(
                        user_id, 
                        content,
                        img_src
                    )
                VALUES(
                    $user_id,
                    $content,
                    $img_src
                )
                SQL;
    $connection->exec($query);
    return (int)$connection->lastInsertId();
}

function saveUserToDataBase(PDO $connection, array $params):int/*надо сделать пароль*/
{
    $user_name = $connection->quote($params['user_name']);
    $img_src = $connection->quote($params['img_src']);
    $age = $connection->quote($params['age']);
    $email = $connection->quote($params['email']);
    $user_description = $connection->quote($params['user_description']);
    $query = <<<SQL
                INSERT INTO
                    user(
                        user_name, 
                        user_description,
                        img_src, 
                        age,
                        email
                    )
                VALUES(
                    $user_name,
                    $user_description,
                    $img_src,
                    $age,
                    $email
                )
                SQL;
    $connection->exec($query);
    return (int)$connection->lastInsertId();
}

function findPostInDatabase(PDO $connection, int $id):array|bool {
    $query = <<<SQL
                SELECT * 
                FROM
                    post
                WHERE
                    id=$id
                SQL;
    $statement = $connection->query($query);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}
/*использовать функцию findallposts с left joinom*/ 
function findUserInDatabase(PDO $connection, int $id):array|bool {
    $query = <<<SQL
                SELECT * 
                FROM user
                WHERE id=$id
                SQL;
    $statement = $connection->query($query);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}

?>
