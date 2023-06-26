<?php
    class Lugar extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }
        function obtenerTodos(){
            $ListadosLugares=$this->db->get("eleccion");
            if ($ListadosLugares->num_rows()>0){
                return $ListadosLugares->result();
            }
            return false;
        }
    }//cierre de la clase
?>
