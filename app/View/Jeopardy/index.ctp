<script type="text/javascript">
    function challenge(id) // no ';' here
    {
        var elem = document.getElementById(id);
        elem.className = "btn btn-customX";
        elem.innerHTML  = "";
        var idDiv = 'd'+id;
        var elemDiv = document.getElementById(idDiv);
        elemDiv.style.display="inline";



    }

    function disable(id) // no ';' here
    {
        id = 'd'+id;
        var elemDiv = document.getElementById(id);
        elemDiv.style.display="none";

    }
</script>
<?php foreach ($pistas as $pista): ?>
    <?php foreach ($pista as $p): ?>
        <div id="d<?php echo $p['Pista']['id'];?>" style="display:none" >
            <h1>
                <?php echo $p['Pista']['pista'];?>
            </h1>

            <button type="button" class="btn btn-info"  aria-expanded="false" onclick="disable(<?php echo $p['Pista']['id'];?>)">
            <?php echo $p['Pista']['correcta'];?>
            </button>
            <button type="button" class="btn btn-info"  aria-expanded="false" >
                <?php echo $p['Pista']['incorrectaUno'];?>
            </button>
            <button type="button" class="btn btn-info"  aria-expanded="false" >
                <?php echo $p['Pista']['incorrectaDos'];?>
            </button>
            <button type="button" class="btn btn-info"  aria-expanded="false">
                <?php echo $p['Pista']['incorrectaTres'];?>
            </button>
        </div>
    <?php  endforeach; ?>
<?php  endforeach; ?>

<table>
    <!-- Here is where we loop through our $posts array, printing out post info -->
    <?php for ($i =0;$i<6;$i++){ ?>
        <tr>
            <?php switch ($i){
                case 0:
                    $x=0;

                    foreach ($categorias as $categoria): ?>
                        <td>
                            <button type="button" class="btn btn-custom0"  aria-expanded="false" id="btn<?php echo $i; echo $x; ?>" >
                                <?php echo $categoria['Categoria']['nombre'];  ?>
                            </button>
                        </td>

                        <?php $x++; endforeach;
                    unset($categoria);

                    break;
                case 1:

                    foreach ($pistas as $pista): ?>
                        <td>

                            <button type="button" class="btn btn-custom1"  aria-expanded="false" id="<?php echo $pista[0]['Pista']['id'];?>" onclick="challenge(id)">
                                <?php echo $pista[0]['Pista']['puntos'];?>
                            </button>
                        </td>
                        <?php $x++; endforeach;
                    unset($categoria);
                    break;
                case 2:
                    $x=0;
                    foreach ($pistas as $pista): ?>
                        <td>
                            <button type="button" class="btn btn-custom2"  aria-expanded="false" id="<?php echo $pista[1]['Pista']['id'];?>" onclick="challenge(id)">
                                <?php echo $pista[1]['Pista']['puntos'];?>
                            </button>
                        </td>
                        <?php $x++; endforeach;
                    unset($categoria);
                    break;
                case 3:
                    $x=0;
                    foreach ($pistas as $pista): ?>
                        <td>
                            <button type="button" class="btn btn-custom3"  aria-expanded="false" id="<?php echo $pista[2]['Pista']['id'];?>" onclick="challenge(id)">
                                <?php echo $pista[2]['Pista']['puntos'];?>
                            </button>
                        </td>
                        <?php $x++; endforeach;
                    unset($categoria);
                    break;
                case 4:
                    $x=0;
                    foreach ($pistas as $pista): ?>
                        <td>
                            <button type="button" class="btn btn-custom4"  aria-expanded="false" id="<?php echo $pista[3]['Pista']['id'];?>" onclick="challenge(id)">
                                <?php echo $pista[3]['Pista']['puntos'];?>
                            </button>
                        </td>
                        <?php $x++; endforeach;
                    unset($categoria);
                    break;
                case 5:
                    $x=0;
                    foreach ($pistas as $pista): ?>
                        <td>
                            <button type="button" class="btn btn-custom5"  aria-expanded="false" id="<?php echo $pista[4]['Pista']['id'];?>" onclick="challenge(id)">
                                <?php echo $pista[4]['Pista']['puntos'];?>
                            </button>
                        </td>
                        <?php $x++; endforeach;
                    unset($categoria);
                    break;
            } ?>
        </tr>
    <?php } ?>





</table>