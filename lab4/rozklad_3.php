 <html>
<body>

<form action="rozklad.php" method="get">
n: <input min=2 max=1000000000 type="number" name="n" value="<?php echo @$_GET['n']; ?>">
<input type="submit">
</form>

</body>
</html> 
<?php

$n = @$_GET['n'];

if (!is_numeric($n) || $n < 2 || $n > 1000000000) {
    echo "Nieprawidłowy format parametru n";
    exit;
} 

$pf = find_factors($n);
echo $n . ' = ' . implode(" * ", $pf);

function find_factors($n) {
    for($i=2; $i <= $n; $i++) {
        if(is_prime($i)) {
            while($n % $i == 0)
            {
                $pf[] = $i;
                $n /= $i;
            }
        }
    }
    return $pf ?? [$n];
}

function is_prime($n){
    for($i = $n; --$i && $n%$i;);
    // return true if only divisor is 1
    return $i == 1;
}