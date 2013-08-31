<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>三维数组</title>
</head>
<body>
	
</body>
</html>
<?php 
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
for ($layer=0; $layer < 3; $layer++) { 
	echo "layer $layer<br>";
	for ($row=0; $row < 3; $row++) { 
		for ($column=0; $column < 3; $column++) { 
			echo '|'.$categories[$layer][$row][$column];
		}
		echo '|<br />';
	}
}
 ?>