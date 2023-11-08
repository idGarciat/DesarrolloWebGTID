<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === 'admin' && $password === '123') {
    session_start();
    $_SESSION['nivel'] = 'admin';
    echo 'autenticado correctamente';
  } else {
    echo 'no autenticado';
  }
}
?>