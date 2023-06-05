<?php
// Câu 1: Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function evenNumber($number)
{
    if ($number % 2 == 0) {  
        return true;
    } else {
        return false;
    }
}
$number = 2; 
if (evenNumber($number)) {
    echo $number . " là số chẵn.";
} else {
    echo $number . " không là số chẵn.";
}
echo "<br>";

// Câu 2: Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function calculateSum($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 10; 
$sum = calculateSum($n);
echo "Tổng của các số từ 1 đến " . $n . " là: " . $sum;
echo "<br>";

// Câu 3: Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function printMultiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương $i: <br>";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
           
            echo "$i x $j = $result <br>";
        }
        echo "<br>";
    }
}
printMultiplicationTable(); 
echo '<br>';

// Câu 4: Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function containsWord($string, $word) {
    $words = explode(' ', $string); 
    foreach ($words as $w) {   
      if (strtolower($w) === strtolower($word)) { 
        return true;
      }
    }
    return false;
  }
  $string = "Xin chào";
  $word = "chào";
  if (containsWord($string, $word)) {
    echo "Chuỗi chứa từ '$word'";
  } else {
    echo "Chuỗi không chứa từ '$word'";
  }
  echo '<br>';

// Câu 5: Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMinMax($array)
{
    $min = $array[0];  
    $max = $array[0]; 

    foreach ($array as $value) {
        if ($value < $min) {  
            $min = $value;
        }
        if ($value > $max) { 
            $max = $value;
        }
    }

    return array('min' => $min, 'max' => $max); 
}
$array = array(3, 7, 2, 9, 5); 
$result = findMinMax($array); 

echo "Giá trị nhỏ nhất: " . $result['min'] . "\n";
echo "Giá trị lớn nhất: " . $result['max'];
echo '<br>';

// Câu 6: Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sortArrayAscending($array)
{
    sort($array);  
    return $array;
}
$array = array(5, 2, 8, 1, 9);
echo "Mảng sau khi sắp xếp theo thứ tự tăng dần:\n";
foreach (sortArrayAscending($array) as $value) {
    echo $value . " ";
}   
echo '<br>';
// Câu 7: Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function factorial($n) {
    $fac = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fac *= $i;
    }
    return $fac;
}
$n=5;
echo "Giai thừa của $n là: " . factorial($n);
echo '<br>';

// Câu 8:  Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function countPrime($start, $end) {
    $prime = array();
    for ($i = $start; $i <= $end; $i++) {
        if (checkPrime($i)) {
            array_push($prime, $i);
        }
    }
    return $prime;
}
function checkPrime($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$start = 1;
$end = 100;
$prime = countPrime($start, $end);
echo "Các số nguyên tố trong khoảng từ $start đến $end là: " . implode(", ", $prime);
echo '<br>';

// Câu 9: Viết chương trình PHP để tính tổng của các số trong một mảng.
function sumNumber($array) {
    $s = 0;
    foreach ($array as $value) {
        $s += $value;
    }
    return $s;
}
$array = array(1, 2, 3, 4, 5);
echo "Tổng của các số trong mảng là: " . sum($array);
// Câu 10: Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function printFibonacci($start, $end) {
    if ($start < 0 && $end < 0) {
        echo "Khoảng giá trị không phù hợp!";
        return;
    }
    if ($start > $end) {
        echo "Khoảng không hợp lệ!";
        return;
    }
    $fib0 = 0;
    $fib1 = 1;
    while ($fib0 <= $end) {
        if ($fib0 >= $start || ($start < 0 && $fib1 >= -$start)) {
            echo $fib0 . ", ";
        }
        $fib2 = $fib0 + $fib1;
        $fib0 = $fib1;
        $fib1 = $fib2;
    }
}

$start = -5.2;
$end = 10;
echo "Các số Fibonacci trong khoảng $start đến $end là: ";
printFibonacci($start, $end);
echo '<br>';

// Câu 11: Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function isArmstrong($num) {
    $digits = str_split($num);
    $sum = 0;
    $num_digits = count($digits);
    foreach ($digits as $digit) {
        $sum += pow($digit, $num_digits);
    }
    return ($sum == $num);
}
$num=154; //153
if (isArmstrong($num)) {
    echo "$num là số Armstrong";
} else {
    echo "$num không phải là số Armstrong";
}
echo '<br>';

