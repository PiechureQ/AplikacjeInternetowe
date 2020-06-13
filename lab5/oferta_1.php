<?php

require('query.php');

function get_products() {
    $sql = "SELECT id, nazwa, cena FROM towary ORDER BY nazwa";
    $products = query_select($sql);
    return $products;
}

function product_table() {
    $products = get_products();
    if (count($products) > 0) {
        ob_start(); ?>
        <table>
            <tr>
                <th>Nazwa</th>
                <th>Cena</th>
            </tr>
            <?php
            
            foreach($products as $product) {
                echo '<tr>';
                printf('<td>%s</td>', $product['nazwa']);
                printf('<td>%s</td>', $product['cena']);
                echo '</tr>';
            }

            ?>
        </table>
        <?php
        return ob_get_clean();
    } else {
        return '';
    }
}