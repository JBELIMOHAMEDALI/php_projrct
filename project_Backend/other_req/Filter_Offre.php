<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $min_prix=$_GET['min_prix'];
    $max_prix=$_GET['max_prix'];
    include "./../db.php";
    $query=$db->prepare("SELECT * from offre WHERE offre.prix_remise_offre >=".$min_prix." and offre.prix_remise_offre >= ".$max_prix." and (offre.date_debut_offre)>= (SELECT CURDATE()) and (SELECT CURDATE()) <= (offre.date_fin_offre)");
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