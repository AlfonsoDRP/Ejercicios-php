<?php
class equipo{
    public $nombre;
    
    public function mostrarnombre(){
        echo "El nombre del equipo es ";
        echo $this->nombre;
    }
}
$equipo1 = new equipo("Lakers");
$equipo1->mostrarnombre();
?>