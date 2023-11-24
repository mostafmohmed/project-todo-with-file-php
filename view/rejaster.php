
<?php 
//  require_once("parials/genral.php") ;
// if(chekIslogin()) {
//     header("location:indexx.php");
// }
?>

<?php
// $name=$_GET['name'];
// $age=$_GET['age'];
// if(isset($_GET['name'])&&isset($_GET['age']))
// echo"$name".$age;
// session_start();
//var_dump($_SESSION['errors']);
$Error=[];
$old=[];
if(isset($_SESSION['errors'])){$Error=$_SESSION['errors'];

var_dump($Error)  ;
}


if(isset($_SESSION['old'])){
$old=$_SESSION['old'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" >
    <title>login</title>
</head>
<body>
   


<div class="conatiner">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="../action/Rejster.php" method="POST"    >
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        
                        <input type="text" class="form-control" name="name"     >
             
           
                        <?php  if(isset($Error['name'])&&!empty($Error['name']))  ?>
<p  class="text-danger" >     <?php echo $Error['name'] ?>  </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">age</label>
                       
                        <input type="text" class="form-control" name="age"      value="<?php echo $old['age'] ;?>" >
                        <?php  if(isset($Error['age'])&&!empty($Error['age']))  ?>
<p  class="text-danger" >     <?php echo $Error['age']  ?>  </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        
                        <input type="text" class="form-control" name="email"   <?php //if(!empty($old['email'])) ?>   value="<?php //echo $old['email'] ;?>" >
                        <?php  if(isset($Error['email'])&&!empty($Error['email']))  ?>
<p  class="text-danger" >     <?php echo $Error['email']  ?>  </p>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                       
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirmPassword">
                    </div>
                  

                    
                    <input type="submit" class="btn btn-primary" value="Register" name="submit"  ></button>
                </form>  
                
               
            </div>
        </div>

    </div>

  
<link href="css/bootstrap.min.css" rel="stylesheet" >


</body>



</html>