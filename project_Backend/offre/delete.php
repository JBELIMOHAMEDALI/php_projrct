<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "../db.php";
    $id_offre   = $_POST['id_offre'];
        $sql="DELETE FROM `offre` WHERE id_offre =".$id_offre  ;
        
    $res=$db->exec($sql);
    if($res){    
            $json['success']=1;
            $json['delete']=true;
            echo json_encode($json);
        }else
        {
            $json['success']=0;
            $json['delete']=false;
            echo json_encode($json);
        }

} else {
    echo "Method not supported !";
}
?>