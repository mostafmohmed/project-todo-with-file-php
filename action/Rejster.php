<?php
require_once("../healper/valdite.php");
require_once("../healper/auth.php");

require_once("../healper/store-json.php");
// var_dump($_POST);
// die;
if(isset($_POST['submit'])){
    //var_dump($_POST);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
   
    // print_r($image);
    // die();
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];

     $error['email']= validetemail($email);
   // echo $error['email'];
    $error['age']=valideteage($age);
    //echo $error['age'];
    $error['name']=validaename($name);
   // echo $error['name'];
   
   //echo $error['name'];
   
    //var_dump($error);
    if(chekerrorpage($error)){
        $_SESSION['name']=$name;
        $ueer=[
            'name'=>$name,
            'age'=>$age,
            'email'=>$email,
            'password'=> $password
        ];
       
          $storedUseer= storeJson($ueer,"../date/users.json");
        storeregister($storedUseer);
        
      header("location:../view/card.php");

    }else{
        echo"hh";
        $_SESSION['errors']=$error;
        var_dump($error);
        $_SESSION['old']=[
            'name'=>$name,
            'age'=>$age,
            'email'=>$email,
        ];
        header("location:../view/rejaster.php");
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


