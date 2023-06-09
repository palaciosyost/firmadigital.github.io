<?php

if (isset($_POST['buscar'])) {
    if (empty($_POST['codigo'])) {
?>
        <div class="alerta">
            <p>El campo no puede ir vacio por favor rellenarlo</p>
        </div>
        <?php
    } else {
        $codigo = $_POST['codigo'];
        $obj = new firma();
        $datos = $obj->get_firma($codigo);
        if ($datos === null) {
        ?>
            <div class="alerta">
                <p>El codigo es incorrecto o no existe por favor intentarlo de nuevo</p>
            </div>
            <?php
        } else {
            // print_r($datos);
            foreach ($datos as $dato) {
                $blobURL = 'data:image/jpeg;base64,' . base64_encode($dato['firma_digital']);
            ?>
                <img width="200"  src="<?php echo $blobURL ?>" alt="">
                <hr>
                <p>Nombre: <?php echo $dato['nombre']; ?></p>
<?php
            }
        }
    }
}

?>