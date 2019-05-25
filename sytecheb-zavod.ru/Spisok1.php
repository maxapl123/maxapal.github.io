<?php
ini_set('display_errors','Off');
     session_start();
     define('myeshop', true); 
	 include("include/db_connect.php");
     include("include/DopFunkshion.php");
     include("functions/group_numerals.php");
     include("functions/clear_string.php");
	 ?>


<!DOCTYPE html>
<html>
   <head>
   
   <link href="css/reset.css" rel="stylesheet" /> 
   <link href="css/css.css" rel="stylesheet"/>
   <link href="css/css-text.css" rel="stylesheet"/>
   
      <meta charset="utf-8" />
      <title>H555</title>
   </head>
   <body>
<div class="wrapper">
   
<div class = "header"> 

<div class="header-input"> 

<div class="header-top">

<div class="header-input-search">Поиск





</div>

<div class="header-input-name"> 
<div class="namse-syte"> 
<div class="namse-syte-start">Bomb.Soap.Handmade.</div>
<div class="namse-syte-finish"><br>Чебоксарский<br>мыловаренный завод</div>
</div>
</div> 
<div class="header-input-info"> 8-(905)-340-61-16 <br> 8-8352-228 - 288 <br> E-mail:cheb.zavod@mail.ru </div>
</div>

<div class="header-bottom">
<div class="header-input-basket">Корзина пуста</div>
</div> 


<div class="header-menu">


<nav id="primary_nav_wrap">
<ul>

  <li class="current-menu-item"><a href="#">Главная</a></li>
  <li><a href="#">О компании</a>
    <ul>
      <li><a href="#">Sub Menu 1</a></li>
      <li><a href="#">Sub Menu 2</a></li>
      <li><a href="#">Sub Menu 3</a></li>
      <li><a href="#">Sub Menu 4</a>
        <ul>
          <li><a href="#">Deep Menu 1</a>
            <ul>
              <li><a href="#">Sub Deep 1254</a></li>
			  <li><a href="#">Sub Deep 125</a></li>
              <li><a href="#">Sub Deep 2</a></li>
              <li><a href="#">Sub Deep 3</a></li>
                <li><a href="#">Sub Deep 4</a></li>
            </ul>
          </li>
          <li><a href="#">Deep Menu 2</a>
		   <ul>
              <li><a href="#">Sub Deep 1254</a><ul><li><a href="#">Sub Deep 1254</a></li></ul></li>
			  <li><a href="#">Sub Deep 125</a></li>
              <li><a href="#">Sub Deep 2</a></li>
              <li><a href="#">Sub Deep 3</a></li>
                <li><a href="#">Sub Deep 4</a></li>
            </ul>
		  
		  </li>
        </ul>
      </li>
      <li><a href="#">Sub Menu 5</a></li>
    </ul>
  </li>
  <li><a href="Katalog.php">Каталог</a>
    <ul>
      <li><a href="#">Sub Menu 1</a></li>
      <li><a href="#">Sub Menu 2</a></li>
      <li><a href="#">Sub Menu 3</a></li>
    </ul>
  </li>
  <li><a href="#">Партнерство</a>
    <ul>
      <li class="dir"><a href="#">Sub Menu 1</a></li>
      <li class="dir"><a href="#">Sub Menu 2 THIS IS SO LONG IT MIGHT CAUSE AN ISSEUE BUT MAYBE NOT?</a>
        <ul>
          <li><a href="#">Category 1</a></li>
          <li><a href="#">Category 2</a></li>
          <li><a href="#">Category 3</a></li>
          <li><a href="#">Category 4</a></li>
          <li><a href="#">Category 5</a></li>
        </ul>
      </li>
      <li><a href="#">Sub Menu 3</a></li>
      <li><a href="#">Sub Menu 4</a></li>
      <li><a href="#">Sub Menu 5</a></li>
    </ul>
  </li>
  <li><a href="#">Где купить в розницу</a></li>
  <li><a href="#">Доставка</a></li>
  <li><a href="#">Контакты</a></li>
  <li><a href="#">Салон Schatzberg</a></li>
</ul>
</nav>

</div>




</div>
</div>

<div class = "content">
<div class = "contentss">
<?php


$db_host		= 'localhost';
$db_user		= 'admin_shop';
$db_pass		= '123456';
$db_database	= 'my_shop'; 

$link = mysql_connect($db_host,$db_user,$db_pass);

mysql_select_db($db_database,$link) or die(" ".mysql_error());
mysql_query("SET names utf8");

?>
<?php



 
$result_list = mysql_query("SELECT * FROM table_products WHERE table_products.brand='mmr1'",$link);
If (mysql_num_rows($result_list) > 0)
{
$row_list = mysql_fetch_array($result_list); 
 
 echo '
 <ul id="block-tovar-list">';

 do {
 
if  (strlen($row_list["image"]) > 0 && file_exists("./Cheb-Zavod/".$row_list["image"]))
{
$img_path = './Cheb-Zavod/'.$row_list["image"];
$max_width = 230; 
$max_height = 200; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height);    
}else
{
$img_path = './uploads_images/'.$row_list["image"];
$max_width = 230; 
$max_height = 200; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 
}

 

$query_reviews = mysql_query("SELECT * FROM table_reviews WHERE products_id = {$row_list["products_id"]}",$link);  
$count_reviews = mysql_num_rows($query_reviews);

        
	    echo '
<li>
<div class="block-image-list">
<img src="'.$img_path.'" width=210px; height=180px; />
</div>
<p class="style-title-list">'.$row_list["title"].'</p>
<input class="add-cart-style-list" type="button" value="В корзину" tid="'.$row_list["products_id"].'" ></input>
<p class="style-price-list" ><strong>'.group_numerals($row_list["price"]).'</strong> руб.</p>

<div class="style-text-list">
'.$row_list["mini_description"].'
</div>
</li>
';

}


 while ($row_list = mysql_fetch_array($result_list));
 
  echo '</ul>';
} else
{
    echo "<h99999 class='style-title-list112'>Товаров пока нет.</h99999>";
}   
	
?>
</div >
</div>


<div class = "footer">

<div class="footer-input">
<div class="footer1"></div>
<div class="footer2"></div>
<div class="footer3"></div>

</div> 
</div>
</div>

   
   </body>
</html>