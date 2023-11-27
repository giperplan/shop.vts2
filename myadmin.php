<?php

// самый минимальный набор критических функций
// inadm, is_test, file_theme_name

include( defined ('minifun_path') ? constant('minifun_path') : 'core/minifun.php' );

// главный конфиг
include('config.php');

// инициализация
include( defined ('init_path') ? constant( 'init_path')  :  'core/init.php');

// админ функции
include( file_theme_name( 'adminfun.php' ));

// генератор страницы
include( file_theme_name( 'admin.php' ));