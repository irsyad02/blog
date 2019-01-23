<?php
Class arrObject{
	

function arrayToObject($array) {
	$obj = new stdClass();
	if (is_array($array)) {
	foreach($array as $key=>$value){
	$key = strtolower(trim($key));
	$object->$key = $value;
}
}
return $object;
}


function objectToArray($object){
	$array = array();
	if (is_object($object));{
	$array = get_object_vars($object);
}
return $array;
}
}
?>


<?php
//objectberisiarray
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$warna = array("merah","kuning","hijau");
var_dump($warna);
?>
