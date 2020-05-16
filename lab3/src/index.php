<?php 
function isToday($time) {
    if (date('d', $time) === date('d', time())) {
       return true;
    } else {
        return false;
    }
}
function getCorrectWord($n, $single, $twoFour, $else) {
    $n = abs($n);
    if ($n == 0 || $n > 4) {
        return $else;
    } else if ($n > 1) {
        return $twoFour;
    } else {
        return $single;
    }
}
?>
<!doctype html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Konstytucja 3 maja</title>
        <link rel="stylesheet" type="text/css" href="konstytucja.css">
    </head>
    <body>
        <header>
            <h1>Konstytucja 3 maja</h1>
            <div class="time-info">
                <span class="date">
                    <?php 

                    
                    echo "Ostatnia aktualizacja strony: " . date("d-m-Y", filemtime('index.php')); 
                    if (!isToday(filemtime('index.php'))) {
                        echo date(' H:i', filemtime('index.php'));
                    }


                    ?>
                </span>
                <span class="time-passed">
                    <?php

                    $last_edit_time = time() - filemtime('index.php');
                    echo "Czas od ostatniej aktualizacji: ";
                    if($last_edit_time < 60 * 60 * 24) {
                        echo date("G", $last_edit_time) . getCorrectWord(date("G", $last_edit_time), " godzina, ", " godziny, ", " godzin, ");
                        echo date("i", $last_edit_time) . getCorrectWord(date("i", $last_edit_time), " minuta, ", " minuty, ", " minut, ");
                        echo date("s", $last_edit_time) . getCorrectWord(date("s", $last_edit_time), " sekunda.", " sekundy.", " sekund.");
                    } else {
                        echo date("j", $last_edit_time) . getCorrectWord(date("j", $last_edit_time), " dzień.", " dni.", " dni.");
                    }

                    ?>
                </span>
                <div id="wejscie">
                    <span class="time-enter">
                        <?php
                            setlocale(LC_TIME, 'pl_PL.UTF-8');
                            echo strftime("%A %B, %G");
                        ?>
                    </span>
                </div>
            </div>
        </header>
        <article>
            <p>
                    <strong>Konstytucja 3 maja</strong>, a właściwie <strong>Ustawa Rządowa z dnia 3 maja</strong>
                    to uchwalona 3 maja 1791 roku ustawa regulująca ustrój prawny Rzeczypospolitej Obojga Narodów.
                    Powszechnie przyjmuje się, że Konstytucja 3 maja była pierwszą w Europie i drugą na świecie
                    (po konstytucji amerykańskiej z 1787 r.) nowoczesną, spisaną <a href="">konstytucją</a>.
            </p>
            <p>
                    <img src="konstytucja.jpg" /> <!-- 464 x 720 -->
                    <a target="_blank" href="https://pl.wikipedia.org/wiki/Konstytucja_3_maja">Konstytucja 3 maja</a> została ustanowiona ustawą rządową przyjętą tego dnia przez
                    <a target="_blank" href="https://pl.wikipedia.org/wiki/Sejm_Czteroletni">Sejm Czteroletni</a>.
                    Działo się to za panowania króla <a target="_blank" href="https://pl.wikipedia.org/wiki/Stanis%C5%82aw_August_Poniatowski">Stanisława Augusta Poniatowskiego</a> a sam król był
                    jednym z głównych współautorów konstytucji.
                    Została ona zaprojektowana w celu zlikwidowania obecnych od dawna wad opartego na wolnej elekcji
                    i demokracji szlacheckiej systemu politycznego <a target="_blank" href="https://pl.wikipedia.org/wiki/Rzeczpospolita_Obojga_Narod%C3%B3w">Rzeczypospolitej Obojga Narodów</a>.
                    Konstytucja zmieniła ustrój państwa na monarchię dziedziczną, ograniczyła znacząco demokrację
                    szlachecką, odbierając prawo głosu i decyzji w sprawach państwa szlachcie nieposiadającej ziemi
                    (gołocie), wprowadziła częściowe zrównanie praw osobistych mieszczan i szlachty oraz stawiała
                    chłopów pod ochroną państwa, w ten sposób łagodząc nadużycia pańszczyzny.
                    Konstytucja formalnie zniosła <a target="_blank" href="https://pl.wikipedia.org/wiki/Liberum_veto">liberum veto</a>.
            </p>
            <p>
                    Przyjęcie monarchicznej Konstytucji 3 maja spowodowało opozycję republikanów oraz sprowokowało
                    wrogość Imperium Rosyjskiego, które od 1768 roku było protektorem Rzeczypospolitej i gwarantem
                    nienaruszalności jej ustroju.
                    W wojnie w obronie konstytucji Polska, zdradzona przez swojego pruskiego sprzymierzeńca
                    <a target="_blank" href="https://pl.wikipedia.org/wiki/Fryderyk_Wilhelm_II_Pruski">Fryderyka Wilhelma II</a>, została pokonana przez wojska rosyjskie <a href="">Katarzyny
                    Wielkiej</a>, wspierające <a target="_blank" href="">konfederację targowicką<a/> – spisek części polskich magnatów
                    przeciwnych zmianie ustroju Rzeczypospolitej.
                    Po utracie niepodległości w 1795 roku przez 123 lata <a target="_blank" href="">rozbiorów</a> przypominała o walce
                    o niepodległość.
                    Zdaniem głównych współautorów <a target="_blank" href="">Ignacego Potockiego</a> i <a target="_blank" href="">Hugona Kołłątaja</a>
                    była &quot;ostatnią wolą i testamentem gasnącej Ojczyzny&quot;.
            </p>
            <p>
                    Konstytucja przestała w praktyce obowiązywać (straciła znaczenie) 24 lipca 1792 roku (w momencie
                    przystąpienia króla Stanisława Augusta Poniatowskiego do konfederacji targowickiej) – czyli po nieco
                    ponad 14 miesiącach, w ciągu których Sejm Czteroletni uchwalił szereg ustaw szczegółowych, będących
                    rozwinięciem jej postanowień.
                    Przestała natomiast być obowiązującym aktem prawnym (została derogowana) 23 listopada 1793 roku.
                    Sejm grodzieński uznał wtedy Sejm Czteroletni za niebyły i uchylił wszystkie ustanowione na nim akty
                    prawne. 
            </p>
        </article>
        <footer>
            <h4>Treść artykułu pochodzi z Wikipedii</h4>
        </footer>
    </body>
</html>
