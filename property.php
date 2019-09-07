<?php



/**
 * 
 */
class College
{
	var $english="british english";
    var $nepali="hero of nepal";
	
	function Study()
	{
		$this->nepali="football is life";
	}
}

$ans= new College();
$ans->Study();
echo $ans->nepali
?>