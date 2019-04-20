<?php
$username = $_POST['uname'];
$passwordwithout=$_POST['psw'];
$passhash=sha1( $passwordwithout );
include 'connect.php';
$id_exists = false;
$username = mysqli_real_escape_string($connect,$_POST['username']);
$sql = "SELECT username FROM sqlinjcheck WHERE username='$username' ";
$result = mysqli_query($connect, $sql);

if ($result == $username)
{
        $flag=1;
        $id_exists = true;
}

else if ($result != $username)
{
        $id_exists = false;
        header("location:user.php");
        exit();
}
$file=fopen('hashes1.txt', 'r');
$i=0;
while(! feof($file))
	{
		$word=fgets($file). "<br />";
		//$i=$i+1;
	//	echo $i."<br>";
		//$hashcompare=sha1 ($word) ;
		//file_put_contents($file1, $hashcompare."\r\n", FILE_APPEND);
		if ($passhash == $word)
		{

      $i = $i + 1;
		}
  }
    if ($i == 1)
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
