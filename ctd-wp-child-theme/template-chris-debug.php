<?php
/**
* Template Name: Chris debug
*/

var_dump(ini_get( 'upload_max_size' , '256M' ));
var_dump(ini_get( 'post_max_size', '256M' ));
var_dump(ini_get( 'max_execution_time', '300' ));

phpinfo();
