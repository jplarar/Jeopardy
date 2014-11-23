<div class="container">
    <h1>Editar Pista</h1>
    <?php
    echo $this->Form->create('Pista');
    echo $this->Form->input('pista', array('rows' => '5', 'class' => 'form-control'));
    echo $this->Form->input('puntos', array(
        'class' => 'form-control'));
    echo $this->Form->input('correcta', array(
        'class' => 'form-control'));
    echo $this->Form->input('incorrectaUno', array(
        'class' => 'form-control'));
    echo $this->Form->input('incorrectaDos', array(
        'class' => 'form-control'));
    echo $this->Form->input('incorrectaTres', array(
        'class' => 'form-control'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo "<br>";
    echo $this->Form->submit('Editar pista', array('class' => 'btn btn-primary btn-lg',  'title' => 'Editar pista') );
    echo $this->Form->end();
    ?>
</div>