<!--El header general de Mercadito Libre-->
<?php
    ob_start();
    // Con $_SERVER["DOCUMENT_ROOT"] resolví el problema de los path relativos
    include ($_SERVER["DOCUMENT_ROOT"] . '/Mercadito_Libre/header_cart.php');
?>

<?php
    // header.php
    include ('_header.php');
?>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require ('_register-process.php');
        }
    ?>

    <!-- registration area -->
    <section id="register">
        <div class="row m-0">
            <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark">Regístrate</h1>
                    <span class="font-ubuntu text-black-50">¿Ya tienes cuenta? <a href="_login.php">Login</a></span>
                </div>
                <div class="d-flex justify-content-center">
                    <form action="_register.php" method="post" enctype="multipart/form-data" id="reg-form">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName'];  ?>" name="firstName" id="firstName" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['LastName'])) echo $_POST['LastName'];  ?>" name="LastName" id="LastName" class="form-control" placeholder="Apellido">
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>" required name="email" id="email" class="form-control" placeholder="(*) Email">
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password" required name="password" id="password" class="form-control" placeholder="(*) Contraseña">
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="(*) Confirmar Contraseña">
                                <small id="confirm_error" class="text-danger"></small>
                            </div>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="agreement" class="form-check-input" required>
                            <label for="agreement" class="form-check-label font-ubuntu text-black-50">Acepto los <a href="https://policies.google.com/terms?hl=es">términos y condiciones. </a></label>
                        </div>

                        <div class="submit-btn text-center my-5">
                            <button type="submit" class="btn btn-primary rounded-pill text-light px-5">Continuar</button>
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