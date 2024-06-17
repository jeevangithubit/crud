<html>
  <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
 <body class = "container">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>date of date</th>
                <th>Action</th>

            </tr>
        </thead>
 
  	<?php $i = 1;
  	 foreach ($get as $value) { ?>
        <tbody>
       
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value['username']?></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo $value['password']?></td>
                <td><?php echo $value['dob']?></td>

                 <td><a style="padding: 10px;" href="<?php echo base_url()?>index.php/admin/delete/<?php echo $value['id']?>" onclick="return conform ('Are you sure?')" class="btn btn-danger"> Delete</a>
			        <a href="<?php echo site_url('Admin/edit/'.$value['id']);?>"   class="btn btn-success">Update</a>
			       </td>
            </tr>
          
        </tbody>
          <?php $i++; }?>
    </table>
 <td>
         <a id="button" href="<?php echo base_url()?>index.php/Admin/logout" class="btn btn-info">Logout</a>
      </td>
         <td>
           <a style="margin-top: 10px" href="<?php echo base_url()?>index.php/web/index" class="btn btn-info">Add New User</a>
         </td>
 </body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').dataTable();
} );

</script>