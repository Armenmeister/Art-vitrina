<!DOCTYPE html>
<html lang="rus">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <!-- or -->
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
        
        
        
        
        
        
        
        <!-- Тексовый редактор -->
        <script src="visred/libs/jquery/jquery-1.11.2.min.js"> </script>
        <script type="text/javascript" src="visred/libs/ckeditor/ckeditor.js"> </script>
        
        
        
        
        
        
        
        
        
        <link rel="stylesheet" href="assets/css/AccountLightVersion.css">
        <title>Арт-витрина</title>
    </head>
    <body>
        <div class="fon">


            <div class="header">
               
                <div class="container-fluid ">

                    <div class="row">

                        <div class=" col-sm-12 col-md-12 col-lg-2 col-xl-2" id="log"><a href="http://art-vitrina/"><p>Арт-витрина</p></a>
                        </div>

                        <div id="links" class="col-sm-12 col-lg-7 col-md-12 col-xl-7 text-center ">
                           <ul class="menu">
                               <li><a href="index.php">Иллюстрации</a></li>
                               <li><a href="novosti.php">Новости</a></li>
                               <li><a href="#">Авторы</a></li>
                               <li><a href="#">Витрина</a></li>
                            
                            </ul>
                        </div>
                       





                        <?php
                        if($_COOKIE['user'] == ''):

                        ?>

                        <!--Форма авторизации  -->
                        <div id="btn" class="col-sm-2"><button class="btn-info1" data-toggle="modal" data-target="#myModal"><i class="fas fa-door-open"></i>Войти</button>

                            <div id="myModal" class="modal fade" tabindex="-1">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Авторизация</h4>
                                            <button class="close" data-dismiss="modal">x</button>

                                        </div>
                                        <div class="modal-body">
                                            <form  action="validation/auth.php" method="post">
                                                <div class="form-group">
                                                    <label for="login">Логин</label>
                                                    <input type="login" class="form-control" id="login" name="login"  placeholder="Введите ваш логин">
                                                    <label for="pass">Пароль</label>
                                                    <input type="password" class="form-control" id="password" name="pass" placeholder="Введите пароль">

                                                    <button class="btn btn-success" type="submit"> Войти</button>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-dismiss="modal">Закрыть</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Форма регистрации -->
                        <div id="btn2" class="col-sm-2"><button  class="btn-info" data-toggle="modal" data-target="#registr"><i class="fas fa-sign-in-alt"></i> Регистрация</button>
                            <div id="registr" class="modal fade" tabindex="-1">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Регистрация</h4>
                                            <button class="close" data-dismiss="modal">x</button>

                                        </div>
                                        <div class="modal-body">
                                            <form action="validation/check.php" method="post">

                                                <label for="login">Логин</label>
                                                <input type="login" class="form-control" id="login" name="login"  placeholder="Введите ваш логин">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"  placeholder="Введите ваш email">
                                                <label for="name">Введите ваше имя</label>
                                                <input type="name" class="form-control" id="password" name="name" placeholder="Ваше имя">
                                                <label for="pass">Пароль</label>
                                                <input type="password" class="form-control" id="password" name="pass" placeholder="Введите пароль">
                                                <p>от 6 до 8 символов</p>
                                                <?php     
                                                if ($_SESSION['message'])
                                                {
                                                    echo '<p class="msg"> ' . $_SESSION['message']. '</p>';
                                                }
                                                unset($_SESSION['message']);
                                                session_destroy();
                                                ?>                            


                                                <button class="btn btn-success" type="submit" name="reg"> Регистрация</button>


                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-dismiss="modal">Закрыть</button>



                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php else: ?>
                        
                        
                        
                        <div class="cabinet col-sm-12  col-md-12 col-lg-3 col-xl-3 text-center ">
                            <div class="akk btn-group btn-group-sm ">
                                <button class="akk2 btn ">
                                    <a href="Lk.php"> <p><?=$_COOKIE['user']?></p></a>

                                </button>
                                <button class="akk3 btn dropdown-toggle" data-toggle="dropdown">
                                </button>

                                <ul class="dropdown-menu dropdown-menu-right ">
                                    <li><a href="#">Моя галерея</a></li>
                                    <li><a href="#">Мои записи</a></li>
                                    <li><a href="#">Натройки</a></li>
                                    <li><a href="validation/exit.php">Выход</a></li>
                                </ul>

                            </div>


                        </div>
                        <?php endif; ?>
                        
                        <!--search form-->
                        <div class="col-11 search-box">
                            <input type="text" class="search-txt" placeholder="Поиск...">
                            <a href="#" class="search-btn"><i class="fas fa-search" aria-hidden="true"></i></a>

                        </div>
                    </div>

                </div>
            </div>
            <div class="container-fluid">

                <div class="row col-12">
                <div class="port col-12 ">
                    <div class="zagolovok col-sm-12  col-md-12 col-lg-12 col-xl-12 ">
                        <div class="foto col-12">
                            <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                         <h3><?=$_COOKIE['user']?></h3>
                        </div>
                        <div class="col-12"><br></div>
                        <!-- Nav pills -->
                        
                        <div class="row justify-content-center">
                            
                        <ul class="nav nav-tabs text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Галерея</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#zapisi" role="tab">Записи</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#vitrina" role="tab">Витрина</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#information" role="tab">Информация</a>
                            </li>
                        </ul>
                        </div>
                        <!-- Вкладка панели -->  
                        <div class="tab-content">
                            <!-- Галерея начало --> 
                            <div class="tab-pane active text-center" id="home" role="tabpanel">
                                <button class="addfoto" data-toggle="modal" data-target="#addimg">Добавить +</button>
                                
                                <!-- HTML-код модального окна добавления фотографии -->
                                <div id="addimg" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Заголовок модального окна -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Добавить изображение</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="float:right;">×</button>
                                                
                                            </div>
                                            <!-- Основное содержимое модального окна -->
                                            <div class="modal-body">
                                                ты говорил что там знаешь как фотографии загружать,так что я думаю ты тут сам разместишь.
                                                я думаю тут должно быть что-то 1.добавить фотографию
                                                2. добавить описание
                                                3.Добавить категорию(не знаю будем прикручивать или нет)
                                                
                                                <div id="kateg" class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Кнопка выпадающего списка
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- Футер модального окна -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                                <button type="button" class="btn btn-primary">Добавить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- КОНЕЦ HTML-код модального окна добавления фотографии -->
                                
                                
                                
                                
                                
                                <div class="container-fluid okno">

                                    <div class="row">
                                        <!--image begin -->
                                       <div class="fotogroup col-2">
                                        <!-- сама фотография в профиле --> 
                             
                                        <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/gal.PNG" >
                                        
                                        <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                        <div id="mymodl" class="modal fade" tabindex="-1">
                                            <div class="container">
                                                <div class="row justify-content-center ">
                                                    <div class="modcontent ">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="row">
                                                        <div class="modal-body">
                                                        <div class="col-3 avtor">
                                                            <!-- аватарка внутри модального окна --> 
                                                            <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                            <a><h3><?=$_COOKIE['user']?></h3></a>


                                                            <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                            <div class="score">
                                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                <i class="fa fa-comments" aria-hidden="true"></i>


                                                            </div>
                                                        </div>
                                                            <!-- начало слайдера --> 
                                                            <div class="fotoview col-9">
                                                            
                                                                <img class="d-block" src="images/q%20(1).jpg" >
                                                           
                                                            </div>
                                                        </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        <!-- конец слайдера --> 

                                       <div class="comments col-12">
                                <form >
                                     <div class="vvod col-5">
                                      <div id="com-name" class="form-group">
                                      <label for="comment-name">Имя:</label>
                                      <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                    </div>

                                <div id="com-body" class="form-group">
                                   <label for="comment-body">Комментарий:</label>
                                    <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                       </div>
                                          
                                           </div>
                                      <div class="form-group">
                                   <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                   </div>
                                                                
                                                               
                                                    
                                                            </form>

                                                        </div>





                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="js/js.js"></script>






                                    </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-2">
                                            <!-- сама фотография в профиле --> 

                                            <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/3.png" >

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        
                                        <!--image begin -->
                                        <div class="fotogroup col-2">
                                            <!-- сама фотография в профиле --> 

                                            <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/3.png" >

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-2">
                                            <!-- сама фотография в профиле --> 

                                            <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/3.png" >

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-2">
                                            <!-- сама фотография в профиле --> 

                                            <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/3.png" >

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-2">
                                            <!-- сама фотография в профиле --> 

                                            <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/3.png" >

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-2">
                                            <!-- сама фотография в профиле --> 

                                            <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/3.png" >

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-2">
                                            <!-- сама фотография в профиле --> 

                                            <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/3.png" >

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-2">
                                            <!-- сама фотография в профиле --> 

                                            <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/3.png" >

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-2">
                                            <!-- сама фотография в профиле --> 

                                            <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/3.png" >

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                            
                            <!-- Галерея конец --> 
                            <div class="tab-pane" id="zapisi" role="tabpanel">
                              <div class="container-fluid">
                               <div class="row justify-content-center">
                                <button class="addzapis" data-toggle="modal" data-target="#addzap" >Добавить +</button>

                                <!-- HTML-код модального окна добавления фотографии -->
                           
                                <div id="addzap" class="modal fade">
                                    <div class="modal-dialog">
                                        <div id="nastr" class="modal-content">
                                            <!-- Заголовок модального окна -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Добавить изображение</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="float:right;">×</button>

                                            </div>
                                            <!-- Основное содержимое модального окна -->
                                            <div class="modal-body">
                                              
                                                
                                                <form id="form1" name="form1" method="post" action="">
                                                    <textarea name="editor1" id="editor1" cols="45" rows="20"></textarea>
                                                    <script type="text/javascript">
                                                        CKEDITOR.replace( 'editor1');
                                                    </script> 
                                                </form>
                                                
                                                
                                                
                                                

                                                <div id="kateg" class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Кнопка выпадающего списка
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Футер модального окна -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                                <button type="button" class="btn btn-primary">Добавить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   <!-- Записи/новости -->
                                 
                            </div>
                                  <div class="container-fluid">
                                  <div class="row justify-content-center ">
                                      <div class="zapisbox col-4">
                                          <div class="zagolovok "><h3>Новая новость,а это ее заголовок</h3></div>
                                          <img  class="imgzapisi"src="images/tel.png" alt="">
                                          <div class="desczapisi"><p>Текст — это упорядоченный набор предложений, предназначенный для того, чтобы выразить некий смысл. В лингвистике термин используется в широком значении, включая в себя и устную речь. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.</p></div>


                                      </div>
                                      <div class="zapisbox col-4 ">
                                          <div class="zagolovok"><h3>Новая новость,а это ее заголовок а также текст вот который используется для теста переносов</h3></div>
                                          <img  class="imgzapisi"src="images/gal.PNG" alt="">
                                          <div class="desczapisi"><p>Текст — это упорядоченный набор предложений, предназначенный для того, чтобы выразить некий смысл. В лингвистике термин используется в широком значении, включая в себя и устную речь. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.>Текст — это упорядоченный набор предложений, предназначенный для того, чтобы выразить некий смысл. В лингвистике термин используется в широком значении, включая в себя и устную речь. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.</p></div>


                                      </div>
                                      <div class="zapisbox col-4">
                                          <div class="zagolovok "><h3>Новая новость,а это ее заголовок</h3></div>
                                          <img  class="imgzapisi"src="images/zmg.png" alt="">
                                          <div class="desczapisi"><p>Текст — это упорядоченный набор предложений, предназначенный для того, чтобы выразить некий смысл. В лингвистике термин используется в широком значении, включая в себя и устную речь. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.>Текст — это упорядоченный набор предложений, предназначенный для того, чтобы выразить некий смысл. В лингвистике термин используется в широком значении, включая в себя и устную речь. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.>Текст — это упорядоченный набор предложений, предназначенный для того, чтобы выразить некий смысл. В лингвистике термин используется в широком значении, включая в себя и устную речь. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.</p></div>


                                      </div>
                                  </div>
                                      <div class="row justify-content-center ">
                                          <div class="zapisbox col-4">
                                              <div class="zagolovok "><h3>Новая новость,а это ее заголовок</h3></div>
                                              <img  class="imgzapisi"src="images/tel.png" alt="">
                                              <div class="desczapisi"><p>Текст — это упорядоченный набор предложений, предназначенный для того, чтобы выразить некий смысл. В лингвистике термин используется в широком значении, включая в себя и устную речь. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.</p></div>


                                          </div>
                                          <div class="zapisbox col-4 ">
                                              <div class="zagolovok"><h3>Новая новость,а это ее заголовок а также текст вот который используется для теста переносов</h3></div>
                                              <img  class="imgzapisi"src="images/gal.PNG" alt="">
                                              <div class="desczapisi"><p>Текст — это упорядоченный набор предложений, предназначенный для того, чтобы выразить некий смысл. В лингвистике термин используется в широком значении, включая в себя и устную речь. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.>Текст — это упорядоченный набор предложений, предназначенный для того, чтобы выразить некий смысл. В лингвистике термин используется в широком значении, включая в себя и устную речь. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.</p></div>


                                          </div>
                                          <div class="zapisbox col-4">
                                              <div class="zagolovok "><h3>Новая новость,а это ее заголовок</h3></div>
                                              <img  class="imgzapisi"src="images/zmg.png" alt="">
                                              <div class="desczapisi"><p>Текст — это упорядоченный набор предложений, предназначенный для того, чтобы выразить некий смысл. В лингвистике термин используется в широком значении, включая в себя и устную речь. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.>Текст — это упорядоченный набор предложений, предназначенный для того, чтобы выразить некий смысл. В лингвистике термин используется в широком значении, включая в себя и устную речь. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.>Текст — это упорядоченный набор предложений, предназначенный для того, чтобы выразить некий смысл. В лингвистике термин используется в широком значении, включая в себя и устную речь. Восприятие текста изучается в рамках лингвистики текста и психолингвистики.</p></div>


                                          </div>
                                      </div>
                                  </div>
                            </div>
                            </div>
                            <div class="tab-pane text-center" id="vitrina" role="tabpanel">
                                
                                <button class="addvitrina" data-toggle="modal" data-target="#addvitr">Добавить +</button>

                                <!-- HTML-код модального окна добавления фотографии -->
                                <div id="addvitr" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Заголовок модального окна -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Добавить изображение</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="float:right;">×</button>

                                            </div>
                                            <!-- Основное содержимое модального окна -->
                                            <div class="modal-body">
                                                Так,это короче самые обычные фотографии только на них будет вспывать плашка со стоимостью и типо они платные.

                                               

                                            </div>
                                            <!-- Футер модального окна -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                                <button type="button" class="btn btn-primary">Добавить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- КОНЕЦ HTML-код модального окна добавления фотографии -->





                                <div class="container-fluid okno">

                                    <div class="row">
                                        <!--image begin -->
                                        <div class="fotogroup col-3">
                                            <!-- сама фотография в профиле --> 
                                            <div class="thumbs">
                                                <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/q%20(1).jpg" >
                                                <div class="caption">
                                                    <span class="title">Цирилла</span>
                                                    <span class="info">Стоимость:5000 тыс.</span>
                                                </div>
                                            </div>
                                            

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-3">
                                            <!-- сама фотография в профиле --> 
                                            <div class="thumbs">
                                                <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/q%20(2).jpg" >
                                                <div class="caption">
                                                    <span class="title">торговец крокодилами</span>
                                                    <span class="info">Стоимость:5000 тыс.</span>
                                                </div>
                                            </div>
                                            

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-3">
                                            <!-- сама фотография в профиле --> 
                                            <div class="thumbs">
                                                <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/q%20(3).jpg" >

                                                <div class="caption">
                                                    <span class="title">Краснолюд</span>
                                                    <span class="info">Стоимость:5000 тыс.</span>
                                                </div>
                                            </div>
                                          
                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-3">
                                            <!-- сама фотография в профиле --> 
                                            <div class="thumbs">
                                                <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/q%20(4).jpg" >
                                                <div class="caption">
                                                    <span class="title">Краснолюд</span>
                                                    <span class="info">Стоимость:5000 тыс.</span>
                                                </div>
                                            </div>
                                           
                                            

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-3">
                                            <!-- сама фотография в профиле --> 
                                            <div class="thumbs">
                                                <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/q%20(5).jpg" >

                                                <div class="caption">
                                                    <span class="title">Краснолюд</span>
                                                    <span class="info">Стоимость:5000 тыс.</span>
                                                </div>
                                            </div>
                                            
                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-3">
                                            <!-- сама фотография в профиле --> 
                                            <div class="thumbs">
                                                <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/3.png" >

                                                <div class="caption">
                                                    <span class="title">Краснолюд</span>
                                                    <span class="info">Стоимость:5000 тыс.</span>
                                                </div>
                                            </div>
                                       

                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        <!--image begin -->
                                        <div class="fotogroup col-3">
                                            <!-- сама фотография в профиле --> 
                                            <div class="thumbs">
                                                <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/3.png" >


                                                <div class="caption">
                                                    <span class="title">Краснолюд</span>
                                                    <span class="info">Стоимость:5000 тыс.</span>
                                                </div>
                                            </div>
                                            
                                            <!-- модальное окно при нажатии на эту фотографию,кстати я так понимаю что этот кусок можно вырезать и как-то шаблонизировать что бы к каждой фотке это же не приписывать все--> 
                                            <div id="mymodl" class="modal fade" tabindex="-1">
                                                <div class="container">
                                                    <div class="row justify-content-center ">
                                                        <div class="modcontent ">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span class="close">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="modal-body">
                                                                    <div class="col-3 avtor">
                                                                        <!-- аватарка внутри модального окна --> 
                                                                        <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                                        <a><h3><?=$_COOKIE['user']?></h3></a>


                                                                        <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                                        <div class="score">
                                                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                            <i class="fa fa-comments" aria-hidden="true"></i>


                                                                        </div>
                                                                    </div>
                                                                    <!-- начало слайдера --> 
                                                                    <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#karusel" data-slide-to="1"></li>
                                                                            <li data-target="#karusel" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner ">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block"
                                                                                     src="images/1.jpg" alt="Первый слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/2.png" alt="Второй слайд">
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block" src="images/3.png" alt="Третий слайд">
                                                                            </div>

                                                                            <!--не шарю как но думаю надо сделать так что бы изображений могло быть больше или меньше -->
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#karusel" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#karusel" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- конец слайдера --> 

                                                            <div class="comments col-12">
                                                                <form >
                                                                    <div class="vvod col-5">
                                                                        <div id="com-name" class="form-group">
                                                                            <label for="comment-name">Имя:</label>
                                                                            <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                        </div>

                                                                        <div id="com-body" class="form-group">
                                                                            <label for="comment-body">Комментарий:</label>
                                                                            <textarea type="name" class="form-control  com" id="comment-body" placeholder="Твой комментарий"></textarea>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" id="comment-add" class="btn btn-primary">Комментировать</button>
                                                                    </div>



                                                                </form>

                                                            </div>





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/js.js"></script>






                                        </div>
                                        <!--image end -->
                                        

                                
                            </div>
                            </div>
                           
                           
                        </div>
                        
                            <div class="tab-pane text-center" id="information" role="tabpanel">
                                <div class="youinfo">
                                <fieldset>
                                    <legend> Ваше имя и фамилия</legend>
                                    <label>Имя: <input type="text" ></label>
                                    <label>Фамилия: <input type="email" ></label>
                                    
                                </fieldset> 
                                <fieldset> 
                                    <legend> Расскажите о себе</legend>
                                    <textarea id='uself' cols="70" rows="3" placeholder="Укажите чем занимаетесь да и вообще что угодно"></textarea>
                                    <script>
                                        function flexibleTextarea(b) {

                                            var a = document.getElementById(b) || b;

                                            if (a) {

                                                a.style.overflow = "hidden";

                                                var e = a.rows = a.rows > 0 ? a.rows : 2;

                                                b = a.cols = a.cols > 0 ? a.cols : 20;

                                                var g = RegExp("([^\r\n]{" + b + "})([^\r\n])"),

                                                    f = RegExp("[^\n]{" + b + "}\n?$|[^\n]{0," + b + "}\n");

                                                a.onkeyup = a.onkeydown = function () {

                                                    a.value = a.value.replace(g, "$1\r\n$2");

                                                    for (var c = 0, d = a.value; d.search(f) >= 0;) {

                                                        c++;

                                                        d = d.replace(f, "")

                                                    }

                                                    c += 2;

                                                    if (c < e) c = e;

                                                    a.rows = c

                                                }

                                            }

                                        };

                                        window.onload = function(){

                                            flexibleTextarea('uself'); 
                                            
                                        }</script>
                                    
                            
                                </fieldset>   
                                <button type="submit">Сохранить</button> 
                                </div>
                            </div>
                      
                        
                        <!-- Tab panes -->
                       
                                
                        </div>   
                </div>
            </div>
                </div>
            </div>
            
                
                
                <br><br>
                <footer>
                    <div class="container-fluid">
                        <div class="row" id="footer">

                            <div class="col-5">
                                <a href="https://vk.com/id100566132"><i class="fab fa-vk"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a> <p>| Подписывайтесь и следите за нашими социальными сетями</p>

                            </div>

                        </div>
                    </div>
                </footer>
                
        </div>


    </body>
</html>