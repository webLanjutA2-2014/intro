<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<br/>
<H2 align="center">Penyewaan Buku Gufi</H2>
<form action=" " method="POST" enctype="multipart/form-data">
  <table align="center"; margin="100">
    <tr>
      <td align="left"> Nama Peminjam : </td>
      <td align="left"><input type="text" name="username"></td>
    </tr>
    <tr>
      <td align="right">Password : </td>
      <td align="left"><input type="password" name="password"></td>
    </tr>
	
    <tr>
	<br/>
    	<td align="right">&nbsp&nbsp<input type="submit" value="Login"></td>
    </tr>
  </table>
</form>

<?php 		
	session_start();
	require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$sql="SELECT *FROM user where username='".$_POST['username']."' AND password='".$_POST['password']."'";
		$query=mysqli_query($con, $sql) or die (mysqli_error($con));
		
	if(mysqli_num_rows($query)){
		while($data=mysqli_fetch_assoc($query)){
			$_SESSION['login']=1;
			$_SESSION['name']=$data['username'];
			
			header('location:pencarianpeminjam.php');
			}
			
			}else{
				echo "username atau password salah";
				}
			}
?> 
</body>
</html>