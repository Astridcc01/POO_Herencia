<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>POO en PHP</h2>
    <?php echo "<h3>Clases y objetos</h3>";
    require('./clases/clase1.php');
    require('./clases/Cliente.php');
    require('./clases/Productos.php');
    require('./clases/Padre.php');
    require('./clases/Hijo.php');
    require('./clases/Hija.php');
    $objeto=new ClasePropiedades();//instanciar
    echo $objeto->stock;
    echo "<br>";
    $cliente1=new Cliente("indra",5,true);
    echo $cliente1->getNombre();
    //modifica el nombre del cliente
    echo "<br>";
    $cliente1->setNombre("Repsol");
    //consulta el nombre de nuevo para ver el cambio
    echo $cliente1->getNombre();

    $producto1=new Productos("100","camisa",5,7.99);
    echo "<br>";
    echo $producto1->getPrecio();
    $producto1->setPrecio(7.95);
    echo "<br>";
    echo $producto1->getPrecio();

    echo "<br>";
    echo "<h4>El precio total de la factura es: </h4>";

    echo "<br>";
    $padre=new Padre("nombre1",10,9.95);
    //echo $padre->nombre; //no puede acceder a protected
    //echo $padre->precio; // no puede acceder a private
    
    $hijo = new Hijo("Sevilla");
    $hijo->saludar();
    $hijo->ciudad;


    echo "<br>";
    $argumento="nombre2";
    $padre->saludarArgumento($argumento);
    

    echo "<br>";
    $hijo2 = new Hijo ("Valencia","hijo2@gmail.com");
    echo $hijo2->ciudad;
    echo "<br>";
    echo $hijo2->email;

    $mensaje="urgente";
    echo "<br>";
    echo $padre->verTareas($mensaje);

    echo "<br>";
    $hija = new Hija("María","maria@gmail.com");
    echo "<br>";
    $mensaje="importante";
    $hija->verTareas($mensaje);
    echo "<br>";
    $hija->saludar();

    echo "<br>";
    $hijo->saludar();

    ?>
</body>
</html>