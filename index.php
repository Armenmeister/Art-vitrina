<?php
session_start();
 ?>
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
   <link rel="stylesheet" href="assets/css/style.css">
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
             if($_COOKIE['user'] == ''): ?>
        
         
             <!--Форма авторизации  -->
             <div class="row justify-content center">
                 <div class="col-xs-12 ">
                     <button id="btn" class="btn-info1" data-toggle="modal" data-target="#myModal"><i class="fas fa-door-open"></i>Войти</button>

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
                     <div class="clear"></div>
                 </div>
                 
                 
                 
                     <!--Форма регистрации -->
                     <button id="btn2" class="btn-info" data-toggle="modal" data-target="#registr"><i class="fas fa-sign-in-alt"></i> Регистрация</button>
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
      
           
             </div>
      

        
     
     
         
          <?php else: ?>
                 <div class="cabinet col-sm-12  col-md-12 col-lg-3 col-kl-3 text-center ">
        <div class="akk btn-group btn-group-sm">
           <button class="akk2 btn">
               <a href="Lk.php"> <p><?=$_COOKIE['user']?></p></a>
              
           </button>
            <button class="akk3 btn dropdown-toggle" data-toggle="dropdown">
            </button>
           
           <ul class="dropdown-menu dropdown-menu-right">
               <li><a href="#">Моя галерея</a></li>
               <li><a href="#">Мои записи</a></li>
               <li><a href="#">Настройки</a></li>
               <li><a href="validation/exit.php">Выход</a></li>
           </ul>
           
       </div>
         
        
    </div>
          <?php endif; ?>
                 <div class="clear"></div>
    
         </div>
   
  </div>
  
     <!--search form-->
     <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 search-box text-right">
         <input type="text" class="search-txt" placeholder="Поиск...">
         <a href="Lk.php" class="search-btn"><i class="fas fa-search" aria-hidden="true"></i></a>

     </div>
    
   </div>
<div class="katalog">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="allimg-tab" data-toggle="tab" href="#allimg" role="tab" aria-controls="allimg" aria-selected="true">Все изображения</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="false">Популярные</a>
  </li>
  
</ul>
<div class="container-fluid">
   <div class="row">
    <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="allimg" role="tabpanel" aria-labelledby="allimg-tab">[eqyz]</div>
  <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">negfzffffffffddddddddddddddddddddddddddddddddddddddddd</div>
 </div>
</div>  
  </div>
  
  <div class="container-fluid" >
   <div class="row" id="fot">
   <div id="n" class="col-12">1 2 3 ...</div>
<br><br>
      <div class="col-6"><H1>Сообщества</H1>
   <p>Наши новости</p></div>
      <div class="col-6"><H1>Авторы</H1>
   <p>Наши пользователи</p>  </div>
  
       <div id="news" class="col-1"><a href=""><H5>НОВОСТЬ ДНЯ1</H5><p>У нас пополнение и еще всякое такое</p></a></div>
       <div id="news" class="col-1"><a href=""><H5>НОВОСТЬ ДНЯ2</H5><p>У нас пополнение и еще всякое такое</p></a></div>
       <div id="news" class="col-1"><a href=""><H5>НОВОСТЬ ДНЯ3</H5><p>У нас пополнение и еще всякое такое</p></a></div>
       <div class="prop col-1"></div>
      
       <div class="avtors col-1"><a href="">Алексей Забибулин</a></div>
       <div class="avtors col-1"><a href="">Алексей Забибулин</a></div>
       <div class="avtors col-1"><a href="">Алексей Забибулин</a></div>
       
       <div  class="col-12"></div>
       
       <div id="news" class="col-1"><a href=""><H5>НОВОСТЬ ДНЯ4</H5><p>У нас пополнение и еще всякое такое</p></a></div>
       <div id="news" class="col-1"><a href=""><H5>НОВОСТЬ ДНЯ5</H5><p>У нас пополнение и еще всякое такое</p></a></div>
       <div id="news" class="col-1"><a href=""><H5>НОВОСТЬ ДНЯ6</H5><p>У нас пополнение и еще всякое такое</p></a></div>
       <div class="prop col-1"></div>
  
       <div class="avtors col-1"><a href="">Алексей Забибулин</a></div>
       <div class="avtors col-1"><a href="">Алексей Забибулин</a></div>
       <div class="avtors col-1"><a href="">Алексей Забибулин</a></div>
  
     
 
   
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
  
   </div>
   
    
</body>
</html>