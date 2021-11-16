<?php
session_start();
require_once '../connect/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a href="../index.php" class="logo">
                    <img src="../images/Vector.svg"alt="" class="header-img">
                
                </a>          
                  <p class="site-name">knigi.ru</p> 
                <form method="post">
                    <input name="search" type="text" class="header__input" placeholder="Книга или автор">
                    <input  class="header__but" type="submit" name="submit" value="найти"> 
                </form>
                
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__item">Мои книги</li>
                        <li class="menu__item">Уведомление</li>
                        <?php if (isset($_SESSION['user']))
                         { ?>
                       <a class="loginlink" href="connect/logout.php" title=""><li class="menu__item">Logout</li></a>
        <?php } else { ?>
            <a class="loginlink" href="login.php" title=""><li class="menu__item">Login</li>  </a>  

        <?php } ?>
        </a></ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="about">
        <div class="container">
            <div class="about__inner">
                <img src="../images/1.jpg" alt="" class="about__img">
                <div class="about__content">
                    <h1 class="about__title">Граф Монте-Кристо</h1>
                    <div class="about__autor">Александр Дюма</div>
                    <h3 class="about__about">О книге</h3>
                    <p class="about__text">
                    «Граф Монте-Кристо» — классика европейского романа 19 века. Александр Дюма взял за основу сюжета реальную историю из архивов французской полиции и сумел вплести в нее невероятные взлеты и падения, эпизоды подлого предательства и чистой любви, а также моменты отчаяния и искреннего раскаяния. Дюма изобличает алчность и желание власти, зависть и корысть, боязнь потерять лицо и отсутствие справедливости. Нет, он не делает главного героя ангелом, и тем понятнее и ближе становится Эдмонд Дантес читателю. Его судьба напоминает американские горки: в молодости Эдмонда оклеветали и заточили на долгие годы в мрачном и безнадежном месте – замке Иф. Его оторвали от любимой Мерседес и погубили всю его жизнь, все светлые чувства, вырастив в душе пленника лишь страсть возмездия. Но судьбе было угодно оставить Эдмонда в живых, познакомить его с одним умудренным жизнью стариком и сделать обладателем несметных сокровищ. «Граф Монте-Кристо» захлестывает читателя с головой, оставляя множество противоречивых эмоций и поводов к размышлению.
                    </p>
                    <h5 class="about__info">Подробная информация</h5>
                    <p class="about__description">Дата написания: <span> 1 января 1845</span> </p>
                    <p class="about__description"> Год издания: <span> 2009</span></p>
                </div>
            </div>
        </div>
    </section>
        </body>
        </html>