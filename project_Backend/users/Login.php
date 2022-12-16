<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    include "../db.php";
    $email_user=$_GET["email_user"];
    $password_user=$_GET["password_user"];
    $query=$db->prepare("select * from users where users.email_user = '".$email_user."' and users.password_user = '".$password_user."'");
    $query->execute();
    if($query->rowCount()>0){
        $data=$query->fetch(PDO::FETCH_OBJ);
        echo json_encode($data);
    } else {
        $json['success']=0;
        $json['message']='data not found';
        $json['myintro']='';
        echo json_encode($json);
    }
}else {
    echo "Method not supported !";
}
?>