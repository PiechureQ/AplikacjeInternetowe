<?php

require_once('oferta_1.php');

function handle_delete_product() {
    if (isset($_REQUEST['prod_delete'])) {
        query(sprintf("DELETE FROM towary WHERE id = %d", $_REQUEST['prod_id']));
    }
}

function product_delete() {
    ob_start(); ?>

    <span >Usuń produkt</span>
    <form method="post">
        <select id="prod_id" name="prod_id">
            <?php
            foreach(get_products() as $product) {
                printf('<option value="%d">%s</option>', $product['id'], $product['nazwa']);
            }
            ?>
        </select><br>
        <input type="hidden" name="prod_delete" id="prod_delete" value="1">
        <input type="submit">
    </form>

    <?php

    return ob_get_clean();
}