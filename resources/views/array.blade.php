<?php  
// //array
$makanan_array = ['nasi padang','nasi uduk','nasi goreng','nasi ayam'];
// var_dump($makanan_array);

 echo "<br><br>Nomor 1";
 echo "<br><br>$makanan_array[0],<br> $makanan_array[1],<br> $makanan_array[2]";
 //code foreach

//Foreach

 foreach ($makanan_array as $key => $value) { 	# code...
 	echo $value.'<br>';
 }
// //Code For Array
// // for ($value = 0; $value < count($makanan_array); $value++) {
// //     echo $makanan_array[$value].'<br>' ;
// // } 

// $i = 0;
// while ($i < count($makanan_array)) {
// 	echo $makanan_array[$i].'<br>';
// 	$i++;
// }

//array

// // $i = 10;
// // while ($i < 50 ){
// // 	echo "$i <br>";
// // 	$i--;
// // }

// echo "<br><br>Nomor 2";
// echo "<br>$makanan_array[1]";

//Array

// function sortir($key, $data) {
//     $result = array();

//     foreach($data as $val) {
//         if(array_key_exists($key, $val)){
//             $result[$val[$key]][] = $val;
//         }else{
//             $result[""][] = $val;
//         }
//     }

//     return $result;
// }
   
// $data = array(
//     array(
//         "id" => 1,
//         "name" => "Bruce Wayne",
//         "city" => "Gotham",
//         "gender" => "Male"
//     ),
//     array(
//         "id" => 2,
//         "name" => "Thomas Wayne",
//         "city" => "Gotham",
//         "gender" => "Male"
//     ),
//     array(
//         "id" => 3,
//         "name" => "Diana Prince",
//         "city" => "New Mexico",
//         "gender" => "Female"
//     ),
//     array(
//         "id" => 4,
//         "name" => "Speedy Gonzales",
//         "city" => "New Mexico",
//         "gender" => "Male"
//     )
// );

// // Group data by the "" key 
// $SortirData = sortir("gender", $data);

// // Dump result
// echo "<pre>" . var_export($SortirData, true) . "</pre>"

//

// $i++
// ++$i 
// $i--
// --$i




?>
