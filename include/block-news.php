<?php
	defined('myeshop') or die('Доступ запрещён!');
?>
<div id="block-news">

<p align="center" class="news-prev" ><img src="/images/img-prev.png" /></p>
 <div id="newsticker">
     <ul>
 
 
 <?php
 
 $result = mysql_query("SELECT * FROM news ORDER BY id DESC",$link);
If (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);
 do
{	
    echo '
    
       <li>
	       		<span>'.$row["date"].'</span>
                <a href="">'.$row["title"].'</a>
				<p>'.$row["text"].'</p>    		
       </li>
         ';
}
 while ($row = mysql_fetch_array($result)); 
}         
?>    

     </ul>
 </div>
<p align="center" class="news-next" ><img src="/images/img-next.png" /></p>

</div>