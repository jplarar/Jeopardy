<h1>Editar Clase</h1>
<?php
echo $this->Form->create('Clase');
echo $this->Form->input('nombre');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>