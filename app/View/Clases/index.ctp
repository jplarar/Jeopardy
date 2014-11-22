<h1>Clases</h1>
<table>
    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($clases as $clase): ?>
    <tr>
		<td>
            <?php echo $this->Html->link($clase['Clase']['nombre'],
			array('controller' => 'categorias', 'action' => 'index', $clase['Clase']['id'])); ?>
        </td>
		
	</tr>
    <?php endforeach; ?>
    <?php unset($clase); ?>
</table>