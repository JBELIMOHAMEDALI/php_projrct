<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "../db.php";
    $id_enseigne   = $_POST['id_enseigne'];
        $sql="DELETE FROM `enseigne` WHERE id_enseigne =".$id_enseigne  ;
        
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