<?php
function renderProductos($productos) {
    for ($i=0; $i<count($productos); $i++) {
        echo '<div class="col-md-3 text-center">
                <p><img src="images/' .$productos[$i]["imagen"] .'" alt="' .$productos[$i]["nombre"] .'" width="120"><br>' .$productos[$i]["nombre"] .'</p>
            </div>';
    }
}
?>