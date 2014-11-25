<div class="container">
    <h1>Agregar Integrante al Equipo</h1>
    <?php
    echo $this->Form->create('Integrante');
    echo $this->Form->input('nombre', array(
        'class' => 'form-control'));
    echo $this->Form->input('equipo_id', array('type' => 'hidden', 'default' => $eid));
    echo "<br>";
    echo $this->Form->submit('Agregar integrante', array('class' => 'btn btn-primary btn-lg',  'title' => 'Agregar otro integrante') );
    echo $this->Form->end();
    echo "<br>";
    echo $this->Html->link(
        'Agregar otro equipo',
        array('controller' => 'equipos', 'action' => 'add', $pid),
        array('escape' => false, 'class' => "btn btn-primary btn-lg"));
    echo "<br>";
    echo "<br>";
    echo $this->Html->link(
        'Empezar juego ',
        array('controller' => 'jeopardy', 'action' => 'index', $cid, $pid),
        array('escape' => false, 'class' => "btn btn-success btn-lg"));
    ?>
</div>