<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title></title>
</head>
<body>
	
</body>
</html>
<?php 
$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
$orders=file($DOCUMENT_ROOT.'/sublimetext/2013/08/31/file_php_mysql/order.txt');	//以行为单位
$num_of_orders=count($orders);
for ($i=0; $i < $num_of_orders; $i++) { 
	echo $orders[$i].'<br>';
}
for ($i=0; $i < $num_of_orders; $i++) { 
	$orderarr=explode("\t", $orders[$i]);
	echo '时间：'.$orderarr[0].'商品名称：'.$orderarr[1].'价格<br>';
}
 ?>