<?php   

    require '../../includes/config/database.php';

    $db = conectarDB();

    echo '<pre>';
    echo var_dump($_SERVER['REQUEST_METHOD']);
    echo '</pre>';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $banos = $_POST['banos'];
        $cocheras = $_POST['cocheras'];
        $vendedor = $_POST['vendedor'];

        //insertar en la base de datos

        $sql = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, bano, cochera, vendedorId)
        VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$banos', '$cocheras', '$vendedor')";

        $resultado = mysqli_query($db, $sql);

        if($resultado){
            echo 'insertado correctamente';
        }
    }

    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <a href="/admin/index.php" class="boton boton-verde">Volver</a>
        <h1>Crear propiedad</h1>

        <form action="/admin/propiedades/crear.php" class="formulario" method="POST">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo de la propiedad</label>
                <input type="text" id="titulo" name="titulo">

                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio">

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información propiedad</legend>

                <label for="habitaciones">Cantidad de habitaciones</label>
                <input type="number" id="habitaciones" name="habitaciones" min="1" max="9">

                <label for="banos">Cantidad de baños</label>
                <input type="number" id="banos" name="banos" min="1" max="9">

                <label for="cocheras">Cantidad de cocheras</label>
                <input type="number" id="cocheras" name="cocheras" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor" id="vendedor">
                    <option value="1">Luis</option>
                    <option value="1" selected>Pequeño Timmy</option>
                </select>
            </fieldset>

            <input type="submit" value="Agregar propiedad" class="boton boton-verde">
        </form>
    </main>

<?php incluirTemplate('footer'); ?>