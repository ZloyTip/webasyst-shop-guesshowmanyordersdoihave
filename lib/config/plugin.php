<?php
return array (
  'name' => 'Угадай сколько у меня заказов?',
  'description' => 'Добавляет случайные значения к номеру заказа.',
  'img' => 'img/icon.png',
  'version' => '1.0.1',
  'vendor' => '972539',
  'handlers' => 
  array (
      'order_action.create' => 'orderActionCreate'
  ),
);
