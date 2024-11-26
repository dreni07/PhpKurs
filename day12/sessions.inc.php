<?php 
$cookie_life_time = 86400 * 7;

session_set_cookie_params($cookie_life_time);

session_start();
?>