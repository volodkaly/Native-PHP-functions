<form action='index2.php' method = 'get'>
    <input type = 'text' name = 'val'>
    <input type = 'submit' name = 'submit'>
</form>
<?php
$n = $_GET['val'];
echo $n;
echo '<br>';
$a = str_pad('01234',$n,'32101234');
$a = str_split($a);
foreach ($a as &$val){
  echo  $val.'<br>';
}