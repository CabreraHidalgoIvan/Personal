<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GOALS</title>
    <style type="text/css">
        h1 {
            text-align: center;
        }

        .form {
            width: 500px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .selector {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }



        .form-group label {
            display: block;
            margin-bottom: 5px;
            text-align: center;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .form-group input {
            display: block;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group textarea {
            display: block;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>

</head>
<body>

<main>
    <div class="form">

        <h1>New Goals</h1>

        <form id="form" action="connection.php" method="get">
            <p class="form-group">
                <label for="category">Category</label><br>
                <select id="category" name="category" class="form-control selector" required>
                    <option value="1">Personal</option>
                    <option value="2">Business</option>
                    <option value="3">Education</option>
                    <option value="4">Other</option>
                </select>
            </p>

            <p class="form-group">
                <label for="textArea">Goal</label><br>
                <textarea name="textArea" id="textArea" maxlength="100" required></textarea>
            </p>

            <p class="form-group">
                <label for="date">Date</label><br>
                <input type="date" name="date" id="date" required>
            </p>

            <p class="form-group">

                <label for="complete"></label>
                <input id="complete" name="complete[]" type="checkbox" value=1>
            </p>

            <p class="form-group">
                <input type="submit" name="enviando" value="Send">
            </p>

        </form>

    </div>

</main>

<?php

$host = 'localhost';
$user = 'root';
$pass = '';

$connection = mysqli_connect($host, $user, $pass);

mysqli_select_db($connection, 'goals');


$sql = "SELECT * FROM objectives";

$result = mysqli_query($connection, $sql);

print("<h2>Incomplete Goals</h2>");


while ($register = mysqli_fetch_array($result)) {
    echo "<p>N: " . $register['objective_done'] . "</p>";

    if ($register['objective_done'] === 0) {
        print("<p>Category: " . $register[1] . "</p>");
        print("<p>Goal: " . $register[2] . "</p>");
        print("<p>Date: " . $register[3] . "</p>");
        print("<p>Complete: " . $register[4] . "</p>");
        print("<br>");
    }


}

print("<h2>Complete Goals</h2>");


while ($register = mysqli_fetch_array($result)) {
    echo "<p>N: " . $register['objective_done'] . "</p>";

    if ($register['objective_done'] !== 0) {
        print("<p>Category: " . $register[1] . "</p>");
        print("<p>Goal: " . $register[2] . "</p>");
        print("<p>Date: " . $register[3] . "</p>");
        print("<p>Complete: " . $register[4] . "</p>");
        print("<br>");
    }


}
/*while ($register = mysqli_fetch_array($result)) {
    print($register[4] . "<br>");
    if ($register[4] === 0) {
        print("<p>Category: " . $register[1] . "</p>");
        print("<p>Goal: " . $register[2] . "</p>");
        print("<p>Date: " . $register[3] . "</p>");
        print("<p>Complete: " . $register[4] . "</p>");
        print("<br>");
    } else {
        print("<h2>Complete Goals</h2>");
        print("<p>Category: " . $register[1] . "</p>");
        print("<p>Goal: " . $register[2] . "</p>");
        print("<p>Date: " . $register[3] . "</p>");
        print("<p>Complete: " . $register[4] . "</p>");
        print("<br>");
    }
}*/

?>

</body>
</html>
