<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контакты</title>
    <meta name="description" content="contact">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>

    <div class="container main">
        <h1>Contact us</h1>
        <p>Still have a questions? </p>
        <form action="/contact" method="post" class="form-control">
            <input type="text" name="name" placeholder="Specify your name" value="<?=$_POST['name']?>"><br>
            <input type="email" name="email" placeholder="Specify your email" value="<?=$_POST['email']?>"><br>
            <input type="text" name="age" placeholder="Specify your age" value="<?=$_POST['age']?>"><br>
            <textarea name="message" placeholder="Specify your message"><?=$_POST['message']?></textarea>
            <div class="error"><?=$data['message']?></div>
            <button class="btn" id="send">Send</button>
        </form>
    </div>

    <?php require 'public/blocks/footer.php' ?>
</body>
</html>