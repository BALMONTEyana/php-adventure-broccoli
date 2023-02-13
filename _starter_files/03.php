<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<?php

 $hello = 'Work hard, Play hard';
 $hi = count_chars($hello, 1);

 foreach($hi as $letter=>$frequency)
 {
    echo "Character of \"".chr($letter)."\" was used $frequency times <br />";
 }

?>