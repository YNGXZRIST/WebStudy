<?php

//FirstTask
echo nl2br(PHP_EOL . " FirstTask: " . PHP_EOL);
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:

$order = $very_bad_unclear_name;
$order = $order . ' ,2 strips ';
$very_bad_unclear_name = $order;
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

//SecondTask
echo nl2br(PHP_EOL . "SecondTask: " . PHP_EOL);

$var = 10;
echo $var . "\n";
$secVar = 11;
echo nl2br(PHP_EOL . $secVar);
$doubleVar = 1.23;
echo nl2br(PHP_EOL . $doubleVar);
$twelveVar = 3 + 9;
echo nl2br(PHP_EOL . $twelveVar);

$last_month = '1187,23';
$this_month = '1089,98';
$formatLast = str_replace(',', '.', $last_month);
$formatLast = floatval($formatLast);
$formatThis = str_replace(',', '.', $this_month);
$formatThis = floatval($formatThis);
echo nl2br(PHP_EOL . ($formatLast - $formatThis));
//ThirdTask
echo nl2br(PHP_EOL . "ThirdTask: " . PHP_EOL);
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo nl2br($days_per_language);
echo nl2br(PHP_EOL . "FourthTask: " . PHP_EOL);
echo 8 ** 2;
echo nl2br(PHP_EOL . "FifthTask: " . PHP_EOL);
$my_num = 12;
$answer = $my_num;
$answer += 2;
echo $answer;
$answer *= 2;
echo nl2br(PHP_EOL . $answer);
$answer -= 2;
echo nl2br(PHP_EOL . $answer);
$answer /= 2;
echo nl2br(PHP_EOL . $answer);
$answer -= $my_num;
echo nl2br(PHP_EOL . $answer);
echo nl2br(PHP_EOL . "SixthTask: " . PHP_EOL);
$a = 10;
$b = 3;
$c = $a % $b;
$a = 13;
$b = 4;

if ($a % $b === 0) {
    echo 'Делится';
} else {
    $diff = $a % $b;
    echo 'Делится с остатком ' . $diff;
}
echo nl2br(PHP_EOL . "SeventhTask: " . PHP_EOL);
$st = pow(2, 10);
echo $st;
echo nl2br(PHP_EOL . sqrt(245));
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $item) {
    $sum += $item;
}
echo nl2br(PHP_EOL . sqrt($sum));
echo nl2br(PHP_EOL . "EighthTask: " . PHP_EOL);
echo round(sqrt(379), 2);
echo nl2br(PHP_EOL . round(sqrt(379), 3));
$newArr = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];
echo '<pre>';
print_r($newArr);
echo '</pre>';
echo nl2br(PHP_EOL . "NinthTask: " . PHP_EOL);
$array = [4, -2, 5, 19, -130, 0, 10];
echo min($array);
echo nl2br(PHP_EOL . max($array));
echo nl2br(PHP_EOL . "TenthTask: " . PHP_EOL);
echo rand(1, 100);
$randArr = [];
for ($i = 0; $i < 10; $i++) {
    $randArr[$i] = rand();
}
echo '<pre>';
print_r($randArr);
echo '</pre>';
echo nl2br(PHP_EOL . "EleventhTask: " . PHP_EOL);
$a = -321;
$b = 123;
echo abs($a - $b);
$absArr = [1, 2, -1, -2, 3, -3];
for ($i = 0; $i < count($absArr); $i++) {
    if ($absArr[$i] < 0)
        $absArr[$i] = -1 * $absArr[$i];
}
echo '<pre>';
print_r($absArr);
echo '</pre>';
echo nl2br(PHP_EOL . "ThirteenthTask: " . PHP_EOL);
$num = 30;
$delArr = [];
for ($i = 1; $i <= ($num); $i++) {
    if ($num % $i === 0)
        $delArr[] = $i;
}

