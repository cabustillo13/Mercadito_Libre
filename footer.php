</main>
<!-- !start #main-site -->

<!-- start #footer -->
<footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">Mercadito Libre</h4>
                <p class="font-size-14 font-rale text-white-50">Destinado a los pequeños y medianos comerciantes que trabajan por una mejor Argentina.</p>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Recibir catálogo mensual</h4>
                <form class="form-row" action="" method="post">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Tu mail" value="" name="username" />
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2" name="submit" value="Submit" />Suscríbete</button>  
                    </div>
                </form>

                <!--Guardar mail para newsletter-->
                <?php
                    if (isset($_POST['submit'])) { 
                        $email= $_POST['username'];

                        # Evaluar si el mail se escribió correctamente
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            
                            # Establecer conexión
                            $con = mysqli_connect("127.0.0.1","root","","shopee");

                            # Revisar conexión
                            if (mysqli_connect_errno()) {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                exit();
                            }
                            
                            # Evaluar si el email es nuevo o ya se había registrado
                            $verify = "SELECT `email` FROM `suscriptores` WHERE `email`='$email'";
                            $result = $con->query($verify);
                            if ($result->num_rows > 0) {
                                # Este mail ya fue registrado previamente
                                echo 'Este mail ya fue registrado antes.';
                            }
                            else {
                                # Nuevo mail
                                $sql = "INSERT INTO `suscriptores` VALUES ('$email')";

                                # Revisar query
                                if ($con->query($sql) === TRUE) {
                                    echo($email." registrado con éxito.");     
                                }else {
                                    echo "ERROR de conexión";
                                }
                                mysqli_close($con);
                            }
                        }
                        else{
                            echo("$email NO es válido");
                        }    
                    }
                ?>

                <!--Evitar que aparezca cartel de reenviar Form cada vez que se recarga la página-->
                <script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                </script>

            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">¡Contáctame!</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="mailto:cabustillo13@hotmail.com">Enviar Mail</a class="font-rale font-size-14 text-white-50 pb-1">
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Redes Sociales</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="https://github.com/cabustillo13" class="font-rale font-size-14 pb-1">Github</a>
                    <a href="https://www.linkedin.com/in/carlos-bustillo/" class="font-rale font-size-14 pb-1">Linkedin</a>
                </div>
            </div>
            
        </div>
    </div>
</footer>
<div class="copyright text-center bg-dark text-white py-2">
    <p class="font-rale font-size-14">&copy; Copyrights 2021. Hecho por <a href="https://www.linkedin.com/in/carlos-bustillo/" class="color-second">Carlos Bustillo</a></p>
</div>
<!-- !start #footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

<!-- Custom Javascript -->
<script src="index.js"></script>
</body>
</html>
