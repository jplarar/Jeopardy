<h1>Agregar Categoria</h1>
<?php
echo $this->Form->create('Categoria');
echo $this->Form->input('nombre');
echo $this->Form->end('Save Post');
?>