echo '<pre>';
print_r($delArr);
echo '</pre>';
$sumArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count = 0;
$sum = 0;
$i = 0;
while ($sum < 10) {
    $sum += $sumArr[$i];
    $count++;
    $i++;
}
echo nl2br(PHP_EOL . $count);

echo nl2br(PHP_EOL . "FourteenthTask: " . PHP_EOL);
function printStringReturnNumber(string $i): int
{
    var_dump($i);
    return (int)$i;
}

$newNumb = printStringReturnNumber('3');
var_dump($newNumb);
echo nl2br(PHP_EOL . "FifteenthTask: " . PHP_EOL);
function increaseEnthusiasm(string $str): string
{
    return $str . '!';
}

echo increaseEnthusiasm('Строка');
function repeatThreeTimes(string $str): string
{
    return $str . $str . $str;
}

echo nl2br(PHP_EOL . repeatThreeTimes('Я программист'));
echo nl2br(PHP_EOL . increaseEnthusiasm(repeatThreeTimes('Да')));
function cut(string $str, int $toCut, int $param = 10): string
{
    return substr($str, 0, $toCut);
}

echo nl2br(PHP_EOL . cut('Hello World', 5) . PHP_EOL);
$funcArr = [1, 2, 3, 4, 5, 6];
$i = 0;
function recArr(array $arr, int $i): void
{
    if ($i < count($arr)) {
        echo $arr[$i] . ' ';
        $i++;
        recArr($arr, $i);
    }

}

recArr($funcArr, $i);

$number = 123;
$sum = 0;
//Тут ошибка в задании, как мне кажется,либо я не понял что-то. Сумма у нас не может уменьшится по условию,но
// в задании мы складываем,получается бесконечная рекурсия.
function getSumOfNumber(int $number, int $sum): int
{
    $ret = [];
    for ($i = 0; $number > 9; $i++) {
        $ret[$i] = $number % 10;
        $number = $number / 10;
        $sum = $sum + $ret[$i];
    }
    if ($sum > 9) {
        getSumOfNumber($number, $sum);
    } else {
        return $sum;
    }
}

$ans = getSumOfNumber($number, $sum);
echo nl2br(PHP_EOL . $ans . PHP_EOL);
echo nl2br(PHP_EOL . "SixteenthTask: " . PHP_EOL);
function repeatSymbol(string $symbol, int $count): array
{
    $arr = [];
    for ($i = 1; $i <= $count; $i++) {
        $arr[$i] = str_repeat($symbol, $i);
    }
    return $arr;
}

$ansArr = repeatSymbol('x', 10);
echo '<pre>';
print_r($ansArr);
echo '</pre>';
function arrayFill(string $symbol, int $count): array
{
    $arr = [];
    for ($i = 1; $i <= $count; $i++) {
        $arr[$i] = $symbol;
    }
    return $arr;
}

$ansArr = arrayFill('x', 5);
echo '<pre>';
print_r($ansArr);
echo '</pre>';
$arr = [[]];
$arr = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($arr as $item) {
    foreach ($item as $value) {
        $sum += $value;
    }
}
echo $sum;
$arrS = [[]];
$c = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arrS[$i][$j] = $c;
        $c++;
    }
}
echo '<pre>';
print_r($arrS);
echo '</pre>';
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo nl2br(PHP_EOL . $result . PHP_EOL);
$user = ['name' => 'Vasily', 'surname' => 'Kulagin', 'patronymic' => 'Vladimirovich'];

echo nl2br(PHP_EOL . $user['name'] . ' ' . $user['surname'] . ' ' . $user['patronymic'] . PHP_EOL);

$date = ['year' => 2022, 'month' => 'September', 'day' => 18];
echo nl2br(PHP_EOL . $date['year'] . '-' . $date['month'] . '-' . $date['day'] . PHP_EOL);
$arr = ['a', 'b', 'c', 'd', 'e'];
echo nl2br(PHP_EOL . count($arr) . PHP_EOL);
echo nl2br(PHP_EOL . $arr[count($arr) - 1] . ' ' . $arr[count($arr) - 2] . PHP_EOL);

