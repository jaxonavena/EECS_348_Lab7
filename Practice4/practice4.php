<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //has form been submitted
  $table_size = $_POST["table_size"]; //var size = user input

  if (is_numeric($table_size) && $table_size > 1){ //is positive num?
    echo "<table border='15'>"; //init table



      //build top row
      echo "<tr><th></th>"; // empty space
      for ($i = 1; $i <= $table_size; $i++) {
        echo "<th>$i</th>";
      }

      echo "</tr>"; //end row

      //build table body
      for ($i = 1; $i <= $table_size; $i++) {
        echo "<tr><th>$i</th>";
        for ($j = 1; $j <= $table_size; $j++) {
          echo "<th>" . $i * $j . "</th>";
        }

        echo "</tr>"; //end row
      }
      echo "</table>";
  }
  else //user input is invald
  {
    echo "Please enter a positive number.";
  }
}
?>
