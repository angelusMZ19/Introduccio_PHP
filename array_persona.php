<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Practica_1 </title>
</head>
<body>
    <?php
    $persona=['name'=>'Angelo','apellido'=>'Montenegro','edad'=>'20', 'nacimiento'=>'06/03/2003',
             'telefono'=>'645376593','direccion'=>'via julia', 'correo'=>'angelomontenegro200306@gmail.com',
             'trabajo'=>'si','estatura'=>'165']
        $nombre= "Angelo";
        $apellido= "Montenegro";
        $edad= "20";
        $nacimiento="06/03/2003";
        $telefono= "645376593";
        $direccion="Carrer Mas Duran";
        $correo= "angelomontenegro200306@gmail.com";
        $trabajo="Si";
        $estatura="165";
    ?>
    <div>
        <h1>
            Describimos a <?php echo $nombre." ".$apellido ?>
        </h1>

    </div>
        <strong><h2>Los datos de <?php echo $nombre ?> son:</h2></strong>
    <div>
        <ul>
            <li>
                Es diu: <?php echo $nombre ?>
            </li>

            <li>
                Te <?php echo $edad ?> anys
            </li>

            <li>
            Va neixer l'any: <strong> <?php echo  $nacimiento ?> </strong>
            </li>

            <li>
            El seu telèfon és: <?php echo $telefono ?>
            </li>

            <li>
            Viu a: <?php echo $direccion ?>
            </li>

            <li>
            El seu email és: <?php echo $correo ?>
            </li>

            <li>
            Treballa: <?php echo $trabajo ?>
            </li>

            <li>
            I medeix <?php echo $estatura ?>
            </li>
   
        </ul>
    </div>
</body>
</html>