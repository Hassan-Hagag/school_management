<?php
include_once "../conect.php";
$conect = new Conect;

$request=$_SERVER['REQUEST_METHOD'];

if($request =="GET"){
    $users=$conect->select('user');

        if(count($users)>0){
            print json_encode($users);
        }
        else{
            print json_encode(['message'=>"error"]);
        }
    }
if($request =="POST"){//بيستقبل ريكويست بوست
   if($conect->insert($_POST,'user')){
            print json_encode(['message'=>"student add success"]);
   }
   else {
            print json_encode(['message'=>"error"]);
   }
}


if($request=="DELETE"){
    $data=json_decode(file_get_contents("php://input"),true);
    $id=$data['id'] ?? ($_GET['id'] ?? null);
    if($conect->delete('user',$id)){
        print json_encode(['message'=>"delete success"]);
    }
    else{
        print json_encode(['message'=>"delete error"]);
    }
}

?>