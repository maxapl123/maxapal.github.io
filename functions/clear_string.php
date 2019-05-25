<?php
function clear_string($cl_str){

    $cl_str = strip_tags($cl_str);       // Удаляем HTML и PHP теги
    $cl_str = mysql_real_escape_string($cl_str); // Экранируем спец.символы
    $cl_str = trim($cl_str); // Удаление лишних пробелов
    
    return $cl_str; 
}
?>