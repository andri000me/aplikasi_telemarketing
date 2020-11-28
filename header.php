<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Sholeh" />
	<title>Aplikasi Telemarketing</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
</head>
<body>
<?php 
session_start();
?>
<div class="container">
<div class="col s12">
<nav>
    <div class="nav-wrapper blue darken-1">
    Aplikasi Telemarketing
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <!--  -->
      <li><a href="index.php" >Home</a></li>
      <?php if(isset($_SESSION['name'])){ ?>
        <li><a href="list.php?id=<?php echo $_SESSION['id']; ?>&aksi=list" >Customer</a></li>
        <li><a href="report.php?id=<?php echo $_SESSION['id']; ?>&aksi=report" >Report</a></li>
        <li><a href="proses.php?aksi=logout" >Logout</a></li>
      <?php }else {?>
        <li><a href="register.php" >Register</a></li>
      <li><a href="login.php" >Login</a></li>
      <?php }?>

      </ul>
    </div>
  </nav>
</div>
<?php
if(isset($_SESSION['name'])){ ?>
  <h5 style="text-align:center">Halo , <?php echo $_SESSION['name'];?> !! Selamat Datang di aplikasi Kami</h5>

<?php } ?>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<h5 style='text-align:center'>Login gagal! username dan password salah!</h5>";
		}else if($_GET['pesan'] == "logout"){
			echo "<h5 style='text-align:center'>Anda telah berhasil logout</h5>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<h5 style='text-align:center'>Anda harus login untuk mengakses halaman</h5>";
		}
	}
	?>
<br />