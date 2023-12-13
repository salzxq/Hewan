<h2>Input Product</h2>

<form action="<?php echo URL; ?>/products/save" method="post">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="id" name="id" required></td>
        </tr>
        <tr>
            <td>JENIS</td>
            <td><input type="text" name="jenis" required></td>
        </tr>
        <tr>
            <td>UMUR</td>
            <td><input type="text" name="umur" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" required></td>
        </tr>
        <tr>
            <td>KETERANGAN HEWAN</td>
            <td><input type="text" name="keterangan_hewan" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>
