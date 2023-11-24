<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    
    <nav class="navbar bg-body-tertiary">
  <form class="container-fluid" action="../action/todo.php" method="POST" >
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1">@</span>
      <!-- <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name"> 
    -->
    <input type="text" class="form-control" name="name"     >
      <!-- <input type="submit" class="btn btn-primary" value="task" name="submit"  ></button> -->
      <input type="submit" class="btn btn-primary" value="tsak" name="submit"  ></button>
    

  </form>
</nav>
    </div>
    <div> <?php  include('carrd.php') ?>  </div>

</body>
</html>