<?php
include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NIM = $_POST['NIM'];
    $Nama = $_POST['Nama'];
    $Prodi = $_POST['Prodi'];

    
    $query = "INSERT INTO mahasiswa (NIM, Nama, Prodi) VALUES ('$NIM', '$Nama', '$Prodi')";
    
    if (mysqli_query($conn, $query)) {
        echo "Data mahasiswa berhasil ditambahkan.";
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
    <title>Tambah Data Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: flex-start; 
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #F4DFC8;
            padding-left: 20px; 
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: flex-start; 
            margin-bottom: 465px;
        }

        .form label {
            margin-bottom: 5px;
        }

        .form input[type="text"] {
            padding: 5px;
            margin-bottom: 10px;
        }

        .form input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

     
        a {
            margin-top: 10px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .tombol-kembali {
            display: inline-block;
            padding: 10px;
            background-color: #FF0000; 
            color: white;
            text-decoration: none;
            position: fixed;
            top: 10px;
            right: 10px;
}

.tombol-kembali:hover {
    background-color: #CC0000; 
}

    </style>
</head>

<body>

    
    <form action="tambahdata.php" method="post" class="form">
        <label for="NIM">NIM:</label>
        <input type="text" name="NIM" required>
        <label for="Nama">Nama:</label>
        <input type="text" name="Nama" required>
        <label for="Prodi">Prodi:</label>
        <input type="text" name="Prodi" required>
        <input type="submit" value="Tambah">
    </form>

  
<a href="index.php" class="tombol-kembali">Kembali</a>


</body>
</html>
