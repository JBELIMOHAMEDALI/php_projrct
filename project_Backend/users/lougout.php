<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_destroy();
    header("Location: http://localhost/frontEnd/getLogin.php");
die();
}
?>