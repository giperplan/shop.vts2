<?php

include( 'core/minifun.php' );

include('config.php');

include( jscripts.'/init.php' );

try {
    include( jscripts. '/page.php' );
} catch (Exeption $e) {
    echo $e->getMessage();
}