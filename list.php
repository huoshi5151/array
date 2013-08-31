<?php 
/**
 * 注意一个是$price一个是$prices如果两个变量冲突，只会出现一个结果，不会将数组全部循环出来
 * @var array
 */
$prices=array('qiyou'=>100,'lunzi'=>200,'zhoucheng'=>300);
while (list($product,$price) = each($prices)) {
	echo "$product - $price<br>";
}
 ?>