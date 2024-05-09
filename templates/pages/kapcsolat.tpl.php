<?php

$isAllValid = true;

if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
{
exit("Hibás név: ".$_POST['nev']);
$isAllValid = false;
}
$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
{
exit("Hibás email: ".$_POST['email']);
$isAllValid = false;
}
if(!isset($_POST['uzenet']) || empty($_POST['uzenet']) || strlen($_POST['uzenet']) > 120)
{
exit("Hibás szöveg: ".$_POST['uzenet']);
$isAllValid = false;
}

if ($isAllValid == true) {    
    $datum2 = date("Y-m-d");
    echo "Feltöltött adatok:<br>";
    echo "Nev: " . $_POST['nev'] . "<br>";
    echo "Email: " . $_POST['email'] . "<br>";
    echo "Üzenet: " . $_POST['uzenet'] . "<br>";
    echo "Dátum: " . $datum2;
    

    // Kapcsolódás
    $dbh = new PDO('mysql:host=mysql.omega:3306;dbname=bfzfk0', 'bfzfk0', 'Almafa01',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

    $sqlInsert = "insert into uzenetek(id, nev, email, uzenet, datum) values(0, :nev, :email, :uzenet, :datum)";
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'], ':uzenet' => $_POST['uzenet'],':datum' => $datum2)); 

}



?>