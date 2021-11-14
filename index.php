<?php
session_start();
require_once 'connect/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a href="#" class="logo">
                    <img src="images/Vector.svg" alt="" class="header-img">
                
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
   
    <section class="slider">
        <div class="container">
            <div class="slider__title">Оформите подписку и забудьте про покупку книг
            <button class="podpiska"> Первый месяц бесплатно!</button></div>
            <?php
                
                if(isset($_POST['submit']))
                {
                    $search = explode(" ", $_POST['search']);
                    $count = count($search);
                    $array = array();
                    $i = 0;
                    foreach($search as $key)
                    {
                        $i++;
                        if($i < $count) $array[] = " CONCAT (`title`, `author`) LIKE '%".$key."%' OR "; else $array[] = " CONCAT (`title`, `author`) LIKE '%".$key."%' ";
                    }
                    $sql = " SELECT * FROM `knigi` WHERE ".implode(" ", $array);
                    $query = mysqli_query($connect, $sql);
                    while($row = mysqli_fetch_assoc($query))  echo "<h1>".$row['title']."</h1><p>".$row['author']."</p><br>";
                }
            
                ?>
            <!-- <div class="slick__inner">
                <div class="slick-wrapper">
                    <div class="slick-slide">
                        <div class="slider__box">
                            <a href="about.html" class="slider__box-link">
                                <img src="images/1.jpg" alt="" class="slider__box-img">
                            </a>
                            <div class="slider__box-title">Граф Монте-Кристо</div>
                            <div class="slider__box-autor">Александр Дюма</div>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="slider__box">
                            <a href="about.html" class="slider__box-link">
                                <img src="images/2.jpg" alt="" class="slider__box-img">
                                <div class="slider__box-title">Отцы и дети</div>
                                <div class="slider__box-autor">Иван Тургенев</div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="slider__box">
                            <a href="about.html" class="slider__box-link">
                                <img src="images/3.jpg" alt="" class="slider__box-img">
                                <div class="slider__box-title">Мертвые души</div>
                                <div class="slider__box-autor">Николай Гоголь</div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="slider__box">
                            <a href="about.html" class="slider__box-link">
                                <img src="images/4.jpg" alt="" class="slider__box-img">
                                <div class="slider__box-title">Война и мир</div>
                                <div class="slider__box-autor">Лев Толстой</div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="slider__box">
                            <a href="about.html" class="slider__box-link">
                                <img src="images/5.jpg" alt="" class="slider__box-img">
                                <div class="slider__box-title">Алиса в Стране чудес.</div>
                                <div class="slider__box-autor">Льюис Кэрролл</div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="slider__box">
                            <a href="about.html" class="slider__box-link">
                                <img src="images/6.jpg" alt="" class="slider__box-img">
                                <div class="slider__box-title">Евгений Онегин</div>
                                <div class="slider__box-autor"> Александр Пушкин</div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="slider__box">
                            <a href="about.html" class="slider__box-link">
                                <img src="images/7.jpg" alt="" class="slider__box-img">
                            </a>
                            <div class="slider__box-title">Герой нашего времени</div>
                            <div class="slider__box-autor">Михаил Лермонтов</div>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="slider__box">
                            <a href="about.html" class="slider__box-link">
                                <img src="images/8.jpg" alt="" class="slider__box-img">
                                <div class="slider__box-title">Обломов</div>
                                <div class="slider__box-autor">Иван Гончаров</div>
                            </a>
                        </div>
                    </div>
                </div> 
             </div> -->
        </div>
        </div>
    </section>

    <!-- <script src="js/swiper-bundle.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>