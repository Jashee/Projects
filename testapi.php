<?php
$ApiContents = file_get_contents('http://localhost/ProjectLaravel/public/featured_product');
$ApiProdcut = json_decode($ApiContents);
//echo '<pre>';
//print_r($ApiProdcut);
//echo '</pre>';
//print_r($ApiProdcut[0]->Product_Image);
//$php_array = json_encode($ApiContents);
//$php_array = json_decode($php_array,true);
?>