<?php

    require '../includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Panel administrador</h1>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Crear Propiedad</a>
        <a href="/admin/propiedades/modificar.php" class="boton boton-amarillo">Modificar</a>
        <a href="/admin/propiedades/eliminar.php" class="boton boton-verde" style="background: tomato">Borrar</a>
    </main>

<?php incluirTemplate('footer'); ?>