// Câu 12: Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($arr, $element, $position) {
    $new_array = array(); 
    $length = count($arr); 
    for ($i = 0; $i < $length; $i++) { 
        if ($i == $position) {
            array_push($new_array, $element); 
        }
        array_push($new_array, $arr[$i]); 
    }
    if ($position >= $length) { 
        array_push($new_array, $element); 
    }
    return $new_array; 
}
$array = array(1, 2, 3, 4, 5);
$new_array = insertElement($array, 6, 2);
echo "Mảng mới sau khi chèn phần tử là: ";
print_r($new_array);
echo '<br>';

// Câu 13: Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($arr) {
    $result = array(); 
    foreach ($arr as $element) { 
        if (!in_array($element, $result)) { 
            array_push($result, $element); 
        }
    }
    return $result; 
}
$array = array(1, 2, 3, 2, 4, 3, 5);
$new_array = removeDuplicates($array);
echo "Mảng mới sau khi loại bỏ các phần tử trùng lặp là: ";
print_r($new_array);
echo '<br>';

// Câu 14: Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findPosition($arr, $element) {
    $position = 1; 
    foreach ($arr as $key => $value) {
        if ($value == $element) { 
            $position = $key; 
            break; 
        }
    }
    return $position; 
}
$array = array(1, 2, 3, 4, 5);
$element = 3;
$position = findPosition($array, $element);
if ($position != -1) {
    echo "Phần tử " . $element . " có vị trí là " . $position;
} else {
    echo "Không tìm thấy phần tử " . $element . " trong mảng";
}
echo '<br>';

// Câu 15: Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($str) {
    $length = strlen($str); 
    $reverse_str = ""; 
    for ($i = $length - 1; $i >= 0; $i--) { 
        $reverse_str .= $str[$i]; 
    }
    return $reverse_str; 
}
$string = "Hello world!";
$reverse_string = reverseString($string);
echo "Chuỗi đảo ngược là: " . $reverse_string;
echo '<br>';

// Câu 16: Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElement($arr) {
    $count = 0; 
    foreach ($arr as $element) { 
        $count++; 
    }
    return $count; 
}
$array = array(1, 2, 3, 4, 5);
$count = countElement($array);
echo "Số lượng phần tử trong mảng là: " . $count;
echo '<br>';

// Câu 17: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function Palindrome($str){
    $reverseString = strrev($str); 
    if ($str === $reverseString){
        return true; 
    }
    else{
        return false;
    }
}

$string = "level"; 
if (Palindrome($string)){ 
    echo $string . " là chuỗi Palindrome."; 
}
else{
    echo $string . " không phải chuỗi Palindrome."; 
}
echo '<br>';

// Câu 18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($arr, $element) {
    $count = 0; 
    foreach ($arr as $value) { 
        if ($value == $element) { 
            $count++; 
        }
    }
    return $count; 
}
$arr = array(1, 2, 3, 2, 4, 2, 5, 2);
echo "Mảng ban đầu: ";
print_r($arr);
$element = 2;
$count = countOccurrences($arr, $element);
echo "Số lần xuất hiện của phần tử " . $element . " trong mảng là: " . $count;
echo '<br>';

// Câu 19: Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortDescending($arr) {
    $length = count($arr); 
    for ($i = 0; $i < $length; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($arr[$i] < $arr[$j]) { 
                $temp = $arr[$i]; 
                $arr[$i] = $arr[$j]; 
                $arr[$j] = $temp; 
            }
        }
    }
    return $arr; 
}
$arr = array(3, 5, 2, 8, 1, 4);
echo "Mảng ban đầu: ";
print_r($arr);
$arr = sortDescending($arr);
echo "Mảng đã được sắp xếp theo thứ tự giảm dần: ";
print_r($arr);
echo '<br>';

// Câu 20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addElementToArray($arr, $element, $position) {
    $newArr = []; 
    if ($position == 'start') { 
        array_unshift($newArr, $element); 
    } elseif ($position == 'end') { 
        foreach($arr as $item) { 
            array_push($newArr, $item); 
        }
        array_push($newArr, $element);
    }
    return $newArr; 
}

$arr = [1, 2, 3]; 
$element = 4; 
$position = 'end'; 
$newArr = addElementToArray($arr, $element, $position); 
print_r($newArr); 
echo '<br>';

// Câu 21: Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest($arr) {
    $largest = $arr[0]; 
    $secondLargest = null; 
    for ($i = 1; $i < count($arr); $i++) { 
        if ($arr[$i] > $largest) { 
            $secondLargest = $largest;
            $largest = $arr[$i];
        } elseif ($arr[$i] != $largest && ($secondLargest == null || $arr[$i] > $secondLargest)) { 
        }
    }
    return $secondLargest; 
}
$arr = array(4,8,2,0,9);
$secondLargest = findSecondLargest($arr);
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
echo '<br>';

