<?php 
session_start();
include "db_conn.php";
if (isset($_POST['mail']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['mail']);
    $pass = validate($_POST['password']);
    if(empty($email)){
        header("location: ../index.php?error=Email Requerido");
        exit();
    } else if(empty($pass)){
        header("location: ../index.php?error=Contraseña Requerida");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND
        password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['email'] === $email && $row['password'] === $pass){
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../assets/parts/admin.php?Correct Access");
                exit();
            } else {
                header("location: ../index.php?error=Datos Incorrectos");
                exit(); 
            }
        } else {
            header("location: ../index.php?error=Datos Incorrectos");
            exit();  
        }
    }

} else {
    header("location: ../index.php");
    exit();
};
?>