<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

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

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" >
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name = "prenom_user"  id="prenom_user" 
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name = "nom_user" id="nom_user"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name = "email_user" id="email_user"
                                        placeholder="Email Address">
                                </div>
                                <!--  -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            name = "passwared_user" id="passwared_user" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            name = "adr_user" id="adr_user" placeholder="Adresse">
                                    </div>
                                </div>

                                <!--  -->
                                <!-- tel_user -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name = "tel_user" id="tel_user"
                                        placeholder="Tel">
                                </div>

                                <a onClick="reply_click()" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                                <hr>
                               
                            </form>
                            <hr>
                            <div class="text-center">
                            </div>
                            <div class="text-center">
                                <a class="small"  href="getLogin.php">Already have an account? Login!</a>
                            </div>
                        </div>
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

});
</script>
<script type="text/javascript">
  function reply_click(){
    
    var prenom_user  ="";
    var nom_user  =""; 
    var email_user  =""; 
    var passwared_user  =""; 
    var Adresse_user  =""; 
    var tel_user ="";
    var Adresse_user =""
     nom_user = document.getElementById("nom_user").value ;
     prenom_user = document.getElementById("prenom_user").value ;
     email_user =document.getElementById("email_user").value ;
     passwared_user = document.getElementById("passwared_user").value ;
     Adresse_user = document.getElementById("adr_user").value ;
     tel_user = document.getElementById("tel_user").value ;
if(prenom_user ==""||nom_user ==""|| email_user ==""|| passwared_user ==""|| Adresse_user ==""||tel_user=="" ){
    alert("check your field")
} else {
    $.ajax({
      type: "POST",
      url: "http://localhost/frontEnd/project_Backend/users/insert.php",
      data: {nom_user:nom_user,prenom_user:prenom_user,email_user:email_user,password_user:passwared_user,adr_user:Adresse_user,tel_user:tel_user},
      success: function () {
        nom_user = document.getElementById("nom_user").value = "";
     prenom_user = document.getElementById("prenom_user").value = "";
     email_user =document.getElementById("email_user").value = "";
     passwared_user = document.getElementById("passwared_user").value = "";
     Adresse_user = document.getElementById("adr_user").value = "";
     tel_user = document.getElementById("tel_user").value = "";
     window.location.href = "http://localhost/frontEnd/getLogin.php?reg=ok" ;

      },
      error: function () {
        alert("error")

      }
    });  // end Ajax        
    return false;
  }

    // $.ajax({ 
    //     url: 'project_Backend/users/login.php',
    //     data: {email_user :email,password_user:Password},
    //     success:function(result){
    //         const res = result ;
    //         const obj = JSON.parse(res);
            

    //           window.location.href = "http://localhost/frontEnd/dash_.php?id_user="+obj.id_user+"&email_user="+obj.email_user; 
           

    // },
    //     error: function(jqXHR, textStatus, errorThrown) {
    //        alert("check email and password")
    //     }
    // });
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