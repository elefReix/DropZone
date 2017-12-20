<?PHP
  /**
   *Pueden contener casi todo lo que tiene una clase
   *Metodos, atributos,
   */

  trait Personatrait{
    public $nombre ;
    public function mostrarNombre($nombre)
    {
      # code...
      echo $this-> nombre;
    }
    abstract function asignarNombre($nombre);
  }
  class Check{
    use Personatrait;
    public function asignarNombre($nombre){
      $this-> nombre = $nombre;
    }
    public function pruebaTrait(){
      //echo "trait funcionando";
    }
  }
  $objeto = new Check();
  $objeto -> asignarNombre("utilizando traits");
  echo $objeto->nombre . "<br/>";
  //echo $objeto -> pruebaTrait(). "<br/>" ;
?>
