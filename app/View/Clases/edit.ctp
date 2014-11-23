<div class="container">
    <h1><?php echo $this->Html->link(
            '< ',
            array('controller' => 'clases', 'action' => 'index')
        ); ?> Editar Clase</h1>
    <?php
    echo $this->Form->create('Clase');
    echo $this->Form->input('nombre', array(
        'class' => 'form-control'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo "<br>";
    echo $this->Form->submit('Editar clase', array('class' => 'btn btn-primary btn-lg',  'title' => 'Editar clase') );
    echo $this->Form->end();
    ?>
</div>