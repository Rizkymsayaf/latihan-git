<?php
$a = 5;
$b = 4;

echo "$a == $b :".  ($a ==$b);
echo "<br>$a != $b :". ($a != $b);
echo "<br>$a > $b :". ($a > $b);
echo "<br>$a < $b :". ($a < $b);

//wajib sama/benar
echo "<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b));

// tidak perlu sama
echo "<br>($a == $b) || ($a > $b) : ". (($a != $b) || ($a > $b));
?>