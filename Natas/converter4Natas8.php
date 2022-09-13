<?php
echo "Hello World.\n";
$input = "3d3d516343746d4d6d6c315669563362";
$packedInput = pack("H*",$input);
$reversedInput = strrev($packedInput);
$final = base64_decode($reversedInput);
echo $final."\n";
echo $input."\n";
?>
