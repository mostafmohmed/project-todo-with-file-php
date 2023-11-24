
<?php
require_once("../healper/auth.php");
// if(!chekIslogin()){
//     header("location:indexx.php");
// }
session_start();
$list_task=[];
$alltask=json_decode(file_get_contents("../date/task.json"),true);
foreach($alltask as $task)
{
    if($_SESSION['users']['id']==$task['user_id']){
        $list_task[]=$task;
    }
  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>protect</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<?php // var_dump($list_task) ?>

<div class="col-3">
    <?php foreach($list_task as $task)
     { ?>
<div class="card" style="width: 18rem;">
 
  <div class="card-body">
    <h1 class="card-title"> <? echo  date("Y/m/d"); ?> </h1>
    <p class="card-text"><?php echo $task['name']?></p>
    <!-- <a href="edit-protect.php?id=" class="btn btn-primary">edit</a>
    <a href="delet-protect.php?id=" class="btn btn-primary">delet</a> -->
  </div>
</div>
<?php }?>
</div>
</body>
</html>