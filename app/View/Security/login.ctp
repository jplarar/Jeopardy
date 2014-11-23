


<div class="container">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User', array(
        'class' => 'form-signin')); ?>
    <h2 class="form-signin-heading">Jeopardy</h2>
    <?php echo $this->Form->input('username', array(
        'class' => 'form-control'));
    echo $this->Form->input('password', array(
        'class' => 'form-control'));
    ?>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesion</button>
    <?php echo $this->Form->end();
          echo $this->Html->link(
        'Nuevo usuario', array('controller' => 'Users', 'action' => 'add'));

    ?>



</div> <!-- /container -->


