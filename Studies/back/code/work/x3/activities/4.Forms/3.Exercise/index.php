<?php

if (isset($_POST['submit'])) {
  if (isset($_POST['country'])) {
    if ($_POST['country'] === "Austria") {
      echo "Capital: Vienna <br>";
      echo "<img src='https://turismo.org/wp-content/uploads/2010/09/Bandera-de-Viena.png'>";
    } else if ($_POST['country'] === "Belgium") {
      echo "Capital: Brussels <br>";
      echo "<img src='https://cdn.pixabay.com/photo/2017/05/22/01/16/belgium-2332814_960_720.png'>";
    } else if ($_POST['country'] === "Bulgaria") {
      echo "Capital: Sofia <br>";
      echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTb-bTfh-DAuuJMzRKy_0DsS1Kjh4n8T6N6PQ&usqp=CAU'>";
    } else if ($_POST['country'] === "Croatia") {
      echo "Capital: Zagreb <br>";
      echo "<img src='https://cdn.pixabay.com/photo/2012/04/10/23/11/croatia-26888__340.png'>";
    } else if ($_POST['country'] === "Cyprus") {
      echo "Capital: Nicosia <br>";
      echo "<img src='https://cdn.pixabay.com/photo/2013/07/13/09/53/cyprus-156226__340.pngg'>";
    } else if ($_POST['country'] === "CzechRepublic") {
      echo "Capital: Prague <br>";
      echo "<img src='https://cdn.pixabay.com/photo/2013/07/13/14/15/czech-republic-162276__340.pngg'>";
    } else if ($_POST['country'] === "France") {
      echo "Capital: Paris <br>";
      echo "<img src='https://turismo.org/wp-content/uploads/2010/09/Bandera-de-Paris.png'>";
    }
  }
}