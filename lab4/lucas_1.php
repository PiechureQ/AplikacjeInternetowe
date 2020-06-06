<head>
<style type="text/css">
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

$n = @$_REQUEST['n'] ? $_REQUEST['n'] : 10;

if (!is_numeric($n)) {
    $n = 10;
}

echo '<table>';
echo '<tr><th>n</th><th>lucas(n)</th></tr>';
foreach(range(0, $n) as $number) {
    echo '<tr>';
    echo '<td>' . $number . '</td>';
    echo '<td>' . lucas($number) . '</td>';
    echo '</tr>';
}
echo '</table>';

function lucas($n) {
    if ($n >= 0) {
        if ($n === 0) {
            return 2;
        } else if ($n === 1) {
            return 1;
        } else {
            return lucas($n - 1) + lucas($n - 2);
        }
    }
}