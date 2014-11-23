<h1>Agregar Equipo</h1>
<?php
echo $this->Form->create('Equipo');
echo $this->Form->input('nombre');
echo $this->Form->input('partida_id', array('type' => 'hidden', 'default' => $pid));
echo $this->Form->input('puntos', array('type' => 'hidden', 'default' => 0));
echo "<br>";
echo $this->Form->submit('Crear equipo', array('class' => 'btn btn-primary btn-lg',  'title' => 'Crear equipo') );
echo $this->Form->end();
?>