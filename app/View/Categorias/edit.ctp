<h1>Editar Categoria</h1>
<?php
echo $this->Form->create('Categoria');
echo $this->Form->input('nombre');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>