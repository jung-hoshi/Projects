<header>
    <span class="logo"> My Personal Blog  </span>
    <nav>
        <a href="/">Главная</a>
        <a href="/contact.php"> Контакты </a>
        <?php if (isset($_COOKIE['login'])): ?>
            <a href="/add-article.php" >Добавить статью</a>
            <a href="/login.php" class="btn">Кабинет пользователя</a>
        <?php else: ?>
            <a href="/login.php" class="btn">Войти</a>
            <a href="/reg.php" class="btn">Зарегистрироватся</a>
        <?php endif; ?>
    </nav>
 </header>