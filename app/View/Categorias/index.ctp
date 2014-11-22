<h1>Categorias</h1>

<?php echo $this->Html->link(
    'Agregar Categoria',
    array('controller' => 'categorias', 'action' => 'add')
); ?>

<table>
    <!-- Here is where we loop through our $posts array, printing out post info -->

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
</table>