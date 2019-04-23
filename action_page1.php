<?php


$uname = $_POST['uname'];
$passwordwithout=$_POST['psw'];
$passhash=sha1( $passwordwithout );
//echo $passhash;
include 'connect.php';

$i=0;




//db checking
$sql  = "SELECT username FROM maindb WHERE username ='$uname' and passhash='$passwordwithout'";
$found=mysqli_query($connect,$sql) or die("Possible SQL injection attack.");

if (mysqli_num_rows($found) != null )
{
     echo '<script language="javascript">';
      echo 'alert("Username Exists")';
      echo '</script>';
    $i=1;
} else {
  echo '<script language="javascript">';
   echo 'alert("Username Does not exist")';
   echo '</script>';
}

$file=fopen('hashes1.txt', 'r');




while(!feof($file))
	{
		$word=fgets($file). "<br />";
		//$i=$i+1;
	//	echo $i."<br>";
		//$hashcompare=sha1 ($word) ;
		//file_put_contents($file1, $hashcompare."\r\n", FILE_APPEND);

        $word=substr($word,0,40);
		if ($passhash == $word)
		{

      $i = $i+1;
            break;
		}
  }
    if ($i == 2)
    {
      echo '<script language="javascript">';
      echo 'alert("User successfully logged in")';
      echo '</script>';

    }
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Invalid password")';
			echo '</script>';
		}





//fclose($file1);
fclose($file);
?>
