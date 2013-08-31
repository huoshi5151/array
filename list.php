<?php 
/**
 * 注意一个是$price一个是$prices如果两个变量冲突，只会出现一个结果，不会将数组全部循环出来
 * 如果在当前脚本多次使用该数组，下次使用前应该reset($prices)，因为each()函数会记录当前数组元素
 * @var array
 */
$prices=array('qiyou'=>100,'lunzi'=>200,'zhoucheng'=>300);
while (list($product,$price) = each($prices)) {
	echo "$product - $price<br>";
}

// print_r($prices);

foreach ($prices as $value) {
	echo $value.'<br />';
}

 ?>