<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = isset($_POST["number"]) ? intval($_POST["number"]) : 0;
    $pattern = isset($_POST["pattern"]) ? $_POST["pattern"] : '';
}

switch($pattern) {
    case "triangle":
      for ($row = 1; $row <= $number; $row++) {
        for ($col = 1; $col <= $row; $col++) {
            echo "* ";
        }
        echo "<br>";
      }
      break;
    case "reverse_triangle":
        for ($row = $number; $row >= 1; $row--) {
          for ($col = $row; $col >= 1; $col--) {
            echo "* ";
          }
          echo "<br>";
        }
        break;
    case "pyramid":
        for ($row = 1; $row <= $number ; $row++) {
            for ($space = 1; $space <= $number - $row; $space++) {
                echo "&nbsp;&nbsp;";
            }
            for ($col = 1; $col <= 2 * $row - 1; $col++) {
                echo "* ";
            }
            echo "<br>";
        }
        break;

}