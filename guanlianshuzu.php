<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<?php 
$products=array(array('code'=>'qiyou',
					'description'=>'新品',
					'price'=>100
				),
				array('code'=>'lunzi',
					'description'=>'米其林',
					'price'=>200
				),
				array('code'=>'zhoucheng',
					'description'=>'轴承',
					'price'=>150
					)

	);
for ($i=0; $i < 3; $i++) { 
	echo $products[$i]['code'].'|'.$products[$i]['description'].'|'.$products[$i]['price'].'<br />';
}
 ?>