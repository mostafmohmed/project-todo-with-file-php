<?php
//  require_once("parials/genral.php") ;
// if(chekIslogin()) {
//     header("location:indexx.php");
// }
?>

<?php
session_start();
// $name=$_GET['name'];
// $age=$_GET['age'];
// if(isset($_GET['name'])&&isset($_GET['age']))
// echo"$name".$age;
// session_start();
//var_dump($_SESSION['errors']);
$Error = [];
$old = [];
if (isset($_SESSION['errors'])) {
    $Error = $_SESSION['errors'];
    var_dump($Error);
    unset($Error);
}


if (isset($_SESSION['old'])) {
    $old = $_SESSION['old'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>login</title>
</head>

<body>



    <div class="conatiner">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="../action/login.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Email</label>

                        <input type="text" class="form-control" name="email" <?php //if(!empty($old['email'])) 
                                                                                ?> value="<?php //echo $old['email'] ;
                                                                                                                            ?>">
                        <?php if (isset($Error['email']) ):  ?>
                        <p class="text-danger"> <?php
                         echo $Error['email'];
                                                unset($Error['email']); 
                                                 ?> </p>
                                                 <?php endif; ?>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>

                        <input type="password" class="form-control" name="password">
                    </div>




                    <input type="submit" class="btn btn-primary" value="Register" name="submit"></button>
                </form>


            </div>
        </div>

    </div>


    <link href="css/bootstrap.min.css" rel="stylesheet">


</body>



</html>