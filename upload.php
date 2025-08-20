<form method="post" enctype="multipart/form-data">
    <label>Upload File : </label>
    <input type="file" name="foto">
    <button type="submit" name="btnUpload">Upload</button>
</form>
<?php
    $target_dir = 'uploads/';
    $target_file = $target_dir.basename($_FILES['foto']['name']);

    if(isset($_POST['btnUpload'])){

        if(move_uploaded_file ($_FILES['foto']['tmp_name'], $target_file)){
            echo "file sudah diunggah";
        }else{
            echo "File belum berhasil diunggah";
        }
    }
?>