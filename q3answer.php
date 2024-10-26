<?php
$Grade = "";
$Difference = "";
$total = $_POST["inpt1"] + $_POST["inpt2"] + $_POST["inpt3"] + $_POST["inpt4"];
if ($total>=80){
    $Grade = "A*";
    $Difference = "No Higher Grade";
}
elseif ($total>=67){
    $Grade = "A";
    $Difference = 80-$total;
}
elseif ($total>=54){
    $Grade = "B";
    $Difference = 67-$total;
}
elseif ($total>=41){
    $Grade = "C";
    $Difference = 54-$total;
}
elseif ($total>=31){
    $Grade = "D";
    $Difference = 41-$total;
}
elseif ($total>=22){
    $Grade = "E";
    $Difference = 31-$total;
}
elseif ($total>=13){
    $Grade = "F";
    $Difference = 22-$total;
}
elseif ($total>=4){
    $Grade = "G";
    $Difference = 13-$total;
}
else{
    $Grade = "U";
    $Difference = 4-$total;
}
echo "<p>".$Grade."</p>";
echo "<p> Marks required for next grade: ".$Difference."</p>";
?>