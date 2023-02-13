<?php

$month = $_POST['month'];
$year = $_POST['year'];


const MONDAY = 1;
const TUESDAY = 2;
const WEDNESDAY = 3;
const THURSDAY = 4;
const FRIDAY = 5;
const SATURDAY = 6;
const SUNDAY = 7;

function holidaysCal($day, $month, $year) {

  $nationalHolidays = array("10-12" => "Dia del Pilar");
  $localHolidays = array("10-24" => "Dia de San Rafael");

  if (date('N', strtotime($year . '-' . $month . '-' . $day)) == SUNDAY) {

    return "<td style='background-color: red;'><a href='./showDate.php?day=" . $day . "&month=" . $month . "&year=" . $year . "'>" . $day . "</a></td>";

  } else {

    foreach ($nationalHolidays as $key => $value) {
      if (($month . "-" . $day) === $key) {
        return "<td style='background-color: green;'><a href='./showDate.php?day=" . $day . "&month=" . $month . "&year=" . $year . "&holiday=" . $value . "'>" . $day . "</a></td>";
      }
    }

    foreach ($localHolidays as $key => $value) {
      if (($month . "-" . $day) === $key) {
        return "<td style='background-color: orange;'><a href='./showDate.php?day=" . $day . "&month=" . $month . "&year=" . $year . "&holiday=" . $value . "'>" . $day . "</a></td>";
      }
    }

    return "<td><a href='./showDate.php?day=" . $day . "&month=" . $month . "&year=" . $year . "'>" . $day . "</a></td>";

  }

}

function createTable() {
  echo "<table><tr><td><b>Monday</b></td><td><b>Tuesday</b></td><td><b>Wednesday</b></td><td><b>Thursday</b></td><td><b>Friday</b></td><td><b>Saturday</b></td><td><b>Sunday</b></td></tr>";
  $month = $_POST['month'];
  $year = $_POST['year'];
  $numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

  $start = true;
  $adapted = false;

  for ($i = 1; $i <= $numDays; $i++) {

    if($start) {
      echo "<tr>";
      $start = false;
    }

    for ($j = 1; $j <= 7; $j++) {

      if (date('N', strtotime($year . '-' . $month . '-' . $i)) == $j) {

        echo holidaysCal($i, $month, $year);

        if ($j === SUNDAY || $i === $numDays) {
          echo "</tr>";
          $start = true;
        }
        break;

      } else if ($i === 1) {
        echo "<td></td>";
      }

    }

  }
  echo "</table>";
}

if ($month >= 1 && $month <= 12 && $year >= 1950 && $year <= 2022) {
  echo " The month is: " . $month . " and the year is: " . $year;

  if (isset($_POST['submit'])) {
    createTable();
  }


} else {
  echo "The month or year is not valid, select a month between 1 and 12 and a year between 1950 and 2022";
}