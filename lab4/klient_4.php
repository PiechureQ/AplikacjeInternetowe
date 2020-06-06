<html>
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
<body>

<form id="form" action="klient.php" method="post">
    <label for="name">Imię i nazwisko</label>
    <input type="text" name="name" id="name" value="<?php echo @$_POST['name']; ?>"><br>
    <span>Płeć</span><br>
    <label for="gender">Mężczyzna</label>
    <input type="radio" name="gender" id="gender_0" value="Mężczyzna"><br>
    <label for="gender">Kobieta</label>
    <input type="radio" name="gender" id="gender_1" value="Kobieta"><br>
    <label for="date">Data urodzenia</label>
    <input type="date" name="date" id="date" value="<?php echo @$_POST['date']; ?>"><br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo @$_POST['email']; ?>"><br>
    <label for="password">Hasło</label>
    <input type="password" name="password" id="password" value="<?php echo @$_POST['password']; ?>"><br>
    <label for="color">Ulubiony kolor</label>
    <input type="color" name="color" id="color" value="<?php echo @$_POST['color']; ?>"><br>
    <label for="fav_number">Ulubiona liczba</label>
    <input type="number" min=1 max=9 name="fav_number" id="fav_number" value="<?php echo @$_POST['fav_number']; ?>"><br>
    <span>Ulubiona pora roku</span><br>
    <label for="fav_part_0">Zima</label>
    <input type="checkbox" name="fav_part_0" id="fav_part_0" value="Zima"><br>
    <label for="fav_part_1">Wiosna</label>
    <input type="checkbox" name="fav_part_1" id="fav_part_1" value="Wiosna"><br>
    <label for="fav_part_2">Lato</label>
    <input type="checkbox" name="fav_part_2" id="fav_part_2" value="Lato"><br>
    <label for="fav_part_3">Jesień</label>
    <input type="checkbox" name="fav_part_3" id="fav_part_3" value="Jesień"><br>
    <label for="dead">Poziom zadowolenia z życia</label>
    <input type="range" min=0 max=100 name="dead" id="dead" value="<?php echo @$_POST['dead']; ?>"><br>
    <label for="day">Dzień do kontaktu z klientem</label>
    <select name="day" id="day" form="form">
        <option value="Poniedziałek">Poniedziałek</option>
        <option value="Wtorek">Wtorek</option>
        <option value="Środa">Środa</option>
        <option value="Czwartek">Czwartek</option>
        <option value="Piątek">Piątek</option>
        <option value="Sobota">Sobota</option>
        <option value="Niedziela">Niedziela</option>
    </select><br>
    <label for="about">Dodatkowe informacje o kliencie</label><br>
    <textarea name="about" id="about" form="form" placeholder="O kliencie..."></textarea><br>
    <input type="submit">
    
</form>
<?php if(count($_POST) > 0): ?>
<table>
    <tr>
        <th>Imię i nazwisko</th>
        <th>Płeć</th>
        <th>Data urodzenia</th>
        <th>Email</th>
        <th>Hasło</th>
        <th>Ulubiony kolor</th>
        <th>Ulubiona liczba</th>
        <th>Ulubiona pora roku</th>
        <th>Poziom zadowolenia z życia</th>
        <th>Dzień do kontaktu z klientem</th>
        <th>Dodatkowe informacje o kliencie</th>
    </tr>
    <tr>
        <td><?php echo @$_POST['name']; ?></td>
        <td><?php echo @$_POST['gender']; ?></td>
        <td><?php echo @$_POST['date']; ?></td>
        <td><?php echo @$_POST['email']; ?></td>
        <td>********</td>
        <td><?php echo @$_POST['color']; ?></td>
        <td><?php echo @$_POST['fav_number']; ?></td>
        <td><?php echo join(', ', array_filter([@$_POST['fav_part_0'], @$_POST['fav_part_1'], @$_POST['fav_part_2'], @$_POST['fav_part_3']])); ?></td>
        <td><?php echo @$_POST['dead']; ?></td>
        <td><?php echo @$_POST['day']; ?></td>
        <td><?php echo @$_POST['about']; ?></td>
    </tr>
</table>
<?php endif; ?>
</body>
</html>