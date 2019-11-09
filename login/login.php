<?php 
mysqli_connect('localhost','root','');
mysqli_select_db('osis_db');
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysql_query("select * from tb_login where nama_user='$username' and pass_user='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['nama_user'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
	header("location:index.php");	
}

?>