<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form</title>
</head>
<body>
    <form action="" method="post">
        <label for="angka1">Masukan angka 1 :</label>
        <input type="number" name="angka1" id="angka1">
        <br>
        <label>Masukan angka 2 :</label>
        <input type="number" name="angka2" id="angka2">
        <br>
        <button type="submit" name="hitung">Hitung</button>
    </form>
    <?php
    if(isset($_POST['hitung'])){
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        include('core_function.php');
        tambah($angka1,$angka2);
    }
    ?>
</body>
</html>