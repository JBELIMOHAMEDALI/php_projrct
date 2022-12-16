<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "../db.php";
    $libelle_enseigne = $_POST['libelle_enseigne'];
     
    $sql = "" ;
       if(isset($_POST['url'])){
        $url = $_POST['url'];
        $sql="INSERT INTO `enseigne`(`libelle_enseigne`, `url`) VALUES
        ('$libelle_enseigne','$url');";
        }else{
            $nom_boutique =  $_POST['nom_boutique'];
           $adr_boutique = $_POST['adr_boutique'];
          $tel_boutique =   $_POST['tel_boutique'];
        $sql="INSERT INTO `enseigne`(`libelle_enseigne`, `nom_boutique`, `adr_boutique`, `tel_boutique`) VALUES
       ( '$libelle_enseigne', '$nom_boutique', '$adr_boutique', '$tel_boutique');";
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