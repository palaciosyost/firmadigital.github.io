<?php
$objData = new Empleados();
$datos = $objData->get_empleados();

foreach ($datos as $data) {
?>
    <ul>
        <li><?php echo $data['nombre'] ?> <strong><?php echo $data['codigo_trabajador'] ?> </strong> </li>
    </ul>
<?php
}
