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
        
        
        
        
        
        <link rel="stylesheet" href="assets/css/stylenov.css">
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
            
            <div class="container">
                <div class="row">
                    <div class="novosti col-12 text-center">
                    
                     
            
                            
                        <div class="row" style="margin-left:37px;">
                                <div class="lenta col-11 justify-content-center ">
                                    <!--1 Новость -->
                                       
                                    <div class="row justify-content-center">
                                        <div class="zapis col-sm-12  col-md-12 col-lg-12 col-xl-12  text-left" >
                                            <a class="zap" href="#">
                                                <div class="row">

                                                    <div class="zagolovok col-lg-9">
                                                        <h3>Это новая новость "HELLO NEWS"</h3>

                                                    </div>
                                                    <div class="time col-lg-3 text-right">
                                                        <!-- дата и время если можно-->
                                                        01.04.20 19:52
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <!-- тут короче фотография вставляется на всю свою ширину и висота ставится автоматически-->
                                                    <div class="imgzapisi img-fluid col-12 "><img src="images/zmg.png" alt="zmg" >
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="previewtext">
                                                <p>HAY,начинаем делать новостную ленту,текст текст текст текст текст текст текст текст текстHAY,начинаем делать новостную ленту,текст текст текст текст текст текст текст текст текст</p>
                                            </div>
                                            <div class="row">
                                                <div class="avtor col-12"> 
                                                  
                                                        <!--Кароче тут типо имя авторв будет с иконочкой в кружочке и ссылка на этого автора-->

                                                        <div class="nick col-12"> 
                                                            <img src="images/gal.PNG" alt="ava" height="50" width="50">
                                                            <a href="#">Armenmeister</a> 
                                                            <button type="button" class="btn btn-primary btn-sm">Подписаться</button>
                                                            
                                                            <!--если подписан то вот эта галочка-->
                                                            <i class="fa fa-check" aria-hidden="true"></i>

                                                        </div>
                                                   
                                                </div>
                                            </div>
                                                
                                            
                                        </div>
                                    </div>
                                    <!--1 Новость конец-->
                                    
                                  
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