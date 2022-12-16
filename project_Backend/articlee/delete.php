<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "../db.php";
    $id_article   = $_POST['id_article'];
        $sql="DELETE FROM `article` WHERE id_article =".$id_article  ;
        
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