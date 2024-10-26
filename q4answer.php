<?php
    SESSION_Start();
    $total = 0;
    $inputs = $_SESSION["inputs"];
  for ($x = 1; $x <= $inputs; $x++) {
      $total = $total + $_POST["inpt".$x];
  }
  $average = $total / $inputs;
  echo "<p>".$average."</p>";
  ?>