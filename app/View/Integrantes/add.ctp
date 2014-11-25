<h1>Agregar Integrante al Equipo</h1>
<?php
echo $this->Form->create('Integrante');
echo $this->Form->input('nombre');
echo $this->Form->input('equipo_id', array('type' => 'hidden', 'default' => $eid));
echo "<br>";
echo $this->Form->submit('Agregar otro integrante', array('class' => 'btn btn-primary btn-lg',  'title' => 'Agregar otro integrante') );
echo $this->Form->end();
echo $this->Html->link(
            'Agregar Nuevo Equipo ',
            array('controller' => 'equipos', 'action' => 'add', $pid));
echo $this->Html->link(
            'Empezar juego ',
            array('controller' => 'jeopardy', 'action' => 'index', $cid, $pid));
?>