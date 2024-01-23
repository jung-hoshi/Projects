<!doctype html>
<html lang="ru">
<head>
    <?php
    $WebsiteTitle = "Контакты";
    require "blocks/head.php"
    ?>
</head>
<body>
<?php require "blocks/header.php"?>

<main>
    <h1>Контакты</h1>
    <form>
        <label for="name"> Ваше имя </label>
        <input type="text" name="name" id="name">

        <label for="email"> Почта </label>
        <input type="email" name="email" id="email">

        <label for="mess"> Сообщение </label>
        <textarea name="mess" id="mess"></textarea>

        <div class="error-message" id="error-block"></div>

        <button type="button" id="mess_send"> Отправить </button>
    </form>
</main>

<?php require "blocks/aside.php"?>
<?php require "blocks/footer.php"?>
<script>
    $('#mess_send').click(function(){
        let name = $('#name').val();
        let email = $('#email').val();
        let mess = $('#mess').val();

        $.ajax({
            url: 'ajax/mail.php',
            type: 'POST',
            cache: false,
            data: {
                'name': name,
                'email': email,
                'mess': mess
            },
            dataType: 'HTML',
            success: function (data){
                if(data === "Done") {
                    $("#mess_send").text('Готово!');
                    $('#error-block').hide();
                    $('#name').val("");
                    $('#email').val("");
                    $('#mess').val("");
                } else {
                    $('#error-block').show();
                    $('#error-block').text(data);
                }
            }
        });
    });
</script>
</body>
</html>
