# PHP Basic Practice

This is my PHP practice code. I am learning the basic concepts of PHP and I wrote these examples to practice what I learned.

## What I Learned

In this code, I practiced:

* `echo`
* `print`
* Variables
* Strings
* `strlen()`
* Constants
* `if` and `else`
* `switch`
* Ternary operator
* `while` loop
* `do-while` loop
* `for` loop
* Nested loops
* Arrays
* `foreach`
* `list()`
* Associative arrays

## 1. Echo and Print

I used `echo` and `print` to display text on the screen.

```php
echo "<h1>Welcome Home PHP</h1>";
print("<h1>Welcome Home PHP</h1>");
```

## 2. Variables

I learned that PHP variables start with `$`.

```php
$_fullname = "Abdi Aziiz";

echo "My name is $_fullname";
```

Here I stored my name inside a variable and then displayed it.

## 3. String Length

I used `strlen()` to count the characters in a string.

```php
$my_str = "Welcome to PHP Republic";

echo strlen($my_str);
```

## 4. Constant

I used `define()` to create a constant.

```php
define("Age", 123);

echo Age;
```

A constant does not use `$`.

## 5. If and Else

I used `if` and `else` to make a simple decision.

```php
$Age = 20;

if ($Age >= 18)
    echo "Adult";
else
    echo "Child";
```

If the age is 18 or more, it displays `Adult`. Otherwise, it displays `Child`.

## 6. Switch

I practiced using `switch` with marks.

```php
$marks = 87;
```

I used different cases to check the student's marks.

## 7. Ternary Operator

I learned that the ternary operator is a short way to write `if` and `else`.

```php
$fuel = 2;

echo $fuel <= 1 ? "Low Tank" : "Full Tank";
```

If the fuel is less than or equal to 1, it displays `Low Tank`. Otherwise, it displays `Full Tank`.

## 8. While Loop

I used a `while` loop to print numbers from 1 to 5.

```php
$count = 1;

while ($count <= 5) {
    echo $count . "<br>";
    $count++;
}
```

## 9. Do-While Loop

I also practiced the `do-while` loop.

```php
$count = 1;

do {
    echo $count . "<br>";
    $count++;
} while ($count <= 5);
```

The `do-while` loop runs the code first and checks the condition after.

## 10. For Loop

I used a `for` loop to print numbers from 1 to 15.

```php
for ($count = 1; $count <= 15; $count++) {
    echo $count . "<br>";
}
```

## 11. Nested For Loop

I practiced putting one `for` loop inside another `for` loop.

```php
for ($row = 1; $row <= 2; $row++) {

    for ($col = 1; $col <= 3; $col++) {

        $result = $row * $col;

        echo "$row * $col = $result <br>";
    }
}
```

This helped me understand rows and columns.

## 12. Array

I created an array to store different information.

```php
$info = array(
    "101",
    "Abdi Aziz Abdi Ali",
    20,
    "Dharkenley District",
    "Marriage"
);
```

An array can store more than one value.

## 13. Foreach Loop

I used `foreach` to display all the values in the array.

```php
foreach ($info as $value) {
    echo $value . "<br>";
}
```

## 14. Students Array

I created an array containing information about students.

```php
$students = array(
    array("101", "Abdi Aziz", 20),
    array("102", "Mohamed Ali", 21),
    array("103", "Ahmed Hassan", 22)
);
```

Then I used `foreach` and `list()` to display the student information.

## 15. Fruits Array

I practiced adding values to an array.

```php
$fruits[] = "Apple";
$fruits[] = "Avocado";
```

Then I used `foreach` to display the fruits.

## 16. Associative Array

I also learned about associative arrays.

```php
$info = array(
    "id" => "101"
);

echo $info["id"];
```

In an associative array, we use a key such as `id` to access the value.

## What I Learned From This Practice

From this exercise, I learned the basic syntax of PHP. I also practiced variables, conditions, loops, and arrays.

I am still learning PHP, so this is a basic practice project.

## Author

**Abdi Aziz**