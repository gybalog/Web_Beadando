<h2>Kép feltöltés</h2>
<?php
    // Alkalmazás logika:
    include('./includes/config_kepek.inc.php');
    $uzenet = array();   

    // Űrlap ellenőrzés:
    
        //print_r($_FILES);
        foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);   // Nem töltött fel fájlt
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
            elseif ($fajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                        or $fajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                        or $fajl['size'] > $MAXMERET) 
                $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet[] = " Már létezik: " . $fajl['name'];
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenet[] = ' Ok: ' . $fajl['name'];
                }
            }
        }        
    
    // Megjelenítés logika:
?>
<?php
    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
    <form action="?oldal=feltolt" method="post" enctype="multipart/form-data">
        <label>Első:
            <input type="file" name="elso">
        </label>
        <label>Második:
            <input type="file" name="masodik">
        </label>
        <label>Harmadik:
            <input type="file" name="harmadik">
        </label>        
        <input type="submit" name="kuld">
      </form> 