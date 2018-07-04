<?php

$names = array("Hashim", "Alex", "Madison", "Moses");

$count = 1;
while ($count < 100) {
    echo "<li>$count</li>";
    $count++;
}
?>

<p>Hi, my name is <?php echo $names[0]; ?> and I like candy</p>
<p>Hi, my name is <?php echo $names[1]; ?> and I like candy</p>
<p>Hi, my name is <?php echo $names[2]; ?> and I like candy</p>
<p>Hi, my name is <?php echo $names[3]; ?> and I like candy</p>
