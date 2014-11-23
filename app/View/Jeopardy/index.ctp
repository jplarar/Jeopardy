<script type="text/javascript">
    function disable(id) // no ';' here
    {
        var elem = document.getElementById(id);
         elem.className = "btn btn-customX";
         elem.innerHTML  = "";

    }
</script>
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
                            <button type="button" class="btn btn-custom1"  aria-expanded="false" id="btn<?php echo $i; echo $x; ?>" onclick="disable(id)">
                                <?php echo $pista['puntos'];?>
                                </button>
                        </td>
                    <?php endforeach;
                    unset($categoria);
                    break;
                case 2:
                    $x=0;
                    foreach ($pistas as $pista): ?>
                        <td>
                            <button type="button" class="btn btn-custom2"  aria-expanded="false" id="btn<?php echo $i; echo $x; ?>" onclick="disable(id)">
                                <?php echo $pista[1]['puntos'];?>
                            </button>
                        </td>
                    <?php endforeach;
                    unset($categoria);
                    break;
                case 3:
                    foreach ($pistas as $pista): ?>
                        <td>
                            <button type="button" class="btn btn-custom3"  aria-expanded="false" id="btn<?php echo $i; echo $x; ?>" onclick="disable(id)">
                                <?php echo $pista[2]['puntos'];?>
                            </button>
                        </td>
                    <?php  endforeach;
                    unset($categoria);
                    break;
                case 4:

                    foreach ($pistas as $pista): ?>
                        <td>
                            <button type="button" class="btn btn-custom4"  aria-expanded="false" id="btn<?php echo $i; echo $x; ?>" onclick="disable(id)">
                                <?php echo $pista[3]['puntos'];?>
                            </button>
                        </td>
                    <?php  endforeach;
                    unset($categoria);
                    break;
                case 5:

                    foreach ($pistas as $pista): ?>
                        <td>
                            <button type="button" class="btn btn-custom5"  aria-expanded="false" id="btn<?php echo $i; echo $x; ?>" onclick="disable(id)">
                                <?php echo $pista[4]['puntos'];?>
                            </button>
                        </td>
                    <?php  endforeach;
                    unset($categoria);
                    break;
                } ?>
    </tr>
    <?php } ?>





</table>