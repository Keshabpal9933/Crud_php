<?php
/**
 * 
 */
class College
{
	var $name="keshab";
	var $age=22;
	var $lastname="pal";
	function Study()
	{
	     

	}
}
/**
 * 
 */
class Myinfo extends College
{
	
	
}
$info= new College();
echo $info->age;



?>