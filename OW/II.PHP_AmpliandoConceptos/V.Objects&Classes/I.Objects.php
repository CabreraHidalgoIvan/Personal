<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

// Create the class
class firstClass {

    public $name = "Ivan";

    public function getName()
    {
        echo $this->name;
    }

}

$instance = new firstClass();

echo $instance -> name;

$instance->getName();

?>

</body>
</html>
