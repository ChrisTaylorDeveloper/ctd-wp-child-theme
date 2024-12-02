<?php
/**
* Template Name: Chris debug
*/

ini_set( 'upload_max_size' , '64M' );
ini_set( 'post_max_size', '64M');
ini_set( 'max_execution_time', '300' );

var_dump(ini_get( 'upload_max_size' ));
var_dump(ini_get( 'post_max_size' ));
var_dump(ini_get( 'max_execution_time' ));

phpinfo();
