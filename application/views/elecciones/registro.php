<h1  style="color:white">NUEVO POSTULANTE</h1>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<!-- Importacion de boostrap V5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!--importar api key googlemaps -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy8dm0BIYaplqYBXAmclsFJpXVawXhElc&libraries=places&callback=initMap"> </script>
<form class=""
action="<?php echo site_url();?>/elecciones/guardar3"
method="post">
<br>
<br>
    <div class="col-md-4" style="color:white">
      <label for="">Ingrese la dignidad a la que postula:</label>
      <br>
      <select type="text" id="dignidad" name="dignidad" value"">
      <option value ""></option> slot
      <option value="Presidente">Presidente</option> slot
      <option value="Asamblea Nacional ">Asamblea Nacional</option> slot
      <option value="Asamblea Provincial ">Asamblea Provincial</option> slot
      <option value ""></option> slot
      </select>
    </div>
    <div class="col-md-4"  style="color:white">
      <label for="">Ingrese tipo:</label>
      <br>
      <select type="text" id="tipo" name="tipo" value"">
      <option value ""></option> slot
      <option value="Derecha">Derecha</option> slot
      <option value="Izquierda ">Izquierda</option> slot
      <option value ""></option> slot
      </select>
    </div>

    <br>
    <br>
    <br>
    <div class="row"  style="color:white">
      <div class="col-md-4">
          <label for="">Apellido:</label>
          <br>
          <input type="text"
          placeholder="Ingrese su apellido"
          class="form-control"
          name="apellido" value=""
          id="apellido">
      </div>
      <div class="col-md-4">
          <label for="">Nombre:</label>
          <br>
          <input type="text"
          placeholder="Ingrese su nombre"
          class="form-control"
          name="nombre" value=""
            id="nombre">
      </div>
      <div class="col-md-4">
        <label for="">Movimiento:</label>
        <br>
        <input type="text"
        placeholder="Ingrese su Movimiento"
        class="form-control"
        name="movimiento" value=""
          id="movimiento">
      </div>
    </div>
    <br>
    <div class="row"  style="color:white">

      <div class="col-md-4">
          <label for="">Ingresos:</label>
          <br>
          <input type="number"
          placeholder="Ingrese sus ingresos"
          class="form-control"
          name="ingresos" value=""
          id="ingresos">
      </div>
      <div class="col-md-4">
          <label for="">Edad:</label>
          <br>
          <input type="number"
          placeholder="Ingrese su edad"
          class="form-control"
          name="edad" value=""
          id="edad">
      </div>
      <div class="col-md-4">
          <label for="">Latitud:</label>
          <br>
          <input type="text"
          placeholder="Seleccione en el mapa"
          class="form-control" readonly
          name="latitud" value=""
            id="latitud">
      </div>
      <div class="col-md-4">
          <label for="">Longitud:</label>
          <br>
          <input type="text"
          placeholder="Seleccione en el mapa"
          class="form-control" readonly
          name="longitud" value=""
          id="longitud">
      </div>
    </div>

    <br>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/elecciones/lista"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<br> <br><br><br>
<div class="row">
     <div class="col-md-12">
       <div id="mapaUbicacion" style="height:300px; width:100%;
       border:2px solid white;"></div>
     </div>
   </div>
 <!-- MAPA -->
   <script type="text/javascript">
     function initMap(){
       var centro=new google.maps.LatLng(-1.6641932288471328, -78.65904937250116);

       var mapa1=new google.maps.Map(
         document.getElementById('mapaUbicacion'),
         {
             center:centro,
             zoom:7,
             mapTypeId:google.maps.MapTypeId.ROADMAP
         }
       );
       var marcador=new google.maps.Marker({
         position:centro,
         map:mapa1,
         title:"Selecione su Ubicacion",
           icon:"<?php echo base_url('plantilla/assets/images/azul.png'); ?>",
         draggable:true
       });
        google.maps.event.addListener(marcador,'dragend',function(){
         document.getElementById('latitud').value=this.getPosition().lat();
         document.getElementById('longitud').value=this.getPosition().lng();
       });

     }//cierre de la funcion initMap
   </script>
