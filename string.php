<?php 
$kalimat = "Belajar pemrograman di malasngoding.com";
echo strlen($kalimat);

 
$kalimat = "Belajar pemrograman di malasngoding";
echo str_word_count($kalimat);

$kalimat = "Belajar pemrograman di malasngoding";
echo strrev($kalimat);

str_replace("yang ingin di ganti","pengganti","isi string");
 
$kalimat = "Belajar pemrograman di malasngoding";
echo str_replace("Belajar","Tutorial",$kalimat);





?>