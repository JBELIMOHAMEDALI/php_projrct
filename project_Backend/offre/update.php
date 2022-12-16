<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "../db.php";
    $nom_article = $_POST['nom_article'];
    $titre_offre = $_POST['titre_offre'];
    $descrption_offre=$_POST['descrption_offre'];
    $prix_remise_offre=$_POST['prix_remise_offre']; 
    $frais_livraison_offre=$_POST['frais_livraison_offre'];   
    $date_debut_offre=$_POST['date_debut_offre'];
    $date_fin_offre=$_POST['date_fin_offre'];
    $id_enseigne=$_POST['id_enseigne'];
    $id_offre=$_POST['id_offre'];

    $sql="UPDATE `offre` SET `nom_article`='".$nom_article."',
    `titre_offre`='".$titre_offre."',`descrption_offre`='".$descrption_offre."',`prix_remise_offre`='".$prix_remise_offre."',
    `frais_livraison_offre`='".$frais_livraison_offre."',`date_debut_offre`='".$date_debut_offre."',`date_fin_offre`='".$date_fin_offre."',
    `id_enseigne`='".$id_enseigne."' WHERE id_offre = ". $id_offre ;
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