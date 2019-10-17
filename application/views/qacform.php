<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
	<title>QAC Settings</title>
	<?php include 'header.php';
	include 'autologout.php';?>
</head>
<body>

<div class="container-fluid">
	<div class="row content">
					<div class="col-sm-2">
						<?php include 'sidenav.php'; ?>
					</div>

					<div class="col-sm-10">
						<br/>
						<div class="row">
							<center><div class="btn-group btn-group-justified " style="width: 95%;">
									<a href="<?php echo base_url('login_controller/manageAccount'); ?>" class="btn btn-info">Admin
										Settings</a>
									<div class="btn btn-primary">Create QAC Accounts</div>
									<a href="<?php echo base_url('login_controller/userForm'); ?>" class="btn btn-info">Create User Accounts</a>
								</div></center>
						</div>
						<div class="container" style="margin-left:auto; width: 500px ">

							<div class="row">
								<div class="col-4">
									<form method="post" action="<?php
									echo base_url(); ?>login_controller/QAC_Create_validation">

										<div class="form">
											<hr>
											<span style="color: midnightblue;"  ><h2><center>Create QAC Account</center></h2></span>
											<div class="form-group">
												<label for="username">Username</label>
												<input type="text" class="form-control" id="username" name="username"
													   placeholder="Enter username"/>
												<span class="text-danger"><?php echo form_error('username') ?></span>
											</div>
											<div class="form-group">
												<label for="password">Password</label>
												<input type="password" class="form-control" name="password" id="password" placeholder="Enter password"/>
												<span class="text-danger"><?php echo form_error('password') ?></span>
											</div>
											<div class="form-group">
												<label for="email">E-mail</label>
												<input type="email" class="form-control" name="email" id="email" placeholder="Enter E-mail"/>
												<span class="text-danger"><?php echo form_error('email')?></span>
											</div>
											<br/>
											<center>
												<button type="submit" class="btn btn-primary" name="insert" value="insert">Create</button>
											</center>
											<hr>
											<span class="text-danger"> <?php echo $this->session->flashdata("error") ?></span>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>

	</div>

</div>
<?php include 'footer.php';?>
</body>
</html>




