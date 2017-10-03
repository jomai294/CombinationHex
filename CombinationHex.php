<?php
	
	//string of multiplication
	//first number is 2 then the rest are 3s and the last are 3,2,1
	//then multiply all those numbers together and take the product to multiply numDigits - 2

	//Came up with algorithm on paper and pencil through errors.

	//Thought process and test cases
	/*
	Imagine you have 3 spots. The first slot means that you can only have 2 possibilities which are A and 1. The next slot is then 2 because once you choose one, you are down to 2 more which is either 0 or A. The last one is equal to 1 because you have only one selection left. This is why for 3 you have 2 * 2 * 1. THe offset is 1 as well so you just multiply that in.

	Imagine you have 4 slots now. The first one you have two again which is either  1 or A. Then you have the next slot which is 3 because you have all of the available for the second one. Then you have two options left followed by one option for the last one. Then you have to account for the number of total arrangements which is 4-2 because you have two possible arrangements hence why it is 2 * 3 * 2 * 1.

	Anything hgher than 3 is basically the same as 4. Only the last 3 digits are going to be 3,2,1 consecutively. The rest of the slots of a possibility of 3 because it could be a combination of 0,1, or A.
	*/

	
	function validCount($digits) {
		//if it is only three digits
		if (!is_int($digits) || $digits < 3 || is_null($digits)) {
			//first digit is going to be 2 because you have only A and 1
			return 0;
		} elseif ($digits == 3) {
			$finalArray = createString($digits);
			//first digit is always 2
			$finalArray[0] = 2;
			$offset = $digits - 2;
			$count = 1;
			$finalArray[1] = 2;
			$finalArray[2] = 1;
			$count = $finalArray[0] * $finalArray[1] * $finalArray[2] * $offset;
		} else {
			$finalArray = createString($digits);
			//first digit is always 2
			$finalArray[0] = 2;
			$offset = $digits - 2;
			$count = 1;
			//first one is always 2, so starting the count at 1 is ok because we skip the first element and jump to the second.
			for($i = 1 ; $i < $digits ; $i++) {
				$finalArray[$i] = 3;
			}
			//now change the last 3 digits to 3 2 and 1 in order to figure out the combinations 
			//it is safe to assume that it's 3,2,1 because it is the number of possibilities that it must contain 1,0, and A in any order.

			//******* TEST to print *******
			// for ($k = 0 ; $k < count($finalArray) ; $k++) {
			// 	echo $finalArray[$k];
			// }

			//********************
			$finalArray[count($finalArray)-1] = 1;
			$finalArray[count($finalArray)-2] = 2;
			$finalArray[count($finalArray)-3] = 3;

			// for ($m = 0 ; $m < count($finalArray) ; $m++) {
			// 	echo $finalArray[$m];
			// }
			//now multiply everything
			for ($j = 0 ; $j < count($finalArray) ; $j++) {
				$count *= $finalArray[$j];
			}
			$count *= $offset;

		}
		return $count;
	}
	//create an array that is equal to the length of the digits that the user specifies

	//function makes an empty array that contains the spots needed for the position of each possible combination.
	function createString($digits) {
		if (!is_int($digits) || $digits < 3 || is_null($digits)) {
		return 0;
		} else {
			$array1 = array();
			for ($i = 0 ; $i < $digits ; $i++) {
				array_push($array1,0);
				//echo $array1[$i];
			}
		}
		return $array1;
	}
	echo "\t TEST CASES <br>";
	echo "For 3, I get " . validCount(3) . " arrangements<br>";
	echo "For 4, I get " . validCount(4) . " arrangements<br>";
	echo "For 5, I get " . validCount(5) . " arrangements<br>";
	echo "For 6, I get " . validCount(6) . " arrangements<br>";
	echo "For 7, I get " . validCount(7) . " arrangements<br>";
	echo "For 8, I get " . validCount(8) . " arrangements<br>";
	echo "For 9, I get " . validCount(9) . " arrangements<br>";
	echo "For 1, I get " . validCount(1) . " arrangements<br>";
	echo "For 2, I get " . validCount(2) . " arrangements<br>";
	echo "For -1, I get " . validCount(-1) . " arrangements<br>";
	echo "For -3, I get " . validCount(-3) . " arrangements<br>";
	echo "For A, I get " . validCount("A") . " arrangements<br>";
	print "For \"3\", I get " . validCount("3") . " arrangements<br>";
	print "For \"4\", I get " . validCount("4") . " arrangements<br>";
	echo "For 0, I get " . validCount(0) . " arrangements<br>";
	

	

?>