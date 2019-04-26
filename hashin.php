<?php
$file1=fopen('hashes1.txt', 'r');
$handle = fopen("pass1.txt", "r");
//echo sha1("or 1=1");
$i=0;
if ($handle) {
    while (! feof($handle)) {
    $line=fgets($handle). "<br />";
    echo $line;
    $word= substr($line,0,3 );
    //echo $word;
    $i=$i+1;
	echo $i." ";
	$hashcompare=sha1 ($word) ;
    echo $hashcompare . "<br\>";

	file_put_contents("hashes1.txt", $hashcompare."\r\n", FILE_APPEND);
    }

    fclose($handle);
} else {
    echo 'COUDNT OPEN TXT';

}

?>
