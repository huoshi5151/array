<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>sort对数组排序</title>
</head>
<body>
	
</body>
</html>
<?php 
/**
 * sort()大写字母(a>z)》小写字母》数字从大到小
 * @var array
 */
/*$price=array(20,'a','z','Z',10,'A');
// sort($price);
rsort($price);
print_r($price)*/

$price=array('qiyou'=>100,'lunzi'=>200,'zhoucheng'=>140);
ksort($price);
// asort($price);
print_r($price);


 ?>