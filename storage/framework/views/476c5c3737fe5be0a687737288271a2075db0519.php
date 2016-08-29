<link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
<div class="row">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a>Ver todas las publicaciones</a>&nbsp;&nbsp;&nbsp;
  <a>publicaciones presentes</a>&nbsp;&nbsp;&nbsp;
  <a>publicaciones pasadas</a>&nbsp;&nbsp;&nbsp;
  <a>publicaciones futuras</a>&nbsp;&nbsp;&nbsp;
  <div class="col-lg-12 col-xs-12">
    <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Titulo</th>
              <th>Autor</th>
              <th>Publicacion</th>
              <th>Categoria</th>
              <th>Estado</th>
              <th>Operaciones</th>
            </tr>
          </thead>
          <tbody>
            <?php $c = 1;  ?>
            <?php foreach($pubxsitio as $pb): ?>
            <tr>
              <td><?php echo e($c++); ?></td>
              <td><?php echo e($pb['titulo']); ?></td>
              <td><?php echo e($pb['usuario']); ?> con C.I <?php echo e($pb['ci']); ?></td>
              <td>Desde: <?php echo e($pb['fecha_publicacion']); ?> hasta: <?php echo e($pb['fecha_caducidad']); ?></td>
              <td><?php echo e($pb['categoria']); ?></td>
              <?php if($pb['estado_id'] === '_TYEExo_BdNGcSl4Wkn8DVJdUhpmtjgqEtggE5nTmKo='): ?>
                <td><a href="<?php echo e(url('pb-estado/'.$pb['id'].'/'.$pagina)); ?>"  class="paginacion"style="text-decoration:none; color:#fff"><button class="btn btn-primary">Publicado</button></a></td>
              <?php endif; ?>
              <?php if($pb['estado_id'] === 'GbKFtJAuH8v1d7wm5ZurcQaQs-nczwRbnI_RYQGF5BY='): ?>
                <td><a href="<?php echo e(url('pb-estado/'.$pb['id'].'/'.$pagina)); ?>"  class="paginacion"style="text-decoration:none; color:#fff"><button class="btn btn-danger">No Publicado</button></a></td>
              <?php endif; ?>
              <td><button class="btn btn-warning"><a href="<?php echo e(url('pb-editar/'.$pb['id'])); ?>"  class="paginacion" style="text-decoration:none; color:#fff">Editar</a></button></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
    </div>
  </div>
</div>
