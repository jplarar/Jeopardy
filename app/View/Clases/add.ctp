<div class="container">
    <h1><?php echo $this->Html->link(
            '< ',
            array('controller' => 'clases', 'action' => 'index')
        ); ?> Agregar Clase</h1>
    <?php
    echo $this->Form->create('Clase');
    echo $this->Form->input('nombre', array(
        'class' => 'form-control'));
    echo $this->Form->input('usuario_id', array('type' => 'hidden', 'default' => $uid));
    echo "<br>";
    echo $this->Form->submit('Crear clase', array('class' => 'btn btn-primary btn-lg',  'title' => 'Crear clase') );
    echo $this->Form->end();
    ?>
</div>