<?php
class Padre{

    public $nombre;
    protected $unidades;
    private $precio;

    public function __construct(string $nombre,int $unidades, float $precio){
        $this->nombre=$nombre;
        $this->unidades=$unidades;
        $this->precio=$precio;
    }

    public function saludar(){
        echo "hola, soy la clase padre";
    }

    public function saludarArgumento($argumento){
        echo "<i>hola </i>".$argumento.", <i>soy el padre</i>";
    }

    public function verTareas($mensaje){
        if ($mensaje="urgente"){
            echo "tareas urgentes";
        }   elseif ($mensaje="importante"){
                echo "tareas importantes";
            }
        else {
            echo "no hay tareas";
        }
    }
}