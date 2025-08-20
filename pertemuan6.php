<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form handling</title>
</head>
<body>
    <form method="post">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="kelas">kelas :</label>
        <input type="text" name="kelas"><br>

        <button name="simpan">Simpan</button>
    </form>
    <?php
    if(isset($_POST ['simpan'])){ 
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    echo "Nama yang di inputkan : $nama";
    echo "<br>";
    echo "kelas yang di inputkan : $kelas";
    }
    ?>
</body>
</html>