<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "../db.php";
    $nom_article = $_POST['nom_article'];
    $titre_offre = $_POST['titre_offre'];
    $prix_remise_offre=$_POST['prix_remise_offre'];
    $frais_livraison_offre=$_POST['frais_livraison_offre']; 
    $date_debut_offre=$_POST['date_debut_offre'];
    $date_fin_offre=$_POST['date_fin_offre'];  
    $sql="INSERT INTO `offre`(`nom_article`,`titre_offre`, `prix_remise_offre`, `frais_livraison_offre`, `date_debut_offre`, `date_fin_offre`) VALUES 
    ( '$nom_article','$titre_offre', '$prix_remise_offre', '$frais_livraison_offre', '$date_debut_offre', '$date_fin_offre')";

    $res=$db->exec($sql);
    if($res){
        // $data=$query->fetchAll(PDO::FETCH_ASSOC);
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