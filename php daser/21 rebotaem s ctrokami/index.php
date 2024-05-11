<?php

$str = "Hello-world";
echo strlen($str) . "<br>";//qani tar ks
echo substr($str,5) . "<br>";// 5-rd elementic sksac nor tpum e
echo substr($str,4,3) . "<br>"; // 4-rd ic sksac tpel 3 element
echo strpos($str,"-") . "<br>";// gtnum enq te vor texum e gtnvum "-" @

$text = "PHP - shat lav lezu e";
echo substr($text,strpos($text,"shat")) . "<br>";
echo str_replace("-","=",$text)








?>