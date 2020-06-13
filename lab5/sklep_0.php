<head>
<style type="text/css">
form {
    margin: 20px 10px;
}
table {
margin: 8px;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
border: 1px solid #DDD;
}
</style>
</head>
<?php

require('oferta_1.php');
require('dodaj_2.php');
require('usun_3.php');
require('cena_4.php');

handle_insert_product();
handle_delete_product();
handle_edit_product();

echo product_table();
echo product_form();
echo product_delete();
echo product_edit();