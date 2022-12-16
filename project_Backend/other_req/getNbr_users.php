<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    include "../db.php";
    $query=$db->prepare("select count(*) as nbruser from users;");
    $query->execute();
    if($query->rowCount()>0){
        $data=$query->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data[0]);
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