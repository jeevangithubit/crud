<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<style type="text/css">
		body {
  background: #fafbfb;
}


/* FOOTER STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.page-footer {
  position: fixed;
  right: 0;
  bottom: 50px;
  display: flex;
  align-items: center;
  padding: 5px;
  z-index: 1;
}

.page-footer a {
  display: flex;
  margin-left: 4px;
}
	</style>
</head>
<body>
<div class="container my-5">
			  <div class="row justify-content-center">
			    <div class="col-lg-9">
			      <h1 class="mb-3">Contact Us</h1>
			      <form method="post" action="<?php echo site_url('Admin/update')?>">
			      	<?php
			            foreach ($get as $value) {
			          ?>
			      	<input type="hidden" name="id" value="<?php echo $value['id'];?>">
			        <div class="row g-3">
			          <div class="col-md-6">
			            <label class="form-label">Name</label>
			            <input type="text" class="form-control" id="name" name="name" value="<?php echo $value['username']?>">
			          </div>
			          <div class="col-md-6">
			            <label class="form-label">Email</label>
			            <input type="email" class="form-control" id="email" name="email" value="<?php echo $value['email']?>">
			          </div>
			          <div class="col-md-6">
			            <label class="form-label">Password</label>
			            <input type="text" class="form-control" id="password" name="password" value="<?php echo $value['password']?>">
			          </div>
			          <div class="col-md-6">
			            <label class="form-label">Your Subject</label>
			            <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $value['dob']?>">
			          </div>
			      
			          <div class="col-12">
			            <div class="row">
			              <div class="col-md-6">
			                <button type="submit" class="btn btn-dark w-100 fw-bold" >Update</button>
			              </div>
			            </div>
			          </div>
			        </div>
			    <?php }?>
			      </form>
			    </div>
			  </div>
			</div>
</body>
</html>