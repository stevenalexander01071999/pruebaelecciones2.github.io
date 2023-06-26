<?php
  class Eleccion extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar3($datos){
        return $this->db->insert("eleccion",$datos);
    }


    //////////////////obtenr lista mapaListaGeneral  function obtenerTodos(){
    function obtenerTodos(){
      $ListadosLugares=$this->db->get("eleccion");
      if ($ListadosLugares->num_rows()>0){
          return $ListadosLugares->result();
      }
      return false;
  }

  //////////////////obtenr lista mapaListaGeneral  function obtenerTodos(){
  function obtenerTodos1(){

    $ListadosLugares1=$this->db->where('dignidad','Presidente');
    $ListadosLugares1 =$this->db->get("eleccion");
    if ($ListadosLugares1->num_rows()>0){
        return $ListadosLugares1->result();
    }
    return false;
}

//////////////////obtenr lista mapaListaGeneral  function obtenerTodos(){
function obtenerTodos2(){
  $ListadosLugares2=$this->db->where('dignidad','Asamblea Nacional');
  $ListadosLugares2=$this->db->get("eleccion");
  if ($ListadosLugares2->num_rows()>0){
      return $ListadosLugares2->result();
  }
  return false;
}

//////////////////obtenr lista mapaListaGeneral  function obtenerTodos(){
function obtenerTodos3(){
  $ListadosLugares3=$this->db->where('dignidad','Asamblea Provincial');
  $ListadosLugares3=$this->db->get("eleccion");
  if ($ListadosLugares3->num_rows()>0){
      return $ListadosLugares3->result();
  }
  return false;
}
    // //Funcion patra consultar Instructores
    // function obtenerTodos4(){
    //   $ListadosLugares4=$this->db->where('dignidad');
    //   $ListadosLugares4=$this->db->get("eleccion");
    //   if ( $ListadosLugares4->num_rows()>0) {////si hay datos
    //     return $ListadosLugares4->result();
    //
    //   }else {///no hay datos
    //     return false;
    //   }/////cierre else
    // }////cierre funcion obtener todos
    //
    //
    //     //Funcion patra consultar Instructores
    //     function obtenerTodos5(){
    //         $ListadosLugares5=$this->db->where('tipo');
    //       $ListadosLugares5=$this->db->get("Derecha");
    //       if ( $ListadosLugares5->num_rows()>0) {////si hay datos
    //         return $ListadosLugares5->result();
    //
    //       }else {///no hay datos
    //         return false;
    //       }/////cierre else
    //     }////cierre funcion obtener todos


    function obtenerTodos5(){
      $ListadosLugares5=$this->db->where('tipo','Derecha');
      $ListadosLugares5=$this->db->get("eleccion");
      if ($ListadosLugares5->num_rows()>0){
          return $ListadosLugares5->result();
      }
      return false;
    }

    function obtenerTodos6(){
      $ListadosLugares6=$this->db->where('tipo','Izquierda');
      $ListadosLugares6=$this->db->get("eleccion");
      if ($ListadosLugares6->num_rows()>0){
          return $ListadosLugares6->result();
      }
      return false;
    }
            // //Funcion patra consultar Instructores
            // function obtenerTodos6(){
            //     $ListadosLugares6=$this->db->where('tipo');
            //   $ListadosLugares6=$this->db->get("Izquierda");
            //   if ( $ListadosLugares6->num_rows()>0) {////si hay datos
            //     return $ListadosLugares6->result();
            //
            //   }else {///no hay datos
            //     return false;
            //   }/////cierre else
            // }////cierre funcion obtener todos


    /////BORRAR menu
    function borrar($id){
      $this->db->where("id",$id);
      if ($this->db->delete("eleccion")) {
        return true;
      } else {
        return false;
      } //cierre if
    } //cierre funcion borrar


  }//Cierre de la clase
 ?>
