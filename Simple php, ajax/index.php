<!doctype html>
<html lang="ru">
<head>

    <?php
    $WebsiteTitle = "Blog";
    require "blocks/head.php"
    ?>
</head>
<body>
 <?php require "blocks/header.php"?>

 <main>
     <?php
        require_once "lib/mysql.php";

        $sql = 'SELECT * FROM articles ORDER BY `date` DESC ';
        $query = $pdo->query($sql);
        while($row = $query-> fetch(PDO::FETCH_OBJ)){
            echo "<div class='post'>
                        <h1> $row->title </h1>
                        <p> $row->anons </p>
                        <p class='avtor'> Автор: <span>$row->avtor</span></p>
                        <a href='/post.php?id=".$row->id ." '>Прочитать</a>
            </div>";
        }
     ?>
 </main>

 <?php require "blocks/aside.php"?>
 <?php require "blocks/footer.php"?>
</body>
</html>