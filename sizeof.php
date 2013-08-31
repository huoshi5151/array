<?php 
/**
 * count()和sizeof()都输出3
 * @var array
 */
$categories=array(array(array('car_qiyou','汽车汽油',100),
						array('car_zhoucheng','汽车轴承',150),
						array('car_lunzi','汽车轮胎米其林',250)
				),
				array(array('motor_jiyou','摩托车机油',70),
					array('motor_lunzi','摩托车轮胎',100),
					array('motor_liantiao','摩托车链条',80)
				),
				array(array('zixingche_lunzi','自行车轮子',30),
					array('zixingche_shachexian','自行车刹车线',20),
					array('zixingche_zuo','自行车座',40)
				),
	);
echo sizeof($categories);
echo '<br>'.count($categories);

/**
 * array_count_values()将统计数组中值出现的次数，
 */
$arr=array(1,2,3,4,54,23,1,1,2,33,2,4,5,6);

$b=array_count_values($arr);
print_r($b);
?>