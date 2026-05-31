<?php
$servername = "podatkovna-baza";
$username = "root";
$password = "superVarnoGeslo";
$dbname = "mydb";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {

  $ime = $_POST["ime"];
  $priimek = $_POST["priimek"];
  $mail = $_POST["mail"];


  $sql = "INSERT INTO uporabnik (ime, priimek, mail) VALUES (:ime, :priimek, :mail)";
  $sql = $pdo->prepare(sql);

  $stmt->execute([
    ":ime" => $ime,
    ":priimek" => $priimek,
    ":mail" => $mail

  ]);


  echo "Podatki so poslani";
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {

  $vsebina = $_POST["vsebina"];
  $datum_posiljanja = date["Y-m-d"];
  $TK_siviljstvo = intval["TK_siviljstvo"];
  $TK_uporabnik = intval["TK_uporabnik"];

  $sql = "INSERT INTO sporocilo (vsebina, datum_posiljanja, TK_uporabnik, TK_siviljstvo) VALUES (?, ?, ?, ?)";
  $sql = $pdo->prepare(sql);

  $stmt->execute([
    ":vsebina" => $vsebina,
    ":datum"   => $datum_posiljanja,
    ":tk_u"    => $tk_uporabnik,
    ":tk_s"    => $tk_siviljstvo
]);

echo "Sporočilo uspešno poslano.";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $ime_siviljstva = $_POST["ime_siviljstva"];
  $mail = $_POST["mail"];

  $sql = "INSERT INTO siviljstvo (ime_siviljstva, mail) VALUES (?, ?)";

      $stmt = $conn->prepare($sql);
      
      $stmt->execute([
        ":ime"  => $ime_siviljstva,
        ":mail" => $mail
    ]);

    echo "Šiviljstvo uspešno dodano.";

}
?>