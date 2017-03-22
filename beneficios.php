<?php

/**
 * Ximo Gil
 */
class beneficios
{
private $ventas=[];
private $totalVentas=0;

private $gastos=[];
private $totalGastos=0;

private $beneficios=0;

  //Funcion almacenarVenta
  public function almacenarVentas($venta)
  {
    if ($venta>0) {
      $this->ventas[]=$venta;
    }
  }

  //Funcion almacenarGastos
  public function almacenarGastos($gasto)
  {
    if ($gasto>0) {
      $this->gastos[]=$gasto;
    }
  }

  //Funcion para imprimirVentas
public function imprimirVentas()
{
  foreach ($this->ventas as $key => $value) {
    echo $value."<br>";
  }
}

//Funcion para imprimirGastos
public function imprimirGastos()
{
  foreach ($this->gastos as $key => $value) {
    echo $value."<br>";
  }
}
//Total Ventas
public function calcularVentas()
{
  $totalVentas=array_sum($this->ventas);
  echo $totalVentas;

}
//Total Gastos
public function calcularGastos()
{
  $totalGastos=array_sum($this->gastos);
  echo $totalGastos;

}
  //Funcion para calcularBeneficios
  public function calcularBeneficios()
  {
    $this->beneficios=0;
    $this->beneficios=array_sum($this->ventas)-array_sum($this->gastos);

  }
  //getCalculoBeneficio
  public function getCalculoBeneficio()
  {
    $this->calcularBeneficios();
    return $this->beneficios;
  }


//Getter
  public function getVentas()
  {
    return $this->ventas;
  }

public function getGasto()
{
  return $this->gastos;
}

//Setter

public function setVentas()
{

}

public function setGastos()
{

}
}



 ?>
