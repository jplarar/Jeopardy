<!-- File: /app/View/Usuarios/add.ctp -->

<h1>Crear Usuario </h1>
<fieldset>
<?php
    echo $this->Form->create('Usuario');

        echo $this->Form->input('username');
        echo $this->Form->input('email');
        echo $this->Form->input('password', array( 'maxLength' => 255, 'type'=>'password', 'type'=>'hidden','default'=>'12345' ));
        echo $this->Form->input('activo', array('type'=>'hidden','default'=>'1'));
    echo $this->Form->end('Crear');
?>
</fieldset>
