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
$products=array(array('LUNZI','lun',200),
				array('ZHOUCHENG','zhou',210),
				array('QIYOU','qi',100),
	);
function compare($x,$y){
	if ($x[0]==$y[0]) {
		return 0;
	}else if ($x[0]<$y[0]){
		return -1;
	}else if ($x[0]>$y[0]){
		return 1;
	}
}

usort($products, 'compare');
print_r($products);

 ?>