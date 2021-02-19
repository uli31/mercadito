<?php
   include 'base_de_datos.php';  
session_start();

if(!isset($_SESSION['email'])){
    echo '<script type="text/javascript">
    alert("AUN NO TE REGISTRAS");
    window.location="Login.php";
    </script>';

   // header("location:index.php");
   session_destroy();

    die();
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>Mercadito</title>
</head>

<body>
    <div class="contenedor">
        <div class="tablas">
            <h2>Mercadito</h2>
            <table>
                <tr>
                    <td>ID</td>
                    <td>PRODUCTO</td>
                    <td>TIPO</td>
                    <td>PRECIO</td>
                </tr>


                <?php
        
        $sql="SELECT * FROM productos";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){

      
        
        ?>
                <TR>
                    <TD>
                        <?php echo $mostrar['id']?>
                    </TD>
                    <TD>
                        <?php echo $mostrar['producto']?>
                    </TD>
                    <TD>
                        <?php echo $mostrar['tipo']?>
                    </TD>
                    <TD>
                        <?php echo $mostrar['precio']?>
                    </TD>

                </TR>
                <?php     }?>
            </table>
        </div>

        <br>
        <br>

        <div class="Buscador">
            <form action="bienvenido.php" method="post">
                <input type="text" name="id" id="id" placeholder="DIME EL ID DEL PRODUCTO"><br> <br>
                <input type="number" name="kg" id="kg" placeholder="Dime Cuanto Kilos "> <br> <br>
                <button type="submit" value="consulta" name="consulta">Buscar</button>
            </form>
            <br>
        </div>



        <?php
            if(isset($_POST['consulta'])){
            $id=$_POST['id'];
            $cantidad =$_POST['kg'];
            $validar=mysqli_query($conexion,"SELECT * FROM productos WHERE id='$id'");
            while($consulta=mysqli_fetch_array($validar)){

                echo "
               <div id='productos'>
                <p id='idP'> El id ".$consulta['id']."</p>
                <p id='Pro'> Producto ".$consulta['producto']."</p>
                <p id='Tip'> Fruta o Verdura ".$consulta['tipo']."</p>
                <p id='Pe'> Precio por Kg ".$consulta['precio']."</p>
                <p id='Ca'> Kilos que va llevar ".$cantidad."</p>   
                <p id='Precio'>".$consulta['precio']."</p>
                <p id='Cantidad'>".$cantidad."</p>   

               
               
                ";

                
            

        }
    }
        
        ?>
        <a href="#" class="agregar-carrito" data-id="11">Agregar Al Carrito</a>

    </div>


    
 </div>
    <script src="compras.js"></script>
</body>

</html>