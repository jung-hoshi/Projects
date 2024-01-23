<?php
    if(!isset($_COOKIE['login'])){
        header('location: /reg.php');
        exit();
    }
?>

<!doctype html>
<html lang="ru">
<head>
    <?php
    $WebsiteTitle = "Добавить заметку";
    require "blocks/head.php"
    ?>
</head>
<body>
<?php require "blocks/header.php"?>

<main>
    <h1>Добавить заметку</h1>
    <form>
        <label for="title"> Название </label>
        <input type="text" name="title" id="title">

        <label for="anons"> Анонс </label>
        <textarea name="anons" id="anons"></textarea>

        <label for="full_text"> Текст </label>
        <textarea name="full_text" id="full_text"></textarea>


        <div class="error-message" id="error-block"></div>

        <button type="button" id="add-article"> Добавить </button>
    </form>
</main>

<?php require "blocks/aside.php"?>
<?php require "blocks/footer.php"?>
<script>
    $('#add-article').click(function(){
        let title = $('#title').val();
        let anons = $('#anons').val();
        let full_text = $('#full_text').val();


        $.ajax({
            url: 'ajax/add_article.php',
            type: 'POST',
            cache: false,
            data: {
                'title': title,
                'anons': anons,
                'full_text': full_text
            },
            dataType: 'HTML',
            success: function (data){
                if(data === "Done") {
                    $("#add-article").text('Готово!');
                    $('#error-block').hide();
                    $('#title').val("");
                    $('#anons').val("");
                    $('#full_text').val("");
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