<?php
/*
===========================================
   PHP OOP DEMO SCRIPT
   Purpose: Learn Classes, Objects, Inheritance
   Author: Ahtesham Ibne Mostafa
===========================================
*/

/*
-------------------------------------------
1. BASIC CLASS AND OBJECT
-------------------------------------------
*/
class Doctor {
    // Properties
    public $name;
    public $specialization;

    // Method
    public function introduce() {
        echo "Doctor Name: $this->name <br>";
        echo "Specialization: $this->specialization <br>";
    }
}

// Creating an object
$doc1 = new Doctor();
$doc1->name = "Dr. Rahman";
$doc1->specialization = "Cardiologist";

$doc1->introduce();

/*
Expected Output:
Doctor Name: Dr. Rahman
Specialization: Cardiologist
*/


/*
-------------------------------------------
2. CONSTRUCTOR
-------------------------------------------
*/
class Patient {
    public $name;
    public $age;

    // Constructor runs automatically when object is created
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function info() {
        echo "Patient: $this->name, Age: $this->age <br>";
    }
}

$p1 = new Patient("Rakib", 25);
$p1->info();

/*
Expected Output:
Patient: Rakib, Age: 25
*/


/*
-------------------------------------------
3. PRIVATE PROPERTY + GETTER & SETTER
-------------------------------------------
*/
class User {
    private $email;

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }
}

$user = new User();
$user->setEmail("test@gmail.com");
echo "User Email: " . $user->getEmail() . "<br>";

/*
Expected Output:
User Email: test@gmail.com
*/


/*
-------------------------------------------
4. INHERITANCE
-------------------------------------------
*/
class Person {
    public $name;

    public function speak() {
        echo "$this->name says: Hello!<br>";
    }
}

class DoctorChild extends Person {
    public $specialization;

    public function work() {
        echo "$this->name treats patients as $this->specialization<br>";
    }
}

$d = new DoctorChild();
$d->name = "Dr. Karim";
$d->specialization = "Neurology";

$d->speak();  // From parent
$d->work();   // From child

/*
Expected Output:
Dr. Karim says: Hello!
Dr. Karim treats patients as Neurology
*/


/*
-------------------------------------------
5. METHOD OVERRIDING
-------------------------------------------
*/
class Person2 {
    public function role() {
        echo "I am a person<br>";
    }
}

class Patient2 extends Person2 {
    public function role() {
        echo "I am a patient<br>";
    }
}

$pat = new Patient2();
$pat->role();

/*
Expected Output:
I am a patient
*/


/*
-------------------------------------------
6. STATIC PROPERTY & METHOD
-------------------------------------------
*/
class Hospital {
    public static $name = "City Hospital";

    public static function showName() {
        echo "Hospital Name: " . self::$name . "<br>";
    }
}

// Access without object
Hospital::showName();

/*
Expected Output:
Hospital Name: City Hospital
*/


/*
-------------------------------------------
7. REAL-WORLD EXAMPLE: BOOK APPOINTMENT
-------------------------------------------
*/
class Appointment {
    public $patientName;
    public $doctorName;

    public function __construct($patient, $doctor) {
        $this->patientName = $patient;
        $this->doctorName = $doctor;
    }

    public function confirm() {
        echo "Appointment booked: $this->patientName with $this->doctorName<br>";
    }
}

$app = new Appointment("Rakib", "Dr. Sara");
$app->confirm();

/*
Expected Output:
Appointment booked: Rakib with Dr. Sara
*/

?>
