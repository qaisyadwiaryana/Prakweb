<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
 
<style>
  body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #B06161;
            background-size: cover;
            background-position: center;
        }

        .center-text {
        text-align: center;
    }
 
 
        .form {
            display: flex;
            flex-direction: column;
            align-items: right;
            margin-bottom: 350px;
            justify-content: flex-end; 
            border-radius: 10px;
            background-color: #F0DBAF;
            padding: 10px; 
            width: 100%; 
            box-sizing: border-box; 
        
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
 
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }
 
        table, th, td {
            border: 2px solid #000000;
        }
 
        th, td {
            padding: 8px;
            text-align: left;
        }
 
        .tombol-tambah {
            display: inline-block;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            margin-right: 1250px;
        }
 
        .tombol-tambah:hover {
            background-color: #45a049;
        }
        
        .warna-edit,
        .warna-hapus {
            color: black;
            font-weight: bold;
            text-decoration: none;
        }
 
        .warna-edit:hover,
        .warna-hapus:hover {
            color: red; 
        }
      
</style>
 
<body>
 
<?php
include 'koneksi.php';
 
if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $query = "SELECT * FROM mahasiswa WHERE Prodi LIKE '%$searchTerm%'";
} else {
    $query = "SELECT * FROM mahasiswa";
}
 
$result = mysqli_query($conn, $query);
?>
    
        <form action="index.php" method="get" class="form">
        <label for="search" class="center-text"><strong>Search Prodi Mahasiswa</strong></label>
        <input type="text" name="search" required>
        <input type="submit" value="Cari">
        </form>
 
<a href="tambahdata.php" class="tombol-tambah">Tambah Data</a>
 
    <table border="1" style="border-collapse: collapse; background-color: #F0DBAF;">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>
 
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['NIM'] . "</td>";
            echo "<td>" . $row['Nama'] . "</td>";
            echo "<td>" . $row['Prodi'] . "</td>";
            echo "<td><a href='editdata.php?nim=" . $row['NIM'] . "' class='warna-edit'>Edit</a></td>"; 
            echo "<td><a href='hapusdata.php?nim=" . $row['NIM'] . "' class='warna-hapus'>Hapus</a></td>"; 
            echo "</tr>";
        }
        ?>
    </table>
 
</body>
</html>
 