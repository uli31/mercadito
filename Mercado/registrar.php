<?php
    session_start();
    include 'base_de_datos.php';  
    $email=$_POST['email'];
    $contrasena=$_POST['contrasena'];


    $validar=mysqli_query($conexion,"SELECT * FROM usuario WHERE email='$email' and contrasena='$contrasena'");
    
      if(mysqli_num_rows($validar)>0){
        $_SESSION['email']=$email;
        header("Location: bienvenido.php");
            exit;

      }  else{
        echo "<script > alert('Usuarion no encontrado');
        window.location = 'index.php';
       
</script>";     
exit;
      }








?>  