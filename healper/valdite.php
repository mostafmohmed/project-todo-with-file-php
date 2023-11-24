<?php function validetemail($email)
{
    $error=null;
    if(empty($email)){
        $error="the email requierd";
    }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
        $error="the email not valited";
    }elseif(strlen($email)>=255){
        $error="xvvv";
    }
    return $error;
}

function valideteage($age) 
{
    $error=null;
    if(empty($age)){
        return $error;
    }
    if(is_numeric($age)){
       $age=(int)$age;
    }
     if(! is_int($age)){
        $error="the age must be number";
    }elseif($age<0){
        $error="the age must be esceed 0";
    }
    return $error;

    
}
 function validaename($name) 
 {
    $error=null;
    if(empty($name)){
$error="the name required";
    }elseif(strlen($name)>=255){
        $error="the name is,nt must exceed 255";

    }elseif(!is_string($name)||is_numeric($name)){
        $error="dfdfdfd";
    }
    return $error;
}
