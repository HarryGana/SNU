<?php

// for ARAAYS

$array_example = []; //an empty array
$array_example_2 = ["mike"];
$array_example_3 = ["mike",3,"orange", true];
// index. position of an element(item)in an array
// position 0

print $array_example_3[0]; // print mike
print $array_example_3[3]; // print true

print count($array_example_3); // print 4

$imaginary_array = []; // fetch the last item in the imaginary array
print $imaginary_array[count ($imaginary_array) -1]; // print true