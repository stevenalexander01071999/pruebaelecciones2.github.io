<?php
class Elecciones extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        //cargar modelo
       $this->load->model('Eleccion');
       $this->load->model('Lugar');
    }


  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //funcion que renderiza menuss//
     public function registro(){
     $this->load-> view('header');
     $this->load-> view('elecciones/registro');
     $this->load-> view('footer');
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //funcion que renderiza general//
       public function general(){
      $data["elecciones1"]=$this->Eleccion->obtenerTodos1();
      $data["elecciones2"]=$this->Eleccion->obtenerTodos2();
      $data["elecciones3"]=$this->Eleccion->obtenerTodos3();
       $this->load-> view('header');
       $this->load-> view('elecciones/general',$data);
       $this->load-> view('footer');
      }

      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //funcion que renderiza presidente//
         public function presidente(){
         $data["elecciones1"]=$this->Eleccion->obtenerTodos1();
         $this->load-> view('header');
         $this->load-> view('elecciones/presidente',$data);
         $this->load-> view('footer');
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //funcion que renderiza asambleaN//
           public function asambleaN(){
           $data["elecciones2"]=$this->Eleccion->obtenerTodos2();
           $this->load-> view('header');
           $this->load-> view('elecciones/asambleaN',$data);
           $this->load-> view('footer');
          }
          ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
          //funcion que renderiza asambleaP//
             public function asambleaP(){
            $data["elecciones3"]=$this->Eleccion->obtenerTodos3();
             $this->load-> view('header');
             $this->load-> view('elecciones/asambleaP',$data);
             $this->load-> view('footer');
            }

            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //funcion que renderiza la vista lista//
                      public function lista(){
                      $data['elecciones']=$this->Eleccion->obtenerTodos();
                      $this->load-> view('header');
                      $this->load-> view('elecciones/lista',$data);
                      $this->load-> view('footer');
                    }


                    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    //funcion que renderiza presidente//
                       public function tipo(){
                       $data["elecciones5"]=$this->Eleccion->obtenerTodos5();
                       $data["elecciones6"]=$this->Eleccion->obtenerTodos6();
                       $this->load-> view('header');
                       $this->load-> view('elecciones/tipo',$data);
                       $this->load-> view('footer');
                      }


              //funcion que renderiza la vista inicio//
                  public function inicio(){
                  $this->load-> view('header');
                  $this->load-> view('elecciones/inicio');
                  $this->load-> view('footer');
              }

              public function guardar3(){
                $datosNuevoEleccion=array(
                  "dignidad"=>$this->input->post('dignidad'),
                  "apellido"=>$this->input->post('apellido'),
                  "nombre"=>$this->input->post('nombre'),
                  "movimiento"=>$this->input->post('movimiento'),
                  "latitud"=>$this->input->post('latitud'),
                  "longitud"=>$this->input->post('longitud'),
                  "ingresos"=>$this->input->post('ingresos'),
                  "edad"=>$this->input->post('edad'),
                  "tipo"=>$this->input->post('tipo')
                );
                if ($this->Eleccion->insertar3($datosNuevoEleccion)) {
                  redirect('elecciones/lista');
                } else {
                  echo "<h1>ERROR AL INSERTAR</h1>";
                }
              }


              /////////////funcion eliminar menus
              public function eliminar($id){
                if ($this->Eleccion->borrar($id)) {  //invocando al modelo
                    redirect('elecciones/lista');
                } else {
                  // code...
                }

              }




 }///cierre de la clase

?>
