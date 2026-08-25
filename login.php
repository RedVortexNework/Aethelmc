<?php
header('Content-Type: application/json');

// Itt add meg a Velocity hálózatod központi MySQL adatbázisának adatait
$host = 'localhost';
$db   = 'velocity_auth_db';
$user = 'adatbazis_user';
$pass = 'adatbazis_jelszo';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Minden mezőt ki kell tölteni!']);
        exit;
    }

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        echo json_encode(['success' => false, 'message' => 'Adatbázis kapcsolódási hiba']);
        exit;
    }

    // Lekérdezés a Velocity auth táblájából (a tábla nevét igazítsd majd a pluginodhoz)
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $stored_hash = $row['password'];
        
        // Itt történik a jelszó ellenőrzése (függően attól, hogy SHA256, BCrypt vagy más hash-t használ az auth pluginod)
        // Példa standard SHA256 ellenőrzésre:
        $input_hash = hash('sha256', $password);

        if ($input_hash === $stored_hash) {
            echo json_encode(['success' => true, 'message' => 'Sikeres bejelentkezés!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Hibás jelszó!']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Ilyen nevű játékos nem regisztrált a szerveren.']);
    }

    $stmt->close();
    $conn->close();
}
?>
