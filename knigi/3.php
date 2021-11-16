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
                <img src="../images/3.jpg" alt="" class="about__img">
                <div class="about__content">
                    <h1 class="about__title">Мертвые души</h1>
                    <div class="about__autor">Николай Гоголь</div>
                    <h3 class="about__about">О книге</h3>
                    <p class="about__text">
                    «Мертвые души» — гениальное произведение Николая Васильевича Гоголя, учебник жизни и ключ к пониманию характеров и типажей нашего общества. Сам автор определил жанр произведения как поэму. До наших дней дошел только первый том, вторая же часть произведения была уничтожена самим автором. Сюжет книги основан на реальной истории, которую Гоголю подсказал Александр Сергеевич Пушкин. Главный герой книги — бывший коллежский советник Чичиков, выдает себя за помещика. Однажды он появляется в уездном городе N, чтобы осуществить на первый взгляд безумный проект: герой хочет купить у местных помещиков мертвых крестьян, которые теперь числятся только на бумаге. Чтобы исполнить этот план, он встречается с самыми разными персонажами, которые олицетворяют различные качества и пороки общества — удивительно, но спустя полтора века они сохраняют свою актуальность.                    </p>
                    <h5 class="about__info">Подробная информация</h5>
                    <p class="about__description">Дата написания: <span>1842</span> </p>
                    <p class="about__description"> Год издания: <span> 2005</span></p>
                </div>
            </div>
        </div>
    </section>
        </body>
        </html>