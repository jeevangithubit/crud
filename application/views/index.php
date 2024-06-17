<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
</head>
<body>
<div class="container">
	<header class="header">
		<h1 id="title" class="text-center">Survey Form</h1>
		<p id="description" class="text-center">
			Thank you for taking the time to help us improve the platform
		</p>
	</header>
	<div class="form-wrap">	
		<form id="survey-form" method="post" action="<?php echo site_url('web/save')?>">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="name-label" for="name">Name</label>
						<input type="text" name="name" id="name" placeholder="Enter your name" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="email-label" for="email">Email</label>
						<input type="email" name="email" id="email" placeholder="Enter your email" class="form-control" required>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="number-label" for="number">password <small>(optional)</small></label>
						<input type="text" name="password" id="password" placeholder="password" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="number-label" for="number">DOB</label>
						<input type="text" name="dob" id="dob" placeholder="date" class="form-control" required>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
					<button type="submit" id="submit" class="btn btn-primary btn-block">Submit Survey</button>
				</div>
			</div>

		</form>
		  <td>
                 <a style="margin-top: 10px" href="<?php echo base_url()?>index.php/auth/login" class="btn btn-primary btn-block">User login</a>
                </td>
	</div>	
</div>
</body>
</html>