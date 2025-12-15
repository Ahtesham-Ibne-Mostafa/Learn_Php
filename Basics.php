<?php
/**********************************************************
 * PHP START TAG
 * This tells the server: "Execute PHP code here"
 **********************************************************/

echo "Hello PHP!";
/*
OUTPUT:
Hello PHP
*/


/**********************************************************
 * VARIABLES
 **********************************************************/

// PHP variables start with $
$name = "Ahtesham";
$age = 24;

echo $name;
/*
OUTPUT:
Ahtesham
*/

echo $age;
/*
OUTPUT:
24
*/


/**********************************************************
 * STRING INTERPOLATION
 **********************************************************/

echo "My name is $name and age is $age";
/*
OUTPUT:
My name is Ahtesham and age is 24
*/


/**********************************************************
 * DATA TYPES
 **********************************************************/

$x = 10;        // Integer
$y = 3.5;       // Float
$z = true;      // Boolean
$n = null;      // Null

var_dump($x);
/*
OUTPUT:
int(10)
*/

var_dump($y);
/*
OUTPUT:
float(3.5)
*/


/**********************************************************
 * ARRAYS (LIKE PYTHON LIST)
 **********************************************************/

$numbers = [10, 20, 30];

echo $numbers[0];
/*
OUTPUT:
10
*/


/**********************************************************
 * ASSOCIATIVE ARRAYS (LIKE PYTHON DICT)
 **********************************************************/

$user = [
    "name" => "John",
    "email" => "john@gmail.com"
];

echo $user["email"];
/*
OUTPUT:
john@gmail.com
*/


/**********************************************************
 * CONDITIONAL STATEMENTS
 **********************************************************/

$marks = 85;

if ($marks >= 80) {
    echo "A+";
} elseif ($marks >= 60) {
    echo "B";
} else {
    echo "Fail";
}
/*
OUTPUT:
A+
*/


/**********************************************************
 * LOOPS
 **********************************************************/

// FOR LOOP
for ($i = 1; $i <= 3; $i++) {
    echo $i;
}
/*
OUTPUT:
123
*/


// WHILE LOOP
$j = 1;
while ($j <= 3) {
    echo $j;
    $j++;
}
/*
OUTPUT:
123
*/


/**********************************************************
 * FUNCTIONS
 **********************************************************/

function add($a, $b) {
    return $a + $b;
}

echo add(5, 7);
/*
OUTPUT:
12
*/


/**********************************************************
 * STRING FUNCTIONS
 **********************************************************/

$text = "hello world";

echo strlen($text);
/*
OUTPUT:
11
*/

echo strtoupper($text);
/*
OUTPUT:
HELLO WORLD
*/


/**********************************************************
 * SUPERGLOBALS (VERY IMPORTANT)
 **********************************************************/

// These variables already exist in PHP
$_POST["email"] = "test@gmail.com";

echo $_POST["email"];
/*
OUTPUT:
test@gmail.com
*/


/**********************************************************
 * SESSION (LOGIN SYSTEM BASIC)
 **********************************************************/

session_start(); // Must be called first

$_SESSION["user"] = "patient";

echo $_SESSION["user"];
/*
OUTPUT:
patient
*/


/**********************************************************
 * FILE HANDLING
 **********************************************************/

$file = fopen("test.txt", "w");
fwrite($file, "Hello File");
fclose($file);
/*
OUTPUT:
Creates test.txt with content:
Hello File
*/


/**********************************************************
 * DATABASE (PDO – SAFE WAY)
 **********************************************************/

try {
    $pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");

    $stmt = $pdo->prepare("SELECT 'DB Connected' as msg");
    $stmt->execute();

    $result = $stmt->fetch();

    echo $result["msg"];
}
catch (PDOException $e) {
    echo "Error";
}
/*
OUTPUT:
DB Connected
*/


/**********************************************************
 * OBJECT ORIENTED PHP
 **********************************************************/

class Doctor {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }
}

$doc = new Doctor("Dr. Ahsan");
echo $doc->getName();
/*
OUTPUT:
Dr. Ahsan
*/


/**********************************************************
 * MINI HEALTHCARE EXAMPLE
 **********************************************************/

function bookAppointment($patient, $doctor) {
    return "$patient booked appointment with $doctor";
}

echo bookAppointment("Rakib", "Dr. Sara");
/*
OUTPUT:
Rakib booked appointment with Dr. Sara
*/


/**********************************************************
 * PHP END TAG (OPTIONAL)
 **********************************************************/
?>
