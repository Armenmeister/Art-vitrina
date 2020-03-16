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
        <link rel="stylesheet" href="assets/css/style2.css">
        <title>Арт-витрина</title>
    </head>
    <body>
        <div class="fon">


            <div class="header">
               
                <div class="container-fluid ">

                    <div class="row">

                        <div class=" col-sm-12 col-md-12 col-lg-2 col-xl-2" id="log"><p>Арт-витрина</p>
                        </div>

                        <div id="links" class="col-sm-12 col-lg-7 col-md-12 col-xl-7 text-center ">
                           <ul class="menu">
                               <li><a href="#">Иллюстрации</a></li>
                               <li><a href="#">Авторы</a></li>
                               <li><a href="#">Авторы</a></li>
                               <li><a href="#">Сообщество</a></li>
                            
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
                                    <li><a href="#">ссылка 1</a></li>
                                    <li><a href="#">ссылка 2</a></li>
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
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#menu1">Menu 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#menu2">Menu 2</a>
                            </li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane container active" id="home">
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
                            </div>
                            <div class="tab-pane container fade" id="menu1">...</div>
                            <div class="tab-pane container fade" id="menu2">...</div>
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