// Câu 22: Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function gcd($a, $b) { 
    while ($b != 0) { 
        $temp = $a % $b; 
        $a = $b; 
        $b = $temp; 
    }
    return $a; 
}

function lcm($a, $b) { 
    $gcd = gcd($a, $b); 
    $lcm = ($a * $b) / $gcd; 
    return $lcm; 
}
$a = 9;
$b = 12;
$gcd = gcd($a, $b);
echo "Ước số chung lớn nhất của " . $a . " và " . $b . " là: " . $gcd . "<br>";
$lcm = lcm($a, $b);
echo "Bội số chung nhỏ nhất của " . $a . " và " . $b . " là: " . $lcm;
echo '<br>';

// Câu 23: Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function PerfectNumber($number) {
    $sum = 0; 
    for ($i = 1; $i <= $number/2; $i++) { 
        if ($number % $i == 0) { 
            $sum += $i;
        }
    }
    if ($sum == $number) { 
        return true;
    }
        else {
            return false;
        }
}
$number = 8;
if (isPerfectNumber($number)) {
  echo $number . ' là số hoàn hảo';
} else {
  echo $number . ' không phải là số hoàn hảo';
}
echo '<br>';
// Câu 24: Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOdd($arr) { 
    $largestOdd = null; 
    foreach ($arr as $num) { 
        if ($num % 2 != 0 && ($largestOdd == null || $num > $largestOdd)) { 
            $largestOdd = $num; 
        }
    }
    return $largestOdd; 
}
$arr = array(3,5,7,2,8,4);
$largestOddNumber = findLargestOdd($arr);
echo "Số lẻ lớn nhất trong mảng là: " . $largestOddNumber;
echo '<br>';

// Câu 25: Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function Prime($number) {
    if ($number <= 1)
        return false;

    for ($i = 2; $i <= sqrt($number); $i++) { 
        if ($number % $i == 0) 
            return false;
    }

    return true; 
}
$number = 23;

if (isPrime($number))
    echo "$number là số nguyên tố";
else
    echo "$number không phải là số nguyên tố";
    echo '<br>';

// Câu 26: Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositive($arr) { 
    $largestPositive = null; 
    foreach ($arr as $num) { 
        if ($num > 0 && ($largestPositive == null || $num > $largestPositive)) { 
            $largestPositive = $num;
        }
    }
    return $largestPositive; 
}
$arr = array(-5,6,2,-4,9);
$largestPositive = findLargestPositive($arr);
if($largestPositiveNumber == -1) {
    echo "Không tìm thấy số dương nào trong mảng";
} else {
    echo "Số dương lớn nhất trong mảng là: " . $largestPositive;
} 
echo '<br>';

// Câu 27: Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegative($arr) { 
    $largestNegative = null; 
    foreach ($arr as $num) { 
        if ($num < 0 && ($largestNegative == null || $num > $largestNegative)) { 
            $largestNegative = $num; 
        }
    }
    return $largestNegative; 
}
echo '<br>';

// Câu 28: Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOddNumbers($n) {
	$sum = 0;
	for ($i = 1; $i <= $n; $i++) {
		if ($i % 2 != 0) {
			$sum += $i;
		}
	}
	return $sum;
}
$n = 10;
$sum = sumOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;
echo '<br>';

// Câu 29: Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquares($start, $end) { 
    $result = array(); 
    for ($i = $start; $i <= $end; $i++) {
        $sqrt = sqrt($i); 
        if ($sqrt == floor($sqrt)) { 
            array_push($result, $i); 
        }
    }
    return $result; 
}
$start = 1;
$end = 100;
$squares = findPerfectSquares($start, $end); 
echo "Các số chính phương từ {$start} đến {$end} là: ";
foreach ($squares as $square) { 
    echo $square . " "; 
}
echo '<br>';

// Câu 30: Câu Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function checkSubstring($parentString, $subString) { 
    $parentLength = strlen($parentString); 
    $subLength = strlen($subString); 
    for ($i = 0; $i <= $parentLength - $subLength; $i++) { 
        $j = 0; 
        while ($j < $subLength && $parentString[$i + $j] == $subString[$j]) { 
            $j++; 
        }
        if ($j == $subLength) { 
            return true; 
        }
    }
    return false; 
}
$parentString = "Tôi là một lập trình viên";
$subString = "lập trình";
if (checkSubstring($parentString, $subString)) { 
    echo "Chuỗi '{$subString}' là chuỗi con của chuỗi '{$parentString}'";
} else {
    echo "Chuỗi '{$subString}' không phải là chuỗi con của chuỗi '{$parentString}'";
}
?>