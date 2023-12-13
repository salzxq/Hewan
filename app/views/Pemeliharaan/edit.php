<h2>Edit Pemeliharaan</h2>

<form action="<?php echo URL; ?>/pemeliharaan/update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_pemeliharaan']; ?>">
    <table>
        <tr>
            <td>HEWAN PEMELIHARAAN</td>
            <td><input type="text" name="hewan_pem" value="<?php echo $data['row']['hewan_pem']; ?>" required></td>
        </tr>
        <tr>
        <td>GAMBAR</td>
        <td>
        `   <input type="hidden" name="gambar_pem" name="gambar_pem" value="<?php echo $data['row']['gambar']; ?>">
            <input type="file" name="gambar" id="fileInput" accept=".jpg, .jpeg, .png, .gif">
        <td>
        </tr>
        <tr>
            <td>HARGA PEMELIHARAAN</td>
            <td><input type="number" name="harga_pem" value="<?php echo $data['row']['harga_pem']; ?>" required></td>
        </tr>
        <tr>
            <td>CATATAN</td>
            <td><textarea name="catatan" id="" cols="30" rows="10"><?php echo $data['row']['catatan']; ?></textarea></td>
        </tr>
        <tr>
            <td>ESTIMASI</td>
            <td><input type="TEXT" name="estimasi" value="<?php echo $data['row']['estimasi']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>

<script>
document.getElementById('fileInput').addEventListener('change', function() {
    var fileInput = this;
    var allowedExtensions = ['jpg', 'jpeg', 'png'];
    var maxSizeInBytes = 2 * 1024 * 1024;

    if (fileInput.files.length > 0) {
        var fileName = fileInput.files[0].name;
        var fileSize = fileInput.files[0].size;
        var fileExtension = fileName.split('.').pop().toLowerCase();

        if (!allowedExtensions.includes(fileExtension)) {
            alert('Jenis file tidak diizinkan.');
            fileInput.value = '';
            return;
        }

        if (fileSize > maxSizeInBytes) {
            alert('Ukuran file melebihi batas yang diizinkan.');
            fileInput.value = '';
            return;
        }

        console.log('File valid:', fileName, fileSize, fileExtension);
    }
});
</script>