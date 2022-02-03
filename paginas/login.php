<?php
    session_start();
    $conectar = mysqli_connect('localhost','root','','diagnostico') or die ('Unable to connect');

    include('complementos/header.php');
?>

<body>
    <main>
        <form action="login.php" method="post">
            <h2>Login</h2>
            <input type="text" class="login" name="usuario" id="usuario" placeholder="Usuario" require=""></br>
            <input type="password" class="login" name="password" id="password" placeholder="Contraseña" require=""><br>
            <input type="submit" class="login" name="boton" value="Ingresar">
        </form>
        <?php
            if(isset($_POST['boton'])){
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];

                $select = mysqli_query($conectar, "SELECT * FROM login WHERE usuario = '$usuario' AND password = '$password'");
                $row = mysqli_fetch_array($select);

                if(is_array($row)){
                    $_SESSION["usuario"] = $row ["usuario"];
                    $_SESSION["password"] = $row ["password"];
                }
                else{
                    echo'<script type="text/javascript">
                    alert("Usuario y/o contraseña invalido");
                    window.location.href="login.php";
                    </script>';
                }
            }
            if(isset($_SESSION["usuario"])){
                header("Location:index.php");
            }
        ?>
    </main>
    <div class="pie">
    <p>&copy;Keiry Yoseli Rodríguez González EXAMEN DIAGNOSTICO DAH</p>
    </div>
</body>
</html>