<h1>Editar Pista</h1>
<?php
echo $this->Form->create('Pista');
echo $this->Form->input('pista');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>