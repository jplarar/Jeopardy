<div class="container">
    <h1 class="page-header">Puntos</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Equipo</th>
                <th>Puntos</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($equipos as $equipo): ?>
                <tr>
                    <td><i class="fa fa-users"></i>
                        <?php echo $this->Html->link($equipo['Equipo']['nombre'],
                            array('controller' => 'puntos', 'action' => 'mostrarIntegrantes', $equipo['Equipo']['id'])); ?>
                    </td>

                    <td><i class="fa fa-trophy"></i>
                        <?php
                        echo $equipo['Equipo']['puntos'];
                        ?>
                    </td>

                </tr>
            <?php endforeach; ?>
            <?php unset($equipo); ?>
            </tbody>
        </table>
    </div>
</div>