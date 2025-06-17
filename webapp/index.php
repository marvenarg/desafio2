<?php
$mysqli = new mysqli("db", getenv("MYSQL_USER"), getenv("MYSQL_PASSWORD"), getenv("MYSQL_DATABASE"));
if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $uploadDir = 'uploads/';
    $filename = basename($_FILES['file']['name']);
    $targetPath = $uploadDir . $filename;

    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {
        $stmt = $mysqli->prepare("INSERT INTO uploads (filename) VALUES (?)");
        $stmt->bind_param("s", $filename);
        $stmt->execute();
    }

    // Evita reenvío de formulario al hacer F5
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<h2>Subir archivo</h2>
<form method="POST" enctype="multipart/form-data">
  <input type="file" name="file" required />
  <button type="submit">Subir</button>
</form>

<h2>Archivos registrados:</h2>
<ul>
<?php
$res = $mysqli->query("SELECT filename, uploaded_at FROM uploads ORDER BY id DESC");
while ($row = $res->fetch_assoc()) {
    echo "<li>{$row['filename']} (subido en {$row['uploaded_at']})</li>";
}
?>
</ul>
