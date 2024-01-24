<?php
//declare(strict_types=1);

//function calculate(int|float $number1, int|float $number2): int|float|bool
//{
//    if ($number1 <= 0 || $number2 <= 0) {
//       throw new Exception('test exception');
//    }
//
//    $result = $number1 * $number2;
//
//    return $result;
//}
//
//try {
//    $result = calculate(-5, 5);
//} catch (Exception $exception) {
//    //todo
//    echo $exception->getMessage();
//}

//function randArray(int $length, int $min = 1, int $max = 50): array
//{
//    $array = []; // array();
//    for ($i = 0; $i < $length; $i++) {
//        $array[$i] = rand($min, $max);
//    }
//
//    return $array;
//}
//
//$randArray = randArray(5);

//$sum = 0;
//foreach ($randArray as $value) {
//    $sum += $value;
//}
//
//$sum2 = array_sum($randArray);

//echo $sum . PHP_EOL;
//echo $sum2 . PHP_EOL;
//
//$reverseArray = [];
//$lastKey = array_key_last($randArray);
//for ($i = $lastKey; $i >= 0; $i--) {
//    $reverseArray[] = $randArray[$i];
//}
//
//$count = 0;
////var_dump($reverseArray);
//
//$keys = ['sky', 'grass', 'sun'];
//$values = ['blue', 'green', 'yellow'];
//
////$length = count($keys);
//$newArray = array_combine($keys, $values);
//
//var_dump(array_keys($newArray));
//var_dump(array_values($newArray));
//var_dump(array_flip($newArray));


//function calculate(int|float $number1, int|float $number2): array
//{
//    $product = $number1 * $number2;
//    $sum = $number1 + $number2;
//    $minus = $number1 - $number2;
//
//    return [$product, $sum, $minus];
//}

//$calculateResult = calculate(10, 7);
//
//$product = $calculateResult[0];
//$sum = $calculateResult[1];
//$minus = $calculateResult[2];

//list($product, $sum, $minus) = calculate(10, 7);
//[$product, $sum, $minus] = calculate(10, 7);
//
//echo $product . PHP_EOL;
//echo $sum . PHP_EOL;
//echo $minus . PHP_EOL;
//$names = "Jim, Kate, Mike";
//
//$arrayNames = explode(', ', $names);
//$stringNames = implode('! ', $arrayNames);
//var_dump($arrayNames);

//$user = ['name' => 'Kate', 'age' => 26, 'location' => 'Lviv'];
//
//extract($user);
//
//echo(" $name $age  $location \n");

//$name = 'Kate';
//$age = 26;
//$location = 'Lviv';
//
//$array = compact('name', 'age', 'location');

//var_dump(randArray(10));


//$array1 = ['test' => 1, 2, 3, 4];
//$array2 = ['test' => 5, 6, 7, 8];
//
//$resultArray = array_merge($array1, $array2);
//
//var_dump($resultArray);

//$array = array_fill(0, 15, '!');

//var_dump($array);


//function myMap(array $array, callable $function): array
//{
//    foreach ($array as $key => &$value) {
//        $value = $function($value);
//    }
//
//    return $array;
//}
//$array = [1 => 5, 2 => 1, 4 => 33];
//
//asort($array);
//var_dump($array);

//var_dump(myMap($array, fn ($number) => $number ** 2));
//
//
////var_dump(array_map(fn ($number) => $number ** 2, $array));
//
//
//array_walk($array, function (&$number) {
//    $number = $number ** 2;
//});
//
//var_dump($array);

//const TEST = [];
//const test = 'TEST2';


//function test()
//{
//    define('TEST', 'TEST');
//}

//if (!defined('TEST')) {
////    const TEST2 = 'TEST';
//$test = 'TEST';
//define($test, 'TEST');
//const $test = [];
//}
//echo TEST;