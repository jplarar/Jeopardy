<h1>Agregar Pista</h1>
<?php
echo $this->Form->create('Pista');
echo $this->Form->input('pista', array('rows' => '5'));
echo $this->Form->input('puntos');
echo $this->Form->input('correcta');
echo $this->Form->input('incorrectaUno');
echo $this->Form->input('incorrectaDos');
echo $this->Form->input('incorrectaTres');
echo $this->Form->input('categoria_id', array('type' => 'hidden', 'default' => $cid));
echo $this->Form->end('Save Post');
?>