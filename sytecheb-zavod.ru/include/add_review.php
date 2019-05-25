<?php

 include("db_connect.php");
 include("../functions/clear_string.php");
    
 $name = clear_string($_POST['name']);
 $good = clear_string($_POST['good']);
 $bad =  clear_string($_POST['bad']);
 $comment =  clear_string($_POST['comment']);

    		mysql_query("INSERT INTO table_reviews(products_id,name,good_reviews,bad_reviews,date,comment)
						VALUES(						
                            '".$_POST['id']."',
                            '".$name."',
                            '".$good."',
                            '".$bad."',
                             NOW(),
                            '".$comment."'                                  
						)",$link);	

echo 'yes';
?>