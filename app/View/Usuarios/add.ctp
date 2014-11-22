<!-- File: /app/View/Usuarios/add.ctp -->

<h1>Crear Usuario </h1>
<?php
    echo $this->Form->create('Usuario');
    echo $this->Form->input('username');
    echo $this->Form->input('email');
    echo $this->Form->end('Crear');
?>
