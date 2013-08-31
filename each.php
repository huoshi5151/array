<?php 
/**
 * print_r($element)的结果
 * Array ( [1] => 100 [value] => 100 [0] => qiyou [key] => qiyou ) Array ( [1] => 200 [value] => 200 [0] => lunzi [key] => lunzi ) Array ( [1] => 210 [value] => 210 [0] => zhoucheng [key] => zhoucheng )
 * @var array
 */
$price=array('qiyou'=>100,'lunzi'=>200,'zhoucheng'=>210);
while ($element=each($price)) {
	// print_r($element);
	echo $element['key'].'-'.$element['value'],'<br />';
	
}
 ?>