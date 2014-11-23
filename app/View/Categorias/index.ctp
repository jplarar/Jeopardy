<h1 class="page-header">Categorias</h1>

<?php echo $this->Html->link(
    'Agregar Categoria',
    array('controller' => 'categorias', 'action' => 'add'),
    array('escape' => false, 'class' => "btn btn-primary btn-lg")
); ?>
<div class="table-responsive">
<table class="table table-striped">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categorias as $categoria): ?>
    <tr>
		<td>
            <?php echo $this->Html->link($categoria['Categoria']['nombre'],
			array('controller' => 'pistas', 'action' => 'index', $categoria['Categoria']['id'])); ?>
        </td>
		
		<td>
            <?php
                echo $this->Form->postLink(
                    'Borrar',
                    array('action' => 'delete', $categoria['Categoria']['id']),
                    array('confirm' => 'Estas seguro?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Editar', array('action' => 'edit', $categoria['Categoria']['id'])
                );
            ?>
        </td>
	</tr>
    <?php endforeach; ?>
    <?php unset($categoria); ?>
    </tbody>
</table>
    </div>