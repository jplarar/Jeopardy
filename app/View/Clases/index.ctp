<h1 class="page-header">Clases</h1>

<?php echo $this->Html->link(
    'Agregar Clase',
    array('controller' => 'clases', 'action' => 'add'),
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
    <?php foreach ($clases as $clase): ?>
    <tr>
		<td>
            <?php echo $this->Html->link($clase['Clase']['nombre'],
			array('controller' => 'categorias', 'action' => 'index', $clase['Clase']['id'])); ?>
        </td>
		
		<td><i class="fa fa-times"></i>
            <?php
                echo $this->Form->postLink(
                    'Borrar',
                    array('action' => 'delete', $clase['Clase']['id']),
                    array('confirm' => 'Estas seguro?')
                );
            ?>
            <i class="fa fa-pencil-square-o"></i>
            <?php
                echo $this->Html->link(
                    'Editar', array('action' => 'edit', $clase['Clase']['id'])
                );
            ?>
        </td>
		
	</tr>
    <?php endforeach; ?>
    <?php unset($clase); ?>
        </tbody>
    </table>
</div>