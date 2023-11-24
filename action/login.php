<?php
session_start();
require_once("../healper/valdite.php");
require_once("../healper/auth.php");

require_once("../healper/store-json.php");
if(isset($_POST['submit'])){
    //var_dump($_POST);
   
    $email=$_POST['email'];
    
    // print_r($image);
    // die();
    $password=$_POST['password'];
   

     $error['email']= validetemail($email);
   // echo $error['email'];
   
   // echo $error['name'];
   echo  $password;
   //echo $error['name'];
   
    //var_dump($error);
    if(chekerrorpage($error)){
      
      $alluser=json_decode(file_get_contents("../date/users.json"),true);
      echo"<pre>";
      var_dump($alluser);
      echo "</pre>";
      foreach($alluser as $user){
        var_dump($user);
        if(true){
           // header("location:../view/card.php");
        echo 
           storeregister($user);
           header("location:../view/card.php");
          
        }else{
            echo"kjk";
            die;
            header("location:../view/login.php");
           
        }
      }
     

    }else{
        echo"hh";
        $_SESSION['errors']=$error;
        var_dump($error);
        $_SESSION['old']=[
            'name'=>$name,
            'age'=>$age,
            'email'=>$email,
        ];
        header("location:../view/login.php");
    }
    

}else{
    echo"pleasr submet form first";
}


function chekerrorpage(array $arreay):bool{
    foreach($arreay as $k=>$v){
       if($v===null){
        return true;
       }
       return false;
    }

}


