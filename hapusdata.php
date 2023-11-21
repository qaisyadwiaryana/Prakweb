<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nim = $_GET['nim'];
    
    
    $query = "DELETE FROM mahasiswa WHERE NIM = '$nim'";
    
    if (mysqli_query($conn, $query)) {
        header("Location: index.php"); 
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data Mahasiswa</title>
</head>

<body>

    <h2>Data Mahasiswa berhasil dihapus</h2>

</body>
</html>
