<div class="container">
    <h1 class="page-header"> <?php echo $this->Html->link(
            '< ',
            array('controller' => 'clases', 'action' => 'index')
        ); ?> Pistas</h1>

    <?php echo $this->Html->link(
        'Agregar Pista',
        array('controller' => 'pistas', 'action' => 'add', $cid),
        array('escape' => false, 'class' => "btn btn-primary btn-lg")
    ); ?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Puntos</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($pistas as $pista): ?>
                <tr>
                    <td><?php echo $pista['Pista']['puntos']; ?></td>

                    <td>
                        <?php
                        echo $this->Form->postLink(
                            'Borrar',
                            array('action' => 'delete', $pista['Pista']['id'], $cid),
                            array('confirm' => 'Estas seguro?')
                        );
                        ?>
                        <?php
                        echo $this->Html->link(
                            'Editar', array('action' => 'edit', $pista['Pista']['id'], $cid)
                        );
                        ?>
                    </td>

                </tr>
            <?php endforeach; ?>
            <?php unset($pista); ?>
            </tbody>
        </table>
    </div>
</div>