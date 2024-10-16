<?php include "core/initialize.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Record System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Student List</a>
        </li>
    </ul>
    
    </div>
  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-12">
				<br/>
			<a href="student_add.php" class="btn btn-success btn-sm"><i class="fa-solid fa-floppy-disk"></i> &nbsp; Add Student</a>
<br/><br/>

			<table class="table">
  <thead>
   


    <tr>

     <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach(User::find_all() as $user ) { ?>
    

    <tr>
       <td><?php echo $user->id; ?></td>
      <th scope="row"><?php echo $user->username; ?></th>
      <td><?php echo $user->password; ?></td>
      
      
      <td>
      	<a href="student_edit.php?id=<?php echo $user->id; ?>" class="btn btn-sm btn-info"><i class="fa-solid fa-pen"></i>&nbsp; Edit</a>
      	<button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> &nbsp; Delete</button>
      </td>
    </tr>



  <?php } ?>
    
  </tbody>
</table>
		</div>
	</div>
</div>

 	
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>