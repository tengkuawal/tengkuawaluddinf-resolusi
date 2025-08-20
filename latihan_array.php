<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<body>
    <form action="" method="post">
        <label for="namaBuah">Masukan Nama Buah :</label>
        <input type="text" name="namaBuah" id="namaBuah">
        <button type="submit">Simpan</button>
    </form>

    <?php
        $buah = ['apel'];
        $buah[0] = $_POST['namaBuah'];
        foreach($buah as $data){
            echo $data.'<br>';
        }
    ?>
</body>

</html>