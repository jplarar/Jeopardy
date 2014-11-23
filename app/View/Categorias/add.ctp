<h1>Agregar Categoria</h1>
<?php
echo $this->Form->create('Categoria');
echo $this->Form->input('nombre');
echo $this->Form->input('clase_id', array('type' => 'hidden', 'default' => $cid));
echo $this->Form->end('Save Post');
?>