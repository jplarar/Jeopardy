<!-- File: /app/View/Usuarios/add.ctp -->


<div class="container">
    <h1><a href="/"><i class="fa fa-arrow-left"> </i> </a> Crear Usuario </h1>
    <fieldset>
        <?php
        echo $this->Form->create('Usuario');

        echo $this->Form->input('username', array(
            'class' => 'form-control'));
        echo $this->Form->input('email', array(
            'class' => 'form-control'));
        echo $this->Form->input('password', array( 'maxLength' => 255, 'type'=>'password', 'type'=>'hidden','default'=>'12345',  ));
        echo $this->Form->input('activo', array('type'=>'hidden','default'=>'1'));
        echo "<br>";
        echo $this->Form->submit('Crear usuario', array('class' => 'btn btn-primary btn-lg',  'title' => 'Crear usuario') );
        echo $this->Form->end();
        ?>
    </fieldset>
</div>
