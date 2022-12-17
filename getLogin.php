<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <center>
                        <div class="row" >
                            <div ></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                                 <?php require_once "./const.php" ?> 

                                    <form action="<?php echo postlogin ; ?>" method="POST" class="user">

                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a  class="btn btn-primary btn-user btn-block" id="object"  onClick="reply_click()" >Login

                                            
                                        </a>
                                        <hr>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="getregister.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
<script>

$( document ).ready(function() {

    let url = window.location.href;
    if(url.includes('?')){
        if(urlParams.get('reg') == "ok"){ alert("register successfully")}
    }
}); 
</script>
<script type="text/javascript">
  function reply_click(){
var email =document.getElementById("email").value ;
 var Password = document.getElementById("password").value ;

    $.ajax({ 
        url: 'project_Backend/users/login.php',
        data: {email_user :email,password_user:Password},
        success:function(result){
            const res = result ;
            const obj = JSON.parse(res);
        
            window.localStorage.setItem('id_user', JSON.stringify(obj.id_user));
            window.localStorage.setItem('email_user', JSON.stringify(obj.email_user));
            window.localStorage.setItem('nom', JSON.stringify(obj.nom_user));
            window.localStorage.setItem('prnom', JSON.stringify(obj.prenom_user));

              window.location.href = "http://localhost/frontEnd/dash_all.php"; 
           

    },
        error: function(jqXHR, textStatus, errorThrown) {
           alert("check email and password")
        }
    });
}

//   {   
//     $.ajax({ 
//         
//         data: {email:email,password:password},
//         success:function(result){
//             const res = reult ;
//             alert(res))

//         }),


</script>
</body>

</html>