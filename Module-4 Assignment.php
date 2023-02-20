<?php




// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

$names = [ 'Bangladesh', 'Is',  'A',  'Beautiful',  'Country' ];
usort($names, fn($x,$y) => strlen($x) <=> strlen($y));

var_dump($names);


// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

// 1st String
$fname = 'Amir';
 
// 2nd String
$lname = 'Hamza';
 
// Concatenation Of both String
$fullname = $fname.$lname;
 
// print Concatenate String
echo " $fullname \n";


// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array


$person = array("Heena", "Meena", "Reena", "Teena");
$newperson = $person;
// Deleting last array item
array_shift($newperson,);
// Deleting last array item
array_pop($newperson,);

// $pushed= array_push($sports,'Tennis');
print_r($person);
print_r($newperson);



// 4.Write a PHP function to check if a string contains only letters and whitespace

  $ostad='sdf@';

if (preg_match('/^[\p{L&} -]+$/u', $ostad)) {
  //  Only letters and spaces.
  echo 'Letters or spases';
} else {
  //  Emtpy string or other characters too
  echo "Anything else is present";
  
}


// 5.Write a PHP function to find the second largest number in an array of numbers.



$number = array(20, 520, 52, 755, 75, 15, 561, 656, 765);
$largest = $number[0];
$secondlargest;
for($i=1; $i<count($number); $i++){
	if($number[$i]>$largest){
		$secondlargest = $largest;
		$largest = $number[$i];
	}else if($secondlargest<$number[$i] && $secondlargest < $largest){
		$secondlargest = $number[$i];
	}
}

echo $secondlargest;

