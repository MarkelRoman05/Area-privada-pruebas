<?php
// Iniciar la sesión si aún no se ha iniciado
session_start();

// Verificar si el nombre de usuario está establecido en la sesión
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>Login Page</title>
      <style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f4f4f4;
        }
       
      </style>
    </head>
    <body>
        <div class='private-area'>
            <h2>Welcome to the Private Area, $username!</h2>
            <p>This is a restricted area accessible only to logged-in users.</p>
        </div>
        <div class='editor-area'>
            <form method='post' action=''>
                
            </form>
        </div>
    </body>
    </html>
    ";
} else {
    // Si el nombre de usuario no está establecido en la sesión, redireccionar a otra página (por ejemplo, página de inicio de sesión)
    echo "mal";
    exit;
}
