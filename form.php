<?php

function valid($post) {
   $name = $post['name'];
   $surname = $post['surname'];
   $login = $post['login'];
   $pass = $post['pass'];

   $error_messages = array();

   $min_long = array(
       "login" => 5,
        "pass" => 8,
   );


   if(!empty($name) && !empty($surname) && !empty($login) && !empty($pass)) {

       if(preg_match('/[0-9]+/i', $name)) {
           array_push($error_messages, "Поле Имя не должно содержать цифры !");
       }
       if(preg_match('/[0-9]+/i', $surname)){
           array_push($error_messages, "Поле Фамилия не должно содержать цифры !");
       }

       if(strlen($login) < $min_long["login"]) {
           array_push($error_messages, "Поле Логин слишком короткий !");
       }

       if(strlen($pass) < $min_long["pass"]) {
           array_push($error_messages, "Поле Пароль слишком короткий !");
       }

       if(!empty($error_messages)){ ?>
           <div class="output"><?
               foreach ($error_messages as $element) {?>
                   <div class="error">
                       <? echo $element; ?>
                   </div>
               <?}?>
           </div>
           <?
       }else {?>
           <div class="output">
               <h4>Вы успешно прошли валидацию</h4>
               <div class="info"><span>Ваше имя:</span> <? echo $name; ?></div>
               <div class="info"><span>Ваша фамилия:</span> <? echo $surname; ?></div>
               <div class="info"><span>Ваш логин:</span> <? echo $login; ?></div>
               <div class="info"><span>Ваш пароль:</span> <? echo $pass; ?></div>
           </div>
           <?php
       }

   }else { ?>
       <div class="output">
           <div class="warning">Заполнение всех полей обязательно!</div>
       </div>
   <?php }
}
 ?>


