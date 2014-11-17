<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<H2 align="center">Selamat Datang</H2>
<form action=" " method="POST" enctype="multipart/form-data">
  <table align="center"; margin="100">
    <tr>
      <td align="right">Masukkan Username : </td>
      <td align="left"><input type="text" name="nama"></td>
    </tr>
    <tr>
      <td align="right">Password : </td>
      <td align="left"><input type="password" name="password"></td>
    </tr>
    <tr>
    	<td align="right"><input type="submit" value="Login"></td>
    </tr>
  </table>
</form>

<?php 		
	session_start();
	require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$sql="SELECT *FROM admin where nama='".$_POST['nama']."' AND password='".$_POST['password']."'";
		$query=mysqli_query($con, $sql) or die (mysqli_error($con));
		
	if(mysqli_num_rows($query)){
		while($data=mysqli_fetch_assoc($query)){
			$_SESSION['login']=1;
			$_SESSION['password']=$data['nama'];
			
			header('location:index.php');
			}
			
			}else{
				echo "username atau password salah";
				}
			}
?> 
</body>
</html>