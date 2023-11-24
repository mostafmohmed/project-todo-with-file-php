<?php
require_once("../healper/auth.php");
require_once("../healper/store-json.php");
require_once("../healper/valdite.php");
session_start();
//
// var_dump($_POST);
// if(isset($_POST['submit'])){
    
//     $name=$_POST['name'];
   
//     // print_r($image);
//     // die();
   

   
//     //echo $error['age'];
//     $error['name']=validaename($name);
//    // echo $error['name'];
   
   
//     //var_dump($error);
//     if(chekerrorpage($error)){
//         $_SESSION['name']=$name;
//         $task=[
//             'name'=>$name,
           
//         ];
         
       
    
//        $jasondata=json_encode($task);
//        storeJson($task,"../date/task.json");
     
//       // header("location:../view/todo.php");
// echo"vvvvvvvvvvvvvv";

//     }else{
//         echo"hh";
//         $_SESSION['errors']=$error;
//         var_dump($error);
       
        
//     }
    

// }else{
//     echo"pleasr submet form first";
// }


// function chekerrorpage(array $arreay):bool{
//     foreach($arreay as $k=>$v){
//        if($v===null){
//         return true;
//        }
//        return false;
//     }

// }




if(isset($_POST['submit'])){
    //var_dump($_POST);
    $name=$_POST['name'];
   
    
    // print_r($image);
    // die();
   

    $error['name']=validaename($name);
   // echo $error['name'];
  
   //echo $error['name'];
   
    //var_dump($error);
    if(chekerrorpage($error)){
        $_SESSION['name']=$name;
        $protect
=[
            'name'=>$name,
            
           'user_id'=> $_SESSION['users']['id']
        ];
         
       
        
       
       $jasondata=json_encode( $protect);
       storeJson( $protect,"../date/task.json");
     
       header("Location:../view/todo.php");
echo"vvvvvvvvvvvvvv";

    }else{
        echo"hh";
        $_SESSION['errors']=$error;
        var_dump($error);
       
     //   header("location:add-protect.php");
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

