<?php

function handle_insert_product() {
    if (isset($_REQUEST['prod_insert'])) {
        query(sprintf("INSERT INTO towary (nazwa, cena) VALUES ('%s', %s)", $_REQUEST['prod_name'], $_REQUEST['prod_price']));
    }
}

function product_form() {
    ob_start(); ?>

    <span>Nowy produkt</span>
    <form method="post">
        <label for="prod_name">Nazwa:</label><br>
        <input type="text" id="prod_name" name="prod_name"><br>
        <label for="prod_price">Cena:</label><br>
        <input type="number" step=".01" id="prod_price" name="prod_price"><br>
        <input type="hidden" name="prod_insert" id="prod_insert" value="1">
        <input type="submit">
    </form> 

    <?php

    return ob_get_clean();
}