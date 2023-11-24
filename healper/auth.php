<?php

function storeregister(array $user){
    $_SESSION['users']=$user;
    $_SESSION['is_loged_in']=true;
    }
    
    
    
    
    function chekIslogin():bool
    {
        return isset($_SESSION['is_loged_in'])&&$_SESSION['is_loged_in']===true;
    }
?>