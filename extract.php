<?php 

$arr=array('key1'=>'value1','key2'=>'value2','key3'=>'value3');
extract($arr);

echo $key1.'<br>';
echo $key2.'<br>';
echo $key3.'<br>';

$arr=array('key1'=>'value4','key2'=>'value5','key3'=>'value6');
extract($arr,EXTR_PREFIX_ALL,'wt');

echo $wt_key1.'<br>';
echo $wt_key2.'<br>';
echo $wt_key3.'<br>';
 ?>