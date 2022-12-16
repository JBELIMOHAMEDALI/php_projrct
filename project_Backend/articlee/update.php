<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "../db.php";
    $libelle = $_POST['libelle'];
    $marque = $_POST['marque'];
    $categorie=$_POST['categorie'];
    $prix_user=$_POST['prix_user']; 
    $id_enseigne =$_POST['id_enseigne '];   
    $id_article =$_POST['id_article '];
    $sql="UPDATE `article` SET `libelle`='".$libelle."',`marque`='".$marque."',`categorie`='".$categorie."',`prix_user`='".$prix_user."',`id_enseigne`='".$id_enseigne."' WHERE id_article = ".$id_article;
    $res=$db->exec($sql);
    if($res){    
            $json['success']=1;
            $json['update']=true;
            echo json_encode($json);
        }else
        {
            $json['success']=0;
            $json['update']=false;
            echo json_encode($json);
        }

} else {
    echo "Method not supported !";
}
?>