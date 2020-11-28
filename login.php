<?php 
include 'database.php';
$db = new database();
include('header.php');
?>

<div class="row">
<div class="col s12">
<h5 style="text-align:center">Login </h5><br>

<br>
<div id="user-login" class="row" >
	<div class="z-depth-5 card-panel" style=" margin: 0 auto;
    width: 450px;   heigth: 450px;
    position: relative;">
		<form class="login-form" action="proses.php?aksi=login" method="post">

			<div class="row margin">
				<div class="input-field col s11">
					<i class="mdi-social-person-outline prefix"></i>
					<input class="validate" id="user_account" type="text" name="username">
					<label for="username" data-error="wrong" data-success="right" class="left-align">Username</label>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s11">
					<i class="mdi-action-lock-outline prefix"></i>
					<input id="user_pass" type="password" name="password">
					<label for="password">Password</label>
				</div>
			</div>
			
			<div class="row margin ">
				<div class="input-field col s11 offset-m1 ">
					<button type="submit" class="btn waves-effect waves-light col s11 ">Login</button>
				</div>
			</div>
            </form>
			<div class="row margin">
				<div  class="input-field col s12  " >
					<p class="margin medium-small" style="text-align:center"><a href="register.php">Register Employee</a></p>
				</div>               
			</div>
		
	</div>
</div>
</div>
    </div>
  
<?php include('footer.php');?>