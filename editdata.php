<?php
include 'koneksi.php';
 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nim = $_GET['nim'];
    $query = "SELECT * FROM mahasiswa WHERE NIM = '$nim'";
    $result = mysqli_query($conn, $query);
 
    if ($result) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        die();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rename Data Mahasiswa</title>
</head>
 
<body>
 
    <h2>Rename Data Mahasiswa</h2>
 
    <form action="updatedata.php" method="post">
        <label for="NIM">NIM</label>
        <input type="text" name="NIM" value="<?php echo $data['NIM']; ?>" required>
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>" required>
        <label for="Prodi">Prodi</label>
        <input type="text" name="Prodi" value="<?php echo $data['Prodi']; ?>" required>
        <input type="submit" value="Update">
    </form>
    <a href="index.php" class="tombol-kembali">Kembali</a>
</body>
 
<style>
   
    body {
        background-color: #FAF6F0; 
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    h2 {
        color: #333; 
    }

    label {
        margin-bottom: 5px;
    }

    input[type="text"] {
        padding: 5px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049; 
    }

    .tombol-kembali {
        display: inline-block;
        padding: 10px;
        background-color: #FF0000;
        color: white;
        text-decoration: none;
        position: fixed;
        bottom: 10px;
        right: 10px;
    }

    .tombol-kembali:hover {
        background-color: #CC0000; 
    }

    @media (min-width: 768px) {
       
        form {
            border-radius: 10px;
            background-color: white;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
        }
      
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
    }
</style>

</html>
 