<?php

$category = $_GET['category'];
$textArea = $_GET['textArea'];
$date = $_GET['date'];

if (isset($_GET['complete'])) {
    $complete = 1;
} else {
    $complete = 0;
}

$host = 'localhost';
$user = 'root';
$pass = '';

$connection = mysqli_connect($host, $user, $pass);

mysqli_select_db($connection, 'goals');


$sql = "INSERT INTO objectives (objective_category, objective_text, objective_date, objective_done)
    VALUES ('$category', '$textArea', '$date', '$complete')";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($connection);

}

echo "<script>location.href='index.php'</script>";

