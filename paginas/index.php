<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }

    include('complementos/header.php');
?>

<body>  
  <main>
        <div>
            <h2>Bienvenido <?php echo $_SESSION["usuario"]; ?> </h2>
        </div>
        <div>
            <form action="index.php" method="post">
                <input type="number" name="n" id="n" require="">
                <input type="submit" name="calcular" value="Aceptar">
            </form>
        </div>
        <div>
            <table class="factoriales">
                <thead>
                    <tr>
                        <th>Iteración</th>
                        <th>Expresión</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                <?php  
                    if(isset($_POST["calcular"])){
                        $n = $_POST["n"]; 
                        if($n == 0){
                            echo 
                                '<tr>
                                    <td>0</td>
                                    <td>1 * 0</td>
                                    <td>1</td>
                                </tr>';
                        } 
                        else {
                            $factorial = 1;
                            for ($i = 1; $i <= $n; $i++){ 
                            $factorial = $factorial * $i; 
                            $contador = $i-1;
                                echo 
                                    '<tr>
                                        <td>'. $i .'</td>
                                        <td>'. $i .' * !'. $contador .'</td>
                                        <td>'. $factorial .'</td>
                                    </tr>';
                            } 
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
        <a href="salir.php">Cerrar sesión</a>
    </main>
    <div class="pie">
    <p>&copy;Keiry Yoseli Rodríguez González EXAMEN DIAGNOSTICO DAH</p>
    </div>
</body>
</html>