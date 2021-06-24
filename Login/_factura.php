<!--El header general de Mercadito Libre-->
<?php
    ob_start();
    // Con $_SERVER["DOCUMENT_ROOT"] resolví el problema de los path relativos
    include ($_SERVER["DOCUMENT_ROOT"] . '/Mercadito_Libre/header_cart.php');
?>


<!--Acá arranca todo lo del Login-->
<?php

session_start();
include ('_header.php');
include ('_helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('_mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>

<section id="main-site">
    <div class="container py-5">
        <div class="row">
            <div class="col-4 offset-4 shadow py-4">
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <img class="img rounded-circle" style="width: 200px; height: 200px;" src="assets\check.png">
                        <h5 class="text-center py-2">Hemos recibido tu pedido</h5>
                    </div>
                </div>
                <div class="user-info px-3">
                    <ul class="font-ubuntu navbar-nav">
                        <li class="nav-link"><b>Nombre: </b><span><?php echo isset($user['firstName']) ? $user['firstName'] : ''; ?></span></li>
                        <li class="nav-link"><b>Apellido: </b><span><?php echo isset($user['lastName']) ? $user['lastName'] : ''; ?></span></li>
                        <li class="nav-link"><b>Email: </b><span><?php echo isset($user['email']) ? $user['email'] : ''; ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "_footer.php";
?>


<!--El footer general de Mercadito Libre-->
<?php
    include ($_SERVER["DOCUMENT_ROOT"] . '/Mercadito_Libre/footer.php');
?>