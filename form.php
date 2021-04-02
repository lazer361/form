<?php
$errorMessages = array();

function checkNumbers($input, $text) {
    global $errorMessages;

    if(preg_match('/[0-9]+/i', $input)) {
        array_push($errorMessages, "Поле $text не должно содержать цифры !");
    }
}

function checkLong($input, $min, $text) {
    global $errorMessages;

    if(strlen($input) < $min) {
        array_push($errorMessages, "Поле $text слишком короткий !");
    }
}

function valid($post) {

    global $errorMessages;

   $name = $post['name'];
   $surname = $post['surname'];
   $login = $post['login'];
   $pass = $post['pass'];

   $minLong = array(
       "login" => 5,
        "pass" => 8,
   );


   if(!empty($name) && !empty($surname) && !empty($login) && !empty($pass)) {

       checkNumbers($name, 'Имя');
       checkNumbers($surname, 'Фамилия');

       checkLong($login, $minLong["login"], 'Логин');
       checkLong($pass, $minLong["pass"], 'Пароль');

       if(!empty($errorMessages)){ ?>
           <div class="output">
               <? foreach ($errorMessages as $element) { ?>
                   <div class="error">
                       <?= $element; ?>
                   </div>
               <? } ?>
           </div>
       <? } else { ?>

           <div class="output">
               <h4>Вы успешно прошли валидацию</h4>
               <div class="info"><span>Ваше имя:</span> <?= $name; ?></div>
               <div class="info"><span>Ваша фамилия:</span> <?= $surname; ?></div>
               <div class="info"><span>Ваш логин:</span> <?= $login; ?></div>
               <div class="info"><span>Ваш пароль:</span> <?= $pass; ?></div>
           </div>
       <?php } ?>

   <?php }else { ?>
       <div class="output">
           <div class="warning">Заполнение всех полей обязательно!</div>
       </div>
   <?php }
}?>


