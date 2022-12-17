<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "../db.php";
    $libelle_enseigne ="";
    $url ="";
    $nom_boutique ="";
    $adr_boutique = "";
    $tel_boutique = "";
        $libelle_enseigne = $_POST['libelle_enseigne'];
        $url = $_POST['url'];
        $nom_boutique =  $_POST['nom_boutique'];
        $adr_boutique = $_POST['adr_boutique'];
        $tel_boutique =   $_POST['tel_boutique'];
          $sql="INSERT INTO `enseigne`(`libelle_enseigne`,`url`, `nom_boutique`, `adr_boutique`, `tel_boutique`) VALUES ('".$libelle_enseigne."','".$libelle_enseigne."','".$libelle_enseigne."','".$libelle_enseigne."','".$libelle_enseigne."');";//nom_boutique
  
                $res=$db->exec($sql);
        
    $res=$db->exec($sql);
    if($res){
        $obj = (object) array('libelle_enseigne'=>$libelle_enseigne,
        'url'=>$url,
        'nom_boutique'=>$nom_boutique,
        'adr_boutique'=>$adr_boutique,
        'tel_boutique'=>$tel_boutique );
        // $data=$query->fetchAll(PDO::FETCH_ASSOC);
        $json['success']=1;
        $json['message']=$obj;
        echo json_encode($json);

    } else {
        print_r($sql);
        $json['success']=0;
        $json['message']='data not found';
        $json['myintro']='';
        echo json_encode($json);
    }
}else {
    echo "Method not supported !";
}
?>