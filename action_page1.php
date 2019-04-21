<?php
$uname = $_POST['uname'];
$passwordwithout=$_POST['psw'];
$passhash=sha1( $passwordwithout );
//echo $passhash;
include 'connect.php';
$id_exists = false;

$i=0;





$sql  = "SELECT username FROM maindb WHERE username ='$uname' and passhash='$passwordwithout'";
$found=mysqli_query($connect,$sql);

if (mysqli_num_rows($found) != null )
{
     echo '<script language="javascript">';
      echo 'alert("Username Exists")';
      echo '</script>';
    $i=1;
} else {
    echo "not found :'(";
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
			echo 'alert("chutiya mat kaat")';
			echo '</script>';
		}





//fclose($file1);
fclose($file);

?>
