<?php
$marks=400;
$total=800;

$result=$marks/$total*100;

if ($result>=80){
	echo "Distintion";
}else if($result>=60 &&$result<80){
	echo "First Division";
}else if($result>=45 && $result<60) {
	echo "second Division";
}else if($result>=35&$result<45) {
	echo "third Division";
}else{
echo "Fail";
}

?>