<?php
session_start();
if(isset($_POST['login'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            if($_SESSION['username'] == 'Inez' and $_SESSION['password']=='inez123') {
                        header("location:halaman_awal.php");
            } else {
                        // jika login salah //      
                        echo "Login gagal <a href='login.php'>Login</a>";

            }
}
?>