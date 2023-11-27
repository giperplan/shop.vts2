<?php

error_reporting(E_ALL | E_STRICT & ~E_WARNING & ~E_NOTICE);

// Обязательно!
$basehref='http://test-shop-vts.188.giperplan.com';
$adminlogin='admin';
$adminpass='GuDcIJyERz';

$host_db='localhost';
$user_db='demosite_shop_vts';
$pass_db='URQOZ6oSKF';
$base_db='demosite_shop_vts';
$port_db='3306';
define('pref_db','shvts__');

// Опции
define('hrpref','');  
define('hrsuf',''); 
$lang=0;

define('limw', 200);
define('limh', 100);
define('limwb',1000);
define('limhb',600);


define('content', 'cont' ); 		
define('img', 'cont/img' ); 	
define('cat', 'cont/cat' ); 
define('tpl', 'cont/tpl') ; 	
define('album', 'cont/album') ; 
define('cssroot','cont/css'); 
define('tnroot','jscripts/edit');  //
define('jscripts','core');


define('vid', 6); 
define('art', 7);
define('ok', 8);
define('desc', 9);
define('price', 10);
define('mlimw', 200); 
define('mlimh', 100);
define('mlimwb',1000);
define('mlimhb',600);





?>