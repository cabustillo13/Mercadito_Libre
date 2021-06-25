<!--El header general de Mercadito Libre-->
<?php
    ob_start();
    // Con $_SERVER["DOCUMENT_ROOT"] resolví el problema de los path relativos
    include ($_SERVER["DOCUMENT_ROOT"] . '/Mercadito_Libre/header_cart.php');
?>

<?php
    //session_start();
    include ('_header.php');
    include ("_helper.php");
?>

<?php
    $user = array();
    require ('_mysqli_connect.php');

    if(isset($_SESSION['userID'])){
        $user = get_user_info($con, $_SESSION['userID']);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require ('_login-process.php');
    }
?>

<!-- registration area -->
<section id="login-form">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Ingresa a tu cuenta para comprar</h1>
                <span class="font-ubuntu text-black-50">Crear una <a href="_register.php">Nueva Cuenta</a></span>
            </div>
            <div class="d-flex justify-content-center">
                <form method="post" enctype="multipart/form-data" id="log-form">

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" required name="email" id="email" class="form-control" placeholder="(*) Email">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="password" id="password" class="form-control" placeholder="(*) Contraseña">
                        </div>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-primary rounded-pill text-light px-5">Ingresar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<!-- #registration area -->


<?php
// footer.php
include ('_footer.php');
?>

<!--El footer general de Mercadito Libre-->
<?php
    include ($_SERVER["DOCUMENT_ROOT"] . '/Mercadito_Libre/footer.php');
?>