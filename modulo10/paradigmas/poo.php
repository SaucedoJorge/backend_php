<?php 
    include "./participante.php"; 
    $au     = new participante();
    $list = $au->getList();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paradigma Funcional</title>
</head>
<body>
<h1> Paradigma Funcional</h1>
<form method="GET">
    <input type="search" name="search">
    <input type="submit" value="Buscar">
</form>
<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>pais</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as  $p) : ?>
            <tr>
                <td><?php echo $p->nombre; ?></td>
                <td><?php echo $p->apellido; ?></td>
                <td><?php echo $p->edad; ?></td>
                <td><?php echo $p->pais; ?></td>
            </tr> 
        <?php endforeach ?>
    </tbody>
</table>
</body>
</html>