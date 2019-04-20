<?php
$username = $_POST['uname'];
$passwordwithout=$_POST['psw'];
$passhash=sha1( $passwordwithout ), "\n";
$i=0;
include 'db_connect.php';
$id_exists = false;
$username = mysql_real_escape_string($_GET['id']);
$sql = "SELECT id FROM members WHERE id='$username'";
$result = mysql_query($sql);

if ($result == $username)
{
        $id_exists = true;
}

else if ($result != $username)
{
        $id_exists = false;
        header("location:user.php");
        exit();
}
$file=fopen('hashes1.txt', 'r');
while(! feof($file))
	{
		$word=fgets($file). "<br />";
		//$i=$i+1;
	//	echo $i."<br>";
		//$hashcompare=sha1 ($word) ;
		//file_put_contents($file1, $hashcompare."\r\n", FILE_APPEND);
		if ($passhash == $word)
		{
			echo '<script language="javascript">';
			echo 'alert("User successfully logged in")';
			echo '</script>';
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("chutiya mat kaat")';
			echo '</script>';
		}
	}

//fclose($file1);
fclose($file);
?>
