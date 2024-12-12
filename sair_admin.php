<?php
session_start();
unset($_SESSION['email_admin']);
unset($_SESSION['senha_admin']);
header('Location: index_admin.php');
?>