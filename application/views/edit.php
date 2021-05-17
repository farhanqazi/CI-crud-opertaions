<!DOCTYPE html>
<html>
<head>
	<title>Create File</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assests/css/bootstrap.min.css'  ?>">
</head>
<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">CRUD Opertaion</a>
		</div>		
	</div>
<div class="container" style="padding: 10px;">
	<h3>Edit User</h3>
	<form name="create_user" method="post" action="<?php echo base_url().'index.php/user/edit/'.$user['user_id'] ?>">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="formGroupExampleInput">User Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo set_value('name',$user['name']); ?>"  placeholder="User Name">
				<?php echo form_error("name"); ?>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">User Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo set_value('email',$user['email']);  ?>" placeholder="User Email">
				<?php echo form_error("email"); ?>
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Update</button>
				<a href="<?php echo base_url().'index.php/user/index/' ?>" class="btn btn-secondary">Cancel</a>
			</div>
		</div>
	</div>
</form>
</div>

</body>
</html>