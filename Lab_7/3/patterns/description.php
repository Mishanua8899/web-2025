<h1>Страница профиля</h1>
<div class="user-profile">
    <h2>Информация о пользователе</h2>
    <p>Имя: <?php echo $user_data['name'] ?></p>
    <p>Возраст: <?php echo $user_data['age'] ?></p>
    <p>Имейл: <?php echo $user_data['email'] ?></p>
    <p>Дата создания <?php echo date("F j, Y, g:i a", $user_data["date_of_creation"])?></p>
</div>