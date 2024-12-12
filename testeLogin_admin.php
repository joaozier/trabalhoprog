<?php 
    session_start();
    if (isset($_POST['submit']) && !empty($_POST['email_admin']) && !empty($_POST['senha_admin'])) {
        // Acesso
        include_once('conexao.php');
        $email_admin=$_POST['email_admin'];
        $senha_admin=$_POST['senha_admin'];

        $sql="SELECT * FROM admin WHERE email_admin='$email_admin' and senha_admin='$senha_admin'";
        $result = $conexao->query($sql);

        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['email_admin']);
            unset($_SESSION['senha_admin']);
            echo "<script>
                alert('Conta inválida.');
                window.location.href = 'index_admin.php';
              </script>";
            // header('Location: index.php');
        } else {
            $_SESSION['email_admin'] = $email_admin;
            $_SESSION['senha_admin'] = $senha_admin;
            header('Location: home_admin.php');
        }        
    } else
        header('Location: index_admin.php');
?>