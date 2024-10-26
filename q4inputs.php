<form action="q4answer.php" method="POST">
  <?php
    SESSION_Start();
    $_SESSION["inputs"] = $_POST["inpt1"];
  for ($x = 1; $x <= $_SESSION["inputs"]; $x++) {    
      echo "<input name='inpt".$x."' type='number' placeholder='number ".$x."'><br>";
  }

     
  ?>
  <button type="submit">Submit</button>

</form>
