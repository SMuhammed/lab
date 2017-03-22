<?php
require_once ("MySiteDB.php");
//Использование цикла while
while ($note ==mysqli_fetch_array($select_note)){
    echo $note ['id'], "<br>";
    ?>
    <a href="comments.php?note=<?php echo $note['id']; ?>">
<?php
    echo $note ['title'], "<br>";
    echo $note ['created'],"<br>";
    echo $note ['content'],"<br>";

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html: charset=utf-8" />
    <meta name="keyword" content="referat, отчет, самоучител, книга,продажа рефератов"/>
    <meta name="description" content="Здесь вы можете найти все рефераты"/>
    <link href="css/for_labs.css" rel="stylesheet" type="text/css" />
    <link href="image/1.ico" rel="shortcut icon" type="image/x-icon"/>
    <title>Блоги</title>
</head>
<body >
<div id="page-wrap">
    <header>
        <a href="index.php" title="На главную" id="logo">Referat.kg</a>
        </span>
    </header>
    <div class="clear"><br/></div>
    <center>
        <div id="menu">Разделы<hr/></div>
        <div id="menuHrefs">
            <a href="labs/blog.php">Войти</a>
            <a href="labs/blogs.php">Новая запись</a>
            <a href="labs/blogs.php">Отправить сообщение</a>
            <a href="labs/blogs.php">Фото</a>
            <a href="labs/blogs.php">Файлы</a>
            <a href="labs/blogs.php">Админстратору</a>
            <a href="labs/blogs.php">Информация</a>
            <a href="labs/blogs.php">Выйти</a>
        </div>
        <div id="wrapper">
            <div id="articles">
                <article>
                </article>
                <article>
                </article>
                <article>
                </article>
            </div>
        </div>
    </center>
</div>
<footer>
    <span class="left">Все правы защищены &copy 2016</span>
    <span class="right">Социальные кнопки <img src="image/vk.png"  alt="группа в VK.COM" title="В контакте.ком"/></span>
</footer>
</body>
</html>

