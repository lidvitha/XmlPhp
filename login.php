<?php
if(isset($_POST['Username'])){
    $user=$_POST['Username'];
    $pass=$_POST['Password'];
    $data=simplexml_load_file('userlist.xml') or die('No object'); 
    $found=0;
    foreach($data as $key=>$value){
        if($value->username==$user && $value->password==$pass){
             $found=1;
             break;
        }
    }
    if($found== 0){
        echo "Invalid Username/Password, Please try again!";
    }
    else{
        echo "Welcome $user<br>";
        echo "You have successfully logged in!";
    }
}
?>