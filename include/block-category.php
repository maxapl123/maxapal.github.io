﻿<?php
	defined('myeshop') or die('Доступ запрещён!');
?>
<div id="block-category">
<p class="header-title" >Категории товаров</p>
<ul>
<li><a id="index1" ><p id="mobile-image"></p>Мобильные телефоны</a>
<ul class="category-section">
<li><a href="view_cat.php?type=mobile"><strong>Все модели</strong></a></li>
<?php

 $result = mysql_query("SELECT * FROM category WHERE type='mobile'",$link);
 
 If (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysql_fetch_array($result));
} 
?>
</ul>
</li>
<li><a id="index2" ><p id="book-image"></p>Ноутбуки</a>
<ul class="category-section">
<li><a href="view_cat.php?type=notebook"><strong>Все модели</strong></a></li>
<?php
	 $result = mysql_query("SELECT * FROM category WHERE type='notebook'",$link);
 
 If (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysql_fetch_array($result));
}
?>
</ul>
</li>
<li><a id="index3"><p id="table-image"></p>Планшеты</a>
<ul class="category-section">
<li><a href="view_cat.php?type=notepad"><strong>Все модели</strong></a></li>
<?php
	 $result = mysql_query("SELECT * FROM category WHERE type='notepad'",$link);
 
 If (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);
do
{
	echo '
    
  <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    
    ';
}
 while ($row = mysql_fetch_array($result));
}
?>
</ul>
</li>
</ul>
</div>