<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $errors = [];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El correo electrónico no es válido.";
    }

    if ($password1 !== $password2) {
        $errors[] = "Las contraseñas no coinciden.";
    }

    if (empty($errors)) {
        echo "<div class='alert alert-success' role='alert'>¡Identificación correcta!</div>";
    } else {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger' role='alert'>$error</div>";
        }
    }
}
?>