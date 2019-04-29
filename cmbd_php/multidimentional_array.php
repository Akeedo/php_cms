<?php
$myArray = array(
  array( "one", "two", "three" ),
  array( "four", "five", "six" )
);
echo "<pre>";
echo "I want to see number ".$myArray[1][2];
echo "<br>";
print_r($myArray);
echo "<br>";

// Mulit-Dimensional Array
$multiDimensionalArray = array(
	'one' => array('name' => 'Korim Ali','City' => 'Dhaka', 'likes' => 'WordPress'),
	'two' => array('name' => 'Kuddus Ali', 'city' => 'Rajshai', 'likes' => 'Pictures'),
	'three' => array('name'=> 'Taki Ahmed', 'city' => 'Khulna', 'likes' => 'Fast Foods')
	);
// echo $multiDimensionalArray[0][2];
//echo "<pre>";
print_r($multiDimensionalArray);
echo "<br>";
echo "My name is ".$multiDimensionalArray['three']['name'];

?>