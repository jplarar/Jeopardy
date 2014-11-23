<script type="text/javascript">
    function challenge(id) // no ';' here
    {
        var elem = document.getElementById(id);
        elem.className = "btn btn-customX";
        elem.innerHTML = "";
        var idDiv = 'd' + id;
        var elemDiv = document.getElementById(idDiv);
        elemDiv.style.display = "inline-block";
        var elemGame = document.getElementById('game');
        elemGame.style.display = "none";

    }

    function disable(id) // no ';' here
    {
        id = 'd' + id;
        var elemDiv = document.getElementById(id);
        elemDiv.style.display = "none";
        var elemGame = document.getElementById('game');
        elemGame.style.display = "inline";
    }
</script>
<?php foreach ($pistas as $pista): ?>
    <?php foreach ($pista as $p): ?>
        <div id="d<?php echo $p['Pista']['id']; ?>" class="div-custom">
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h1 align = "center" style="color:white">
                <?php echo $p['Pista']['pista']; ?>
            </h1>
            <?php
            $randArray = array();
            while (count($randArray) != 4) {
                $rand = rand(1, 4);
                if (!(in_array($rand, $randArray))) {
                    $randArray[] = $rand;
                }
            }

            foreach ($randArray as $r):
                switch ($r) {
                    case 1:
                        ?>
                        <button type="button" class="btn btn-info" aria-expanded="false"
                                onclick="disable(<?php echo $p['Pista']['id']; ?>)">
                            <?php echo $p['Pista']['correcta']; ?>
                        </button>
                        <?php break;

                    case 2:
                        ?>
                        <button type="button" class="btn btn-info" aria-expanded="false"
                                onclick="alert('Respuesta Equivocada. Intenta de nuevo!')">
                            <?php echo $p['Pista']['incorrectaUno']; ?>
                        </button>
                        <?php break;

                    case 3:
                        ?>
                        <button type="button" class="btn btn-info" aria-expanded="false"
                                onclick="alert('Respuesta Equivocada. Intenta de nuevo!')">
                            <?php echo $p['Pista']['incorrectaDos']; ?>
                        </button>
                        <?php break;

                    case 4:
                        ?>
                        <button type="button" class="btn btn-info" aria-expanded="false"
                                onclick="alert('Respuesta Equivocada. Intenta de nuevo!')">
                            <?php echo $p['Pista']['incorrectaTres']; ?>
                        </button>
                        <?php break;
                }
            endforeach; ?>

        </div>
    <?php endforeach; ?>
<?php endforeach; ?>
<div id="game" style="display:inline">
    <table>
        <!-- Here is where we loop through our $posts array, printing out post info -->
        <?php for ($i = 0; $i < 6; $i++) { ?>
            <tr>
                <?php switch ($i) {
                    case 0:
                        $x = 0;

                        foreach ($categorias as $categoria): ?>
                            <td>
                                <button type="button" class="btn btn-custom0" aria-expanded="false"
                                        id="btn<?php echo $i;
                                        echo $x; ?>">
                                    <?php echo $categoria['Categoria']['nombre']; ?>
                                </button>
                            </td>

                            <?php $x++; endforeach;
                        unset($categoria);

                        break;
                    case 1:

                        foreach ($pistas as $pista): ?>
                            <td>

                                <button type="button" class="btn btn-custom1" aria-expanded="false"
                                        id="<?php echo $pista[0]['Pista']['id']; ?>" onclick="challenge(id)">
                                    <?php echo $pista[0]['Pista']['puntos']; ?>
                                </button>
                            </td>
                            <?php $x++; endforeach;
                        unset($categoria);
                        break;
                    case 2:
                        $x = 0;
                        foreach ($pistas as $pista): ?>
                            <td>
                                <button type="button" class="btn btn-custom2" aria-expanded="false"
                                        id="<?php echo $pista[1]['Pista']['id']; ?>" onclick="challenge(id)">
                                    <?php echo $pista[1]['Pista']['puntos']; ?>
                                </button>
                            </td>
                            <?php $x++; endforeach;
                        unset($categoria);
                        break;
                    case 3:
                        $x = 0;
                        foreach ($pistas as $pista): ?>
                            <td>
                                <button type="button" class="btn btn-custom3" aria-expanded="false"
                                        id="<?php echo $pista[2]['Pista']['id']; ?>" onclick="challenge(id)">
                                    <?php echo $pista[2]['Pista']['puntos']; ?>
                                </button>
                            </td>
                            <?php $x++; endforeach;
                        unset($categoria);
                        break;
                    case 4:
                        $x = 0;
                        foreach ($pistas as $pista): ?>
                            <td>
                                <button type="button" class="btn btn-custom4" aria-expanded="false"
                                        id="<?php echo $pista[3]['Pista']['id']; ?>" onclick="challenge(id)">
                                    <?php echo $pista[3]['Pista']['puntos']; ?>
                                </button>
                            </td>
                            <?php $x++; endforeach;
                        unset($categoria);
                        break;
                    case 5:
                        $x = 0;
                        foreach ($pistas as $pista): ?>
                            <td>
                                <button type="button" class="btn btn-custom5" aria-expanded="false"
                                        id="<?php echo $pista[4]['Pista']['id']; ?>" onclick="challenge(id)">
                                    <?php echo $pista[4]['Pista']['puntos']; ?>
                                </button>
                            </td>
                            <?php $x++; endforeach;
                        unset($categoria);
                        break;
                } ?>
            </tr>
        <?php } ?>


    </table>

</div>