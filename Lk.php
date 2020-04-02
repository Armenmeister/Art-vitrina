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
        
        
        
        
        
        <link rel="stylesheet" href="assets/css/style2.css">
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

                                <ul class="dropdown-menu dropdown-menu-right">
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
            <div class="container-fluid ">

                <div class="row justify-content-center">
                <div class="port ">
                    <div class="zagolovok col-sm-12  col-md-12 col-lg-12 col-xl-12 ">
                        <div class="foto col-12">
                            <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                         <h3><?=$_COOKIE['user']?></h3>
                        </div>
                        <div class="col-12"><br></div>
                        <!-- Nav pills -->
                        
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Галерея</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Messages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
                            </li>
                        </ul>

                        <!-- Вкладка панели -->  
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel">
                                
                                <div class="container-fluid">

                                    <div class="row justify-content-center">

                                    
                                        
                                        <img id="galer" data-toggle="modal" data-target="#mymodl" src="images/gal.PNG" >
                                        <div id="mymodl" class="modal fade" tabindex="-1">
                                            <div class="container">
                                                <div class="row justify-content-center ">
                                                    <div class="modcontent ">
                                                        <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="close">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="col-3 avtor">
                                                            <img alt="имя" height="120" ng-src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg" width="120" src="https://www.gravatar.com/avatar/eb99c86ff125634180a47916fc029681.jpg?size=240&amp;d=https%3A%2F%2Fwww.artstation.com%2Fassets%2Fdefault_avatar.jpg">
                                                            <a><h3><?=$_COOKIE['user']?></h3></a>


                                                            <div class="description">Здесь будет описание работы по типу ну я вот недавно начал заниматься чем-то там,а если точнее всего 36 секунд как и вот я уже немного научился,да.ок</div>

                                                            <div class="score">
                                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                                <i class="fa fa-comments" aria-hidden="true"></i>


                                                            </div>
                                                        </div>

                                                        <div id="karusel" class="col-9 carousel" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#karusel" data-slide-to="0" class="active"></li>
                                                                <li data-target="#karusel" data-slide-to="1"></li>
                                                                <li data-target="#karusel" data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img class="d-block w-100 h-100" src="images/1.jpg" alt="Первый слайд">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100 h-100 " src="images/2.png" alt="Второй слайд">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100 h-100 " src="images/3.png" alt="Третий слайд">
                                                                </div>
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

                                                        <div class="comments">
                                                            <form >
                                                                <div class="vvod">
                                                                    <div id="com-name" class="form-group">
                                                                        <label for="comment-name">Имя:</label>
                                                                        <input type="name" class="form-control" id="comment-name" placeholder="Твое имя">
                                                                    </div>

                                                                    <div id="com-body" class="form-group">
                                                                        <label for="comment-body">Комментарий:</label>
                                                                        <input type="name" class="form-control" id="comment-body" placeholder="Твой комментарий">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group text-right">
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

                                </div>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel">...</div>
                            <div class="tab-pane" id="messages" role="tabpanel">...</div>
                            <div class="tab-pane" id="settings" role="tabpanel">...</div>
                        </div>
                        
                        
                      
                        
                        <!-- Tab panes -->
                       
                                
                                
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