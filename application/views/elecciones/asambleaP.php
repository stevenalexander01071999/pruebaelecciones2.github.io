<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<!-- Importacion de boostrap V5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!--importar api key googlemaps -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy8dm0BIYaplqYBXAmclsFJpXVawXhElc&libraries=places&callback=initMap"> </script>
    </head>
<body style="color:white">
<br>
<h1 class="text-center">LISTADO DE POSTULANTES A LA ASAMBLEA PROVINCIAL.</h1>
<div class="row">
  <div class="col-md-12">
    <div id="mapaAsambleaN"style="height:500px; width:100%; border:2px solid black;"></div>
  </div>
</div>
<script type="text/javascript">
  function initMap(){
    var centro=new google.maps.LatLng(-0.9286949294146735, -78.61625478124424);
    var mapaListaAsambleaP= new google.maps.Map(
      document.getElementById('mapaAsambleaN'),
    {
      center:centro,
      zoom:3,
      mapTypedId:google.maps.MapTypeId.HYBRID
    }
  ); ///construir el mapa

  <?php if ($elecciones3): ?>
    <?php foreach ($elecciones3 as $lugarTemporal3):?>
    var coordenadaTemporal3= new google.maps.LatLng(<?php echo $lugarTemporal3->latitud ?>, <?php echo $lugarTemporal3->longitud ?>);
    //////////////MARCADOR
      var marcador3=new google.maps.Marker({
        position:coordenadaTemporal3,
        title:"<?php echo $lugarTemporal3->nombre ?>",
        map:mapaListaAsambleaP,
        icon:"<?php echo base_url('plantilla/assets/images/azul.png'); ?>"
      });
    <?php endforeach; ?>
    <?php endif; ?>
} //cierre feuncion init map

</script>
