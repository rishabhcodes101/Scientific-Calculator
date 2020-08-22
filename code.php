<?php
$first=$_GET['f'];
//echo $first;
$second=$_GET['s'];
//echo $second;
$operator=$_GET['a'];
//echo $operator;
if($operator=='add')
{
	$res=$first+$second;
	echo $res;	
}
elseif($operator=='sub')
{
	$res=$first-$second;
	echo $res;
}
elseif($operator=='mul')
{
	$res=$first*$second;
	echo $res;	
}
elseif($operator=='div')
{
	$res=$first/$second;
	echo $res;
}
?>