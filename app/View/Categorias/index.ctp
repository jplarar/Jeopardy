<div class="container">
    <h1 class="page-header"> <?php echo $this->Html->link(
            '< ',
            array('controller' => 'clases', 'action' => 'index')
        ); ?> Categorias</h1>

    <?php echo $this->Html->link(
        'Agregar Categoria',
        array('controller' => 'categorias', 'action' => 'add', $cid),
        array('escape' => false, 'class' => "btn btn-primary btn-lg")
    ); ?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($categorias as $categoria): ?>
                <tr>
                    <td>
                        <?php echo $this->Html->link($categoria['Categoria']['nombre'],
                            array('controller' => 'pistas', 'action' => 'index', $categoria['Categoria']['id'])); ?>
                    </td>

                    <td><i class="fa fa-times"></i>
                        <?php
                        echo $this->Form->postLink(
                            'Borrar',
                            array('action' => 'delete', $categoria['Categoria']['id'], $cid),
                            array('confirm' => 'Estas seguro?')
                        );
                        ?>
                        <i class="fa fa-pencil-square-o"></i>
                        <?php
                        echo $this->Html->link(
                            'Editar', array('action' => 'edit', $categoria['Categoria']['id'], $cid)
                        );
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php unset($categoria); ?>
            </tbody>
        </table>
    </div>
</div>