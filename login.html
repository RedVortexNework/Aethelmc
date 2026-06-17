<?php
// Adatbázis adatok (Ezeket a szerver configjából szedd ki)
$host = 'localhost';
$db   = 'authme'; // Az adatbázis neve, ahol a userek vannak
$user = 'root';
$pass = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($host, $user, $pass, $db);
    $mc_nev = $_POST['nev'];
    $jelszo = $_POST['jelszo'];

    // AuthMe jelszó ellenőrzés (nagyon fontos a hash miatt!)
    $sql = "SELECT password FROM authme WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $mc_nev);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Itt jönne a password_verify() a hash-elt jelszóhoz
        echo "Sikeres bejelentkezés! Üdv: " . $mc_nev;
        // Innen továbbirányíthatod a shop oldalra
    } else {
        echo "Hibás név vagy jelszó!";
    }
}
?>
