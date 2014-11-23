
<div class="container">
    <h1>Actualiza tu password</h1>
    <?php
    echo $this->Form->create('User');
    echo $this->Form->input('password' , array(
        'class' => 'form-control'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo '<br>';
    echo $this->Form->submit('Actualizar password', array('class' => 'btn btn-primary btn-lg',  'title' => 'Actualizar password') );
    echo $this->Form->end();
    ?>
</div>