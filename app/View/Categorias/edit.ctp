<div class="container">
<h1>Editar Categoria</h1>
<?php
echo $this->Form->create('Categoria');
echo $this->Form->input('nombre', array(
    'class' => 'form-control'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo "<br>";
echo $this->Form->submit('Editar categoria', array('class' => 'btn btn-primary btn-lg',  'title' => 'Editar categoria') );
echo $this->Form->end();
?>
    </div>
