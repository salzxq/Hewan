<h2>Edit Product</h2>

<form action="<?php echo URL; ?>/products/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['product_id']; ?>">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="number" name="id" value="<?php echo $data['row']['product_id']; ?>" required></td>
        </tr>
        <tr>
            <td>JENIS</td>
            <td><input type="text" name="jenis" value="<?php echo $data['row']['product_jenis']; ?>" required"></td>
        </tr>
        <tr>
            <td>UMUR</td>
            <td><input type="text" name="umur" value="<?php echo $data['row']['product_umur']; ?>" required></td>
        </tr>
        <tr>
        <td>HARGA</td>
            <td><input type="text" name="harga" value="<?php echo $data['row']['product_harga']; ?>" required></td>
        </tr>
        <tr>
        <td>KETERANGAN HEWAN</td>
            <td><input type="text" name="keterangan hewan" value="<?php echo $data['row']['product_keterangan_hewan']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>