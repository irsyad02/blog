
<?php
 
Class ArrObject{
	

function arrayToObject($array) {
	$object = new stdClass();
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

//mengisi nilai dari array
$kota = array('kota1'=>'Bandung','kota2'=>'Jakarta','kota3'=>'Solo');
 
$obj = new ArrObject();
     
echo "Array ke Object <br />";
$object = $obj->arrayToObject($kota);
print_r($object);
echo "<br />";
echo "kota ".$object->kota2." ini ditampilkan dalam bentuk object";
 
echo "<br /><br />";
echo "Object ke Array <br />";
$arr = $obj->objectToArray($object);
print_r($arr);
echo "<br />";
echo "kota ".$arr['kota1']." ini ditampilkan dalam bentuk array";
 
?>