echo nl2br(PHP_EOL . "SeventeenthTask: " . PHP_EOL);
function getSumBoolRes(int $num1, int $num2): bool
{
    if ($num1 + $num2 > 10) {
        return true;
    } else {
        return false;
    }
}

$flag = getSumBoolRes(7, 0);
var_dump($flag);
function getEqualsBoolRes(int $num1, int $num2): bool
{
    if ($num1 === $num2) {
        return true;
    } else {
        return false;
    }
}

$flag = getEqualsBoolRes(0, 0);
var_dump($flag);
$test = 12;
echo $test == 0 ? 'Верно' : 'Не верно';
$age = 14;
if ($age < 10 || $age > 99) {
    echo nl2br(PHP_EOL . 'Возраст меньше 10 или больше 99');
} else {
    $ret = [];
    $sum = 0;
    for ($i = 0; $age > 9; $i++) {
        $ret[$i] = $age % 10;
        $age = $age / 10;
        $sum = $sum + $ret[$i];
    }
    if ($sum <= 9) {
        echo nl2br(PHP_EOL . 'Сумма цифр однозначна');
    } else {
        echo nl2br(PHP_EOL . 'Сумма цифр двузначна');
    }
}
$arr = [1, 2, 3];
$sumArr = 0;
if (count($arr) === 3) {
    for ($i = 0; $i < count($arr); $i++) {
        $sumArr += $arr[$i];
    }
    echo nl2br(PHP_EOL . $sumArr);
}

echo nl2br(PHP_EOL . "EighteenthTask: " . PHP_EOL);
for ($i = 1; $i <= 20; $i++) {
    echo nl2br(PHP_EOL . str_repeat('x', $i));
}
echo nl2br(PHP_EOL . "NineteenthTask: " . PHP_EOL);
$arr = [1, 2, 3, 9];

function sumOfArr(array $arr, int $i = 0, $sum = 0): int
{
    $sum = $sum + $arr[$i];

    $i++;
    if ($i === count($arr)) {
        return $sum;
    } else {
        return sumOfArr($arr, $i, $sum);
    }
}

$sum = (float)sumOfArr($arr) / count($arr);
echo $sum;
function sumOfNum(int $i = 1, $sum = 0): int
{

    if ($i === 101) {
        return $sum;
    } else {
        $sum = $sum + $i;
        $i++;
        return sumOfNum($i, $sum);
    }


}

echo nl2br(PHP_EOL . sumOfNum());
function getNewArr(array $arr, int $i = 0, array &$resArr = []): array
{
    $resArr[$i] = sqrt($arr[$i]);
    $i++;
    if ($i < count($arr)) {
        return getNewArr($arr, $i, $resArr);
    } else {
        return $resArr;
    }
}

echo '<pre>';
print_r(getNewArr([10, 24, 39, 45, 49]));
echo '</pre>';

function getNewAssociativeArr(int $i = 97, int $j = 0, array &$resArr = [[]]): array
{
    if ($i <= 122) {
        $resArr[chr($i)] = [$j+1];
        $i++;
        $j++;
        return getNewAssociativeArr($i, $j, $resArr);
    } else {
        return $resArr;
    }
}
echo '<pre>';
print_r(getNewAssociativeArr());
echo '</pre>';
$str='1234567890';
function getSumOfStrPair(string $str,int $i = 0,int $sum=0): int{
        if ($i<=strlen($str)-1){
            $numb=(int)($str[$i] . $str[$i + 1]);
            $i+=2;
            $sum += $numb;
            return getSumOfStrPair($str,$i,$sum);
        }else{
            return $sum;
        }
}
echo nl2br(PHP_EOL .getSumOfStrPair($str));