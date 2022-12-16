<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "../db.php";
    $libelle = $_POST['libelle'];
    $marque = $_POST['marque'];
    $categorie=$_POST['categorie'];
    $prix_user=$_POST['prix_user']; 
    $id_enseigne=$_POST['id_enseigne']; 

    $sql="INSERT INTO `article`( `libelle`, `marque`, `categorie`, `prix_user`,`id_enseigne`) VALUES 
    ( '$libelle','$marque', '$categorie', '$prix_user','$id_enseigne');";
    $res=$db->exec($sql);
;
    if($res){

        $json['success']=1;
        $json['message']=$res>0;
        echo json_encode($json);

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