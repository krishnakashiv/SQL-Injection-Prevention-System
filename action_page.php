<?php
$username = $_POST['uname'];
$passwordwithout=$_POST['psw'];
$passhash=sha1( $passwordwithout ), "\n";
$i=0;
$file=fopen('hashes1.txt', 'r');
while(! feof($file))
	{
		$word=fgets($file). "<br />";
		//$i=$i+1;
	//	echo $i."<br>";
		//$hashcompare=sha1 ($word) ;
		//file_put_contents($file1, $hashcompare."\r\n", FILE_APPEND);
		if ($passhash == $word)
		{printf"password correct"}
	}

//fclose($file1);
fclose($file);
?>
