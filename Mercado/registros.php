<?php
    include 'base_de_datos.php';
    $nombre=$_POST['Nombres'];
    $apellido=$_POST['Apellidos'];
    $email =$_POST['email'];
    $contrasena= $_POST['contrasena'];
    $query="INSERT INTO usuario(Nombres,Apellidos,email,contrasena)
    VALUES('$nombre','$apellido','$email','$contrasena') ";

    $ejecutar= mysqli_query($conexion,$query);

    if($ejecutar){
        echo "<script > alert('Usuario Registrado');
                window.location = 'index.php';
        </script>"; 
    }else{
        echo "<script > alert('Usuario Registrado');
        window.location = 'registro.php';
</script>"; 

    }
?>
