<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id_article=$_GET['id_article'];
    include "./../db.php";
    $query=$db->prepare("select * from article where id_article = ".$id_article);
    $query->execute();
    if($query->rowCount()>0){
        $data=$query->fetchAll(PDO::FETCH_ASSOC);
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