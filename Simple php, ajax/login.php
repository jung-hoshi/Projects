<!doctype html>
<html lang="ru">
<head>
    <?php
    $WebsiteTitle = "Авторизация";
    require "blocks/head.php"
    ?>
</head>
<body>
<?php require "blocks/header.php"?>;

<main>
    <?php if (!isset($_COOKIE['login'])): ?>
        <h1>Авторизация</h1>
        <form>
            <label for="login"> Логин </label>
            <input type="text" name="login" id="login">

            <label for="password"> Пароль </label>
            <input type="password" name="password" id="password">

            <div class="error-message" id="error-block"></div>

            <button type="button" id="login_user"> Войти</button>
        </form>
    <?php else: ?>
        <h2><?= $_COOKIE['login'] ?></h2>
        <form>
            <button type="button" id="exit_user"> Выйти </button>
        </form>
    <?php endif; ?>
</main>

<?php require "blocks/aside.php"?>;
<?php require "blocks/footer.php"?>;
<script>
    $('#login_user').click(function(){
        let login = $('#login').val();
        let password = $('#password').val();

        $.ajax({
            url: 'ajax/log.php',
            type: 'POST',
            cache: false,
            data: {
                'login': login,
                'password': password
            },
            dataType: 'HTML',
            success: function (data){
                if(data === "Done") {
                    $("#login_user").text('Готово!');
                    $('#error-block').hide();
                    document.location.reload(true);
                } else {
                    $('#error-block').show();
                    $('#error-block').text(data);
                }

            }

        });
    });
    $('#exit_user').click(function(){

        $.ajax({
            url: 'ajax/exit.php',
            type: 'POST',
            cache: false,
            data: {},
            dataType: 'HTML',
            success: function (data){
                 document.location.reload(true);

            }

        });
    });

</script>
</body>
</html>