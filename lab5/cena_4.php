<?php

function handle_edit_product() {
    if (isset($_REQUEST['prod_edit'])) {
        $update = [];
        if (isset($_REQUEST['prod_name']) && $_REQUEST['prod_name']) {
            $update[] = sprintf("nazwa = '%s'", $_REQUEST['prod_name']);
        }
        if (isset($_REQUEST['prod_price']) && $_REQUEST['prod_price']) {
            $update[] = 'cena = ' . $_REQUEST['prod_price'];
        }
        
        if (count($update)) {
            query(sprintf("UPDATE towary SET %s WHERE id = %d ", join($update, ', '), $_REQUEST['prod_id']));
        }
    }
}

function product_edit() {
    $products = get_products();
    ob_start(); ?>

    <span>Edytuj produkt</span>

    <form method="post">
        <label for="prod_id">Wybierz produkt</label>
        <select id="prod_id" name="prod_id">
            <?php
            foreach($products as $product) {
                printf('<option value="%d">%s</option>', $product['id'], $product['nazwa']);
            }
            ?>
        </select><br>
        <label for="prod_name">Nazwa:</label><br>
        <input type="text" id="prod_name" name="prod_name"><br>
        <label for="prod_price">Cena:</label><br>
        <input type="number" step=".01" id="prod_price" name="prod_price"><br>
        <input type="hidden" name="prod_edit" id="prod_edit" value="1">
        <input type="submit">
    </form>

    <?php

    return ob_get_clean();
}