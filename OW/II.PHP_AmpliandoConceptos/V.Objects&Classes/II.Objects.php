<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

// Create the class
class student {

    private $name = null;
    private $lastName = null;

    function getName() {
        return $this->name;
    }

    function getLastName() {
        return $this->lastName;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function getWords() {
        return strlen($this->name);
    }

}

$student1 = new student();

$student1->setName("John");
$student1->setLastName("Doe");

$nameStudent1 = $student1->getName();
echo $nameStudent1 . "<br>";

$lastNameStudent1 = $student1->getLastName();
echo $lastNameStudent1 . "<br>";

$words = $student1->getWords();
echo $words . "<br>";

if (class_exists("student")) {
    echo "Class: " . get_class($student1) . "<br>";
}

$methodStudent = get_class_methods("student");
foreach ($methodStudent as $method) {
    echo $method . "<br>";
}

$properties = get_class_vars("student");
echo "Properties are private";
foreach ($properties as $property) {
    echo $property. "<br>";

}
?>

</body>
</html>
