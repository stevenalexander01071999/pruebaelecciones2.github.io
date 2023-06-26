
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="row">
      <div class="col-md-8 text-center">
        <h1>LISTA DE POSTULANTES</h1>
      </div>
      <div class="col-md-4">
        <br>
        <br>
        <a href="<?php echo site_url ('elecciones/registro'); ?>" class="btn btn-primary">
          <i class="glyphicon glyphicon-plus"> </i>
          Agregar Postulante
        </a>
      </div>
    </div>

    <br>
    <?php if ($elecciones):?>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>ID:</th>
            <th>Dignidad:</th>
            <th>Apellido:</th>
            <th>Nombre:</th>
            <th>Movimiento:</th>
            <th>Latitud:</th>
            <th>Longitud:</th>
            <th>Ingresos:</th>
            <th>Edad:</th>
            <th>Tipo:</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($elecciones as $filaTemporal):?>
          <tr>
            <td>
              <?php echo
              $filaTemporal->id;?>
            </td>

            <td>
              <?php echo
              $filaTemporal->dignidad;?>
            </td>

            <td>
              <?php echo
              $filaTemporal->apellido;?>
            </td>

            <td>
              <?php echo
              $filaTemporal->nombre;?>
            </td>

            <td>
              <?php echo
              $filaTemporal->movimiento;?>

            </td>

            <td>
              <?php echo
              $filaTemporal->latitud;?>
            </td>
            <td>
              <?php echo
              $filaTemporal->longitud;?>
            </td>
            <td>
              <?php echo
              $filaTemporal->ingresos;?>
            </td>
            <td>
              <?php echo
              $filaTemporal->edad;?>
            </td>
            <td>
              <?php echo
              $filaTemporal->tipo;?>
            </td>
            <!-- diseno de icono editar y eliminar -->
            <!-- <td class="text-center">
              <a href="#"
              title="Editar postulantes">
                <i class="glyphicon glyphicon-pencil"style="color:green"></i>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/elecciones/eliminar/<?php echo $filaTemporal->id; ?>" title="Eliminar elecciones" onclick="return confirm('Esta seguro de eliminar el registro.');">

              </a>
            </td> -->
            <td class="text-center">
      <a href="#" title="Editar postulantes">
        <i class="bi bi-pencil-fill text-success"></i>
      </a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="<?php echo site_url(); ?>/elecciones/eliminar/<?php echo $filaTemporal->id; ?>" title="Eliminar elecciones" onclick="return confirm('Está seguro de eliminar el registro.');">

      </a>
    </td>

          </tr>
        <?php endforeach; ?>
         </tbody>
       </table>
     <?php else: ?>
     <h1>No hay Elecciones</h1>
     <?php endif; ?>

  </body>
</html>
