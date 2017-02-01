<?php

return array(
    'enabled'  => array(
        'value'        => 0,
        'title'        => 'Включён',
        'description'  => 'Если плагин отключён, автоматическая надбавка работать не будет. Но по расписанию запуск команды будет увеличивать номер заказа.',
        'control_type' => waHtmlControl::CHECKBOX,
    ),
    'min'  => array(
        'value'        => '0',
        'title'        => 'MIN',
        'description'  => '',
        'format'       => '[0-9]+',
        'control_type' => waHtmlControl::INPUT,
    ),
    'max'  => array(
        'value'        => '20',
        'title'        => 'MAX',
        'description'  =>
            'При оформлении заказа будет выбрано случайное целое число в промежутке между MIN и MAX, которое будет прибавлено к номеру <strong>следующего</strong> заказа.<br>'.
            'Если полученное случайное число меньше 1, надбавки не будет.<br>'.
            'MAX не может быть меньше MIN, иначе надбавки не будет.<br>'.
            'Если MAX или MIN не число, надбавки не будет.<br>'.
            'Если MAX равно MIN, прибавка к номеру всегда будет одинаковая.',
        'format'       => '[0-9]+',
        'control_type' => waHtmlControl::INPUT,
    ),
    'cron'  => array(
        'value'        => '20',
        'title'        => 'Запуск надбавки через планировщик (необязательно)',
        'description'  => '',
        'format'       => '[0-9]+',
        'control_type' => waHtmlControl::CUSTOM.' shopGuesshowmanyordersdoihavePlugin::getDescriptionControl',
    ),
);
