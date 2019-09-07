<?php
/**
 * 
 */
class College
{
	
	function Study()
	{
		echo "many languages are teaches in thier";
	}

}
if (method_exists("College","Study")) {
	echo "class is working in this page";

}else{
	echo "no it doesnot working in this class";
}

?>