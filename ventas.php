<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>VENTAS: Ximo Gil</title>
  </head>
  <body>
    <?php
     include 'beneficios.php';

     $beneficios= new beneficios();
     //Gasto y venta 1
     $beneficios->almacenarVentas(50);
     $beneficios->almacenarGastos(45);


     //Gasto y venta 2
     $beneficios->almacenarVentas(125.6);
     $beneficios->almacenarGastos(115.2);

     //Gasto y venta 3
     $beneficios->almacenarVentas(23.4);
     $beneficios->almacenarGastos(11.9);

     echo "Los beneficios son: <br>";$beneficios->imprimirVentas();
     echo "<hr>";
     echo "Los gastos son: <br>";$beneficios->imprimirGastos();
     //Total Ventas
     echo "<hr>";
     echo "Total ventas: ";$beneficios->calcularVentas();

     //Total Gastos
     echo "<hr>";
     echo "Total gastos: ";$beneficios->calcularGastos();

     //Total Beneficios
     echo "<hr>";
     echo "BENEFICIOS: ".$beneficios->getCalculoBeneficio();

     ?>
  </body>
</html>
