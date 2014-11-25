<div class="container">
    <h1 class="page-header"><?php echo $this->Html->link("< ",
            array('controller' => 'puntos', 'action' => 'index')); ?>Integrantes del equipo <?php echo $equipo['Equipo']['nombre']?></h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Integrantes</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($integrantes as $integrante): ?>
                <tr>
                    <td><i class="fa fa-users"></i>
                        <?php echo $integrante['Integrante']['nombre']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php unset($integrante); ?>
            </tbody>
        </table>
    </div>
</div>