<?php

$names = array("Hashim", "Alex", "Madison", "Moses", "Marilyn");

$count = 0;

while ($count < count($names)) {
    echo "<li>Hi my name is $names[$count]</li>";
    $count++;
}

?>

<p>Hi, my name is <?php echo $names[0]; ?> and I like candy</p>
<p>Hi, my name is <?php echo $names[1]; ?> and I like candy</p>
<p>Hi, my name is <?php echo $names[2]; ?> and I like candy</p>
<p>Hi, my name is <?php echo $names[3]; ?> and I like candy</p>
