<?php

$error = array();

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "Olvidaste ingresar tu mail";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "Olvidaste ingresar tu contraseña";
}

if(empty($error)){
    // sql query
    $query = "SELECT userID, firstName, lastName, email, password, profileImage FROM user WHERE email=?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q, $query);

    // bind parameter
    mysqli_stmt_bind_param($q, 's', $email);
    //execute query
    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if (!empty($row)){
        // verify password
        if(password_verify($password, $row['password'])){
            header("location: _factura.php");
            exit();
        }
    }else{
        print "  Debes crear una nueva cuenta primero para realizar una compra.";
    }

}else{
    echo "Debes colocar tu email y contraseña correctamente";
}
