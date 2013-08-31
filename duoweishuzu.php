<?php 
/**
 * 两种方式都可以得到以下效果
 * |LUNZI|lun|200|
*|QIYOU|qi|100|
*|ZHOUCHENG|zhou|210|
 * @var array
 */
$products=array(array('LUNZI','lun',200),
				array('QIYOU','qi',100),
				array('ZHOUCHENG','zhou',210)
	);
/*echo '|'.$products[0][0].'|'.$products[0][1].'|'.$products[0][2].'|<br />';
echo '|'.$products[1][0].'|'.$products[1][1].'|'.$products[1][2].'|<br />';
echo '|'.$products[2][0].'|'.$products[2][1].'|'.$products[2][2].'|<br />';*/

for ($row=0; $row< 3; $row++) { 
	for ($col=0; $col < 3; $col++) { 
		echo '|'.$products[$row][$col];
	}
	echo '|<br>';
}
 ?>