<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

echo "<h1>Welcome Home PHP</h1>";
print("<h1>Welcome Home PHP</h1>");

$_fullname = "Abdi Aziiz ";
echo "My name is $_fullname"; 
print("My name is $_fullname");

$my_str = "Welcome to PHP Republic ";
echo strlen($my_str);

define("Age", 123);
echo Age;

$Age = 20;

if ($Age = 18)
    echo "Adult";
else
    echo "Child";

$marks = 87;

switch ($marks) {

    case ($marks >= 90):
        echo "A+";
        break;

    case ($marks >= 80):
        echo "A";
        break;

    case ($marks >= 70):
        echo "B";
        break;

    default:
        echo "C";
        break;
}

$fuel = 2;
echo $fuel <= 1 ? "Low Tank" : "Full Tank";


//  WHILE LOOP

$count = 1;

while ($count <= 5) {
    echo $count . "<br>";
    $count++;
}


//  DO-WHILE LOOP 

$count = 1;

do {
    echo $count . "<br>";
    $count++;
} while ($count <= 5);


//  FOR LOOP

$count = 1;

for ($count = 1; $count <= 15; $count++) {
    echo $count . "<br>";
}


//  NESTED FOR LOOP

for ($row = 1; $row <= 2; $row++) {

    for ($col = 1; $col <= 3; $col++) {

        $result = $row * $col;

        echo "$row * $col = $result <br>";
    }
}

echo "<hr>";


for ($row = 1; $row <= 3; $row++) {

    for ($col = 1; $col <= 5; $col++) {

        $result = $row * $col;

        echo "Row is $row, Column is $col, Result is $result <br>";
    }
}


//  ARRAY

$info = array(
    "101",
    "Abdi Aziz Abdi Ali",
    20,
    "Dharkenley District",
    "Marriage"
);


//  FOREACH LOOP

foreach ($info as $value) {
    echo $value . "<br>";
}


//  LIST WITH LOOP

$students = array(
    array("101", "Abdi Aziz", 20),
    array("102", "Mohamed Ali", 21),
    array("103", "Ahmed Hassan", 22)
);

foreach ($students as list($id, $name, $age)) {

    echo "ID: $id, Name: $name, Age: $age <br>";
}


//  FRUITS ARRAY 

$fruits[] = "Apple";
$fruits[] = "Avocado";

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}


//  ASSOCIATIVE ARRAY   

$info = array(
    "id" => "101"
);

echo $info["id"];

?>

</body>
</html>
