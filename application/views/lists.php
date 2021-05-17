<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assests/css/bootstrap.min.css'  ?>">
</head>
<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">CRUD Opertaion</a>
		</div>		
	</div>
<div class="container" style="padding: 10px;">
	<div class="row">
		<div class="col-md-6">
			<?php 

			$success = $this->session->userdata('success');
			if($success !='')
			{
			?>
				<div class="alert alert-success"><?php echo $success ?></div>
			<?php 
			}
			$updated = $this->session->userdata('updated');
			if($updated !='')
			{
			?>
				<div class="alert alert-primary"><?php echo $updated ?></div>
			<?php 
			}
			$deleted = $this->session->userdata('deleted');
			if($deleted !='')
			{
			?>
				<div class="alert alert-danger"><?php echo $deleted ?></div>
			<?php 
			}
			?>

		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h3>View User</h3>
		</div>
		<div class="col-md-6">
			<a href="<?php echo base_url().'index.php/user/create/' ?>" class="btn btn-success btn-sm">Create User</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Created Date</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  		if(!empty($users))
			  		{
			  			foreach ($users as $user)
			  			{
			  		?>
			  		<tr>
			      <th scope="row"><?php echo $user['user_id'] ?></th>
			      <td><?php echo $user['name'] ?></td>
			      <td><?php echo $user['email'] ?></td>
			      <td><?php echo $user['date'] ?></td>
			      <td><a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id'] ?>" class="btn btn-primary btn-sm">Edit</a> || <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
			    </tr>
			  		<?php 		
			  			}
			  		}
			  		else
			  		{
			  	?>
			  	<tr>
			      <th colspan="4">No Record Found</th>
			    </tr>
			  	<?php 		
			  		}
			  	?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>