<div class="container">
    <h1><?php echo $this->Html->link(
            '< ',
            array('controller' => 'categorias', 'action' => 'index', $cid)
        ); ?> Agregar Categoria</h1>
<?php
echo $this->Form->create('Categoria');
echo $this->Form->input('nombre', array(
    'class' => 'form-control'));
echo $this->Form->input('clase_id', array('type' => 'hidden', 'default' => $cid));
echo "<br>";
echo $this->Form->submit('Crear categoria', array('class' => 'btn btn-primary btn-lg',  'title' => 'Crear categoria') );
echo $this->Form->end();
?>
    </div>