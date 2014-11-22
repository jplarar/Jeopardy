<h1>Pistas</h1>
<table>
    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($pistas as $pista): ?>
    <tr>
		<td><?php echo $pista['Pista']['pista']; ?></td>
		
	</tr>
    <?php endforeach; ?>
    <?php unset($pista); ?>
</table>