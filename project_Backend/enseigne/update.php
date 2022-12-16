<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "../db.php";
    $libelle_enseigne = $_POST['libelle_enseigne'];
    $id_enseigne = $_POST['id_enseigne'];
    $sql = "" ;
       if(isset($_POST['url'])){
        $url = $_POST['url'];
        $sql="UPDATE `enseigne` SET libelle_enseigne`='".$libelle_enseigne."',`url`=='".$url."' where id_enseigne = "$id_enseigne ;
        }else{
            $nom_boutique =  $_POST['nom_boutique'];
           $adr_boutique = $_POST['adr_boutique'];
          $tel_boutique =   $_POST['tel_boutique'];
        $sql="UPDATE`enseigne` SET `libelle_enseigne` = '"$libelle_enseigne"', `nom_boutique` = '"$nom_boutique"', `adr_boutique` = '"$adr_boutique"', `tel_boutique`= '"$tel_boutique"' where id_enseigne = "$id_enseigne ;
        }
    $res=$db->exec($sql);
    if($res){
        // $data=$query->fetchAll(PDO::FETCH_ASSOC);
        $json['success']=1;
        $json['message']=$res>0;
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