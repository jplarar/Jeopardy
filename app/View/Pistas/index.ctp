<h1>Pistas</h1>

<?php echo $this->Html->link(
    'Agregar Pista',
    array('controller' => 'pistas', 'action' => 'add')
); ?>
<table>
    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($pistas as $pista): ?>
    <tr>
		<td><?php echo $pista['Pista']['pista']; ?></td>
		
		<td>
            <?php
                echo $this->Form->postLink(
                    'Borrar',
                    array('action' => 'delete', $pista['Pista']['id']),
                    array('confirm' => 'Estas seguro?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Editar', array('action' => 'edit', $pista['Pista']['id'])
                );
            ?>
        </td>
		
	</tr>
    <?php endforeach; ?>
    <?php unset($pista); ?>
</table>