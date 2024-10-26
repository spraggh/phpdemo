<?php
$CurBal = $_POST["CurBal"];
$IntRate = ($_POST["IntRate"]/100) ;
$DesBal = $_POST["DesBal"];
$NewBal = $CurBal;
$Percentage = $_POST["IntRate"];
echo "<p> £".$CurBal." starting balance - ".$Percentage."% interest Rate (".$IntRate.")</p>";
$i = 1; 
while ($NewBal < $DesBal) {
    $OldBal = $CurBal  * pow((1 + $IntRate), ($i-1));
    $NewBal = $CurBal * pow((1 + $IntRate), $i);
    echo "<p>Year $i: New balance = £" . number_format($NewBal, 2) . " + (£" . number_format($OldBal, 2) . " * $IntRate) = £" . number_format($NewBal, 2) . "</p>";
    $i++;
  }
  ?>