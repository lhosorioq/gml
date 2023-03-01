<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje - Prueba Tecnica</title>
</head>
<body>
    <p>Ha llegado un mensaje </p>
    <?php if ( $datosMensaje['tipo'] == 'usuario' ): ?>
        <p>Hola <?= $datosMensaje['mensaje'] ?></p>
        <p>Su usuario ha sido registrado satisfactoriamente.</p>
    <?php else: ?>
        <p>Informe de Usuarios</p>
        <?php foreach ($datosMensaje['mensaje'] as $datos => $key ): ?>
            <p><?= $datos . ' = ' . $key ?></p>
        <?php endforeach ?>
    <?php endif ?>
</body>
</html><?php /**PATH C:\Desarrollo\Aplicaciones\gml\gmlsoftware\resources\views/emails/mensaje-user.blade.php ENDPATH**/ ?>