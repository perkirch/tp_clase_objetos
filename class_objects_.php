<?php

class Jugador{
 public $nombre;
 public $apellido;
 public $posicion;
 public $goles;
 public $soyCrack;



 function patear($habil, $potencia){
    if($habil=="zurda" && $potencia>=50)
    return true;
    else{
        echo "false";
    }
 }

 function cabecear(){
    echo"Paaaaafffffff!!!";
 }

 function pifiar(){

    echo "Qué burro soy, Diosss!!!";
 }

 function atajar ($tiro, $potencia){
    if($tiro==true && $potencia<50)
    return true;
    else
    echo "No la pude sacar";

    }


   // funcion set_name/más avanzado
    function set_name($nombre){
      $this-> nombre = $nombre ;
   }
   // function __construct($nombre, $apellido, $posicion, $goles, $soyCrack){
   //    $this-> nombre = $nombre ;
   //    $this-> apellido = $apellido ;
   //    $this-> posicion = $posicion ;
   //    $this-> goles = $goles ;
   //    $this-> soyCrack = $soyCrack;
   // }
      
   }
   
 $cuti=new Jugador("Cristian", "Romero", "2", "34", true);
 echo $cuti-> nombre;

$lisandro = new Jugador();
$lisandro -> set_name("Lisandro");
// echo $lisandro -> nombre;


$messi = new Jugador();
$messi-> nombre = "Lionel";
$messi-> apellido = "Messi";
$messi-> posicion = "10";
$messi-> goles = "900";
$messi-> soyCrack= true;

echo $messi-> nombre;
echo $messi-> cabecear();
echo $messi->patear("zurda", 65);
echo "<br>";

$diMaria = new Jugador();
$diMaria-> nombre = "Ángel";
$diMaria-> apellido = "Di María";
$diMaria-> posicion = "11";
$diMaria-> goles = "650";
$diMaria-> soyCrack= true;
echo $diMaria-> apellido;
echo $diMaria-> cabecear();
echo $diMaria->patear("derecha", 65);
echo "<br>";

$loCelso = new Jugador();
$loCelso-> nombre = "Gio";
$loCelso-> apellido = "Lo Celso";
$loCelso-> posicion = "8";
$loCelso-> goles = "123";
$loCelso-> soyCrack=false;
echo $loCelso-> apellido;
echo $loCelso-> pifiar();
echo $loCelso->patear("zurda", 30);
echo "<br>";


$dibu = new Jugador();
$dibu-> nombre = "Emiliano";
$dibu-> apellido = "Martinez";
$dibu-> posicion = "1";
$dibu-> goles = "0";
$dibu-> soyCrack= true;
echo $dibu-> apellido;
echo $dibu-> atajar(true, 30);
echo $dibu-> atajar(false, 60);
echo $dibu-> atajar(true, 60);
echo $dibu->patear("zurda", 80);
echo "<br>";



$tagliafico = new Jugador();
$tagliafico-> nombre = "Nicolás";
$tagliafico-> apellido = "Tagliafico";
$tagliafico-> posicion = "3";
$tagliafico-> goles = "17";
$tagliafico-> soyCrack= false;
echo $tagliafico-> apellido;
echo $tagliafico-> pifiar();
echo $tagliafico->patear("zurda", 70);


?>