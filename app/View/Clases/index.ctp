<h1>Clases</h1>

<?php echo $this->Html->link(
    'Agregar Clase',
    array('controller' => 'clases', 'action' => 'add')
); ?>

<table>
    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($clases as $clase): ?>
    <tr>
		<td>
            <?php echo $this->Html->link($clase['Clase']['nombre'],
			array('controller' => 'categorias', 'action' => 'index', $clase['Clase']['id'])); ?>
        </td>
		
		<td>
            <?php
                echo $this->Form->postLink(
                    'Borrar',
                    array('action' => 'delete', $clase['Clase']['id']),
                    array('confirm' => 'Estas seguro?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Editar', array('action' => 'edit', $clase['Clase']['id'])
                );
            ?>
        </td>
		
	</tr>
    <?php endforeach; ?>
    <?php unset($clase); ?>
</table>