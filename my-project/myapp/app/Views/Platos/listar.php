<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platos de Menu</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" 
    crossorigin="anonymous">

</head>
<body>
    Lista De Platos
    <?php print_r($platos); ?>
    <div class="container">
        <table class="table table-dark">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Descripcion</td>
                    <td>Precio</td>
                    <td>Foto</td>
                    <td>Editar/Borrar</td>
                </tr>
            </tbody>
        </table>

    </div>
</body>
</html> 