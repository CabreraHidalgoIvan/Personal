<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singleton Superhero</title>


    <?php
        $message = "";
        $name = "";
        $superPower = "";
        $id = "";

        if (isset($_POST["message"])) {
            $message = $_POST["message"];
        }

        if (isset($_POST["name"])) {
            $name = $_POST["name"];
        }

        if (isset($_POST["superPower"])) {
            $superPower = $_POST["superPower"];
        }

        if (isset($_POST["id"])) {
            $id = $_POST["id"];
        }

    ?>
</head>

<body>
<div class="container">
    <h1>Singleton Superhero</h1>
</div>

<form name="formSuperHero" action="App/Controller/superheroController.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $name ?>">
    </div>

    <div class="form-group">
        <label for="superPower">SuperPower</label>
        <input type="text" class="form-control" id="superPower" name="superPower" value="<?= $superPower ?>">
    </div>

    <input type="submit" class="btn btn-primary" name="Store" value="Store"/>
    <input type="submit" class="btn btn-primary" name="Search" value="Search"/>

    <?php
        if (isset($_GET["Modification"]) && $_GET["Modification"]==="1") {
            echo "<input type='hidden' name='id' value='". $id ."'>";
            echo "<input type='submit' name='Delete' value='Delete'>";
        }
    ?>

    <br>
    <span style="color: green; "><?= $message ?> </span>

</form>
</body>

</html>