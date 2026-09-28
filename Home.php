<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
$firstNumber  = 15;
$secondNumber = 42;
$thirdNumber  = 8;

$greatest = $firstNumber;
$smallest = $firstNumber;

if ($secondNumber > $greatest) {
    $greatest = $secondNumber;
}
if ($secondNumber < $smallest) {
    $smallest = $secondNumber;
}

if ($thirdNumber > $greatest) {
    $greatest = $thirdNumber;
}
if ($thirdNumber < $smallest) {
    $smallest = $thirdNumber;
}

echo "<h3>Task 1: Greatest and Smallest Number</h3>";
echo "Numbers: $firstNumber, $secondNumber, $thirdNumber <br>";
echo "Greatest: $greatest <br>";
echo "Smallest: $smallest <br><br>";


$numberToCheck = 15;

echo "<h3>Task 2: Divisibility Check</h3>";
echo "Number: $numberToCheck <br>";

$divisibleBy3 = ($numberToCheck % 3 == 0);
$divisibleBy5 = ($numberToCheck % 5 == 0);

if ($divisibleBy3 && $divisibleBy5) {
    echo "The number is divisible by both 3 and 5.<br><br>";
} elseif ($divisibleBy3) {
    echo "The number is divisible by 3.<br><br>";
} elseif ($divisibleBy5) {
    echo "The number is divisible by 5.<br><br>";
} else {
    echo "The number is not divisible by 3 or 5.<br><br>";
}


echo "<h3>Task 3: Odd and Even Series</h3>";

echo "Odd numbers from 2 to 20: ";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
echo "<br>";

echo "Even numbers from 35 to 7: ";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo "$i ";
    }
}
echo "<br><br>";


echo "<h3>Task 4: Numbers Divisible by 2 and 5 (50 to 2)</h3>";

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo "$i ";
    }
}
echo "<br><br>";


$originalNumber = 12345;
$remainingDigits = $originalNumber;
$reversedNumber = 0;

while ($remainingDigits > 0) {
    $lastDigit = $remainingDigits % 10;
    $reversedNumber = ($reversedNumber * 10) + $lastDigit;
    $remainingDigits = (int)($remainingDigits / 10);
}

echo "<h3>Task 5: Reverse a Number</h3>";
echo "Original Number: $originalNumber <br>";
echo "Reversed Number: $reversedNumber <br><br>";


$numberA = 8;
$numberB = 12;

if ($numberA > $numberB) {
    $lcm = $numberA;
} else {
    $lcm = $numberB;
}

while (!($lcm % $numberA == 0 && $lcm % $numberB == 0)) {
    $lcm++;
}

echo "<h3>Task 6: Lowest Common Multiple (LCM)</h3>";
echo "LCM of $numberA and $numberB is: $lcm <br><br>";


$numberX = 18;
$numberY = 24;
$hcf = 1;

if ($numberX < $numberY) {
    $smallerNumber = $numberX;
} else {
    $smallerNumber = $numberY;
}

for ($i = 1; $i <= $smallerNumber; $i++) {
    if ($numberX % $i == 0 && $numberY % $i == 0) {
        $hcf = $i;
    }
}

echo "<h3>Task 7: Highest Common Factor (HCF)</h3>";
echo "HCF of $numberX and $numberY is: $hcf <br><br>";


echo "<h3>Task 8: Multiplication Table</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; text-align: center;'>";

for ($row = 1; $row <= 12; $row++) {
    echo "<tr>";
    for ($column = 1; $column <= 12; $column++) {
        echo "<td>" . ($row * $column) . "</td>";
    }
    echo "</tr>";
}

echo "</table><br>";


function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}


$primeCandidate = 17;

echo "<h3>Task 9: Check Prime Number</h3>";
if (isPrime($primeCandidate)) {
    echo "$primeCandidate is a Prime Number.<br><br>";
} else {
    echo "$primeCandidate is NOT a Prime Number.<br><br>";
}


echo "<h3>Task 10: Prime Numbers from 10 to 50</h3>";

for ($number = 10; $number <= 50; $number++) {
    if (isPrime($number)) {
        echo "$number ";
    }
}
echo "<br><br>";

?>
  
    
    
</body>
</html>