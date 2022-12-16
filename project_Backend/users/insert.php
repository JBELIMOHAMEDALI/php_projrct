<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "../db.php";
    $nom_user = $_POST['nom_user'];
    $prenom_user=$_POST['prenom_user'];
    $email_user=$_POST['email_user']; 
    $password_user=$_POST['password_user'];   
    $adr_user=$_POST['adr_user'];
    $tel_user=$_POST['tel_user'];
echo($password_user);
    $sql="INSERT INTO `users` ( `nom_user`, `prenom_user`, `email_user`, `password_user`, `adr_user`, `tel_user`) VALUES ( '$nom_user', '$prenom_user', '$email_user', '$password_user', '$adr_user', '$tel_user');";
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