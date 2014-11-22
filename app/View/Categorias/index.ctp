<h1>Categorias</h1>
<table>
    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($categorias as $categoria): ?>
    <tr>
		<td>
            <?php echo $this->Html->link($categoria['Categoria']['nombre'],
			array('controller' => 'pistas', 'action' => 'index', $categoria['Categoria']['id'])); ?>
        </td>
		
	</tr>
    <?php endforeach; ?>
    <?php unset($categoria); ?>
</table>