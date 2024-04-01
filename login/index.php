<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bkirolak";

session_start();

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

$usuario = $_POST['username'];
$contrasena = $_POST['password'];

// Checkear conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE username = '$usuario' AND password = '$contrasena'";
$result = $conn->query($sql);

$_SESSION['username'] = $usuario;

if ($result->num_rows === 1) {

  header("Location: ../area-privada/index.php");
  echo "Usuario autenticado correctamente";
} else {
  echo "Error de autenticación. Verifique sus datos.";
}

