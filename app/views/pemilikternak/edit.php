<h2>Edit data pemilik</h2>

<form action="<?php echo URL; ?>/pemilikternak/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_pemilik']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>NO.HP</td>
            <td><input type="text" name="no_hp" value="<?php echo $data['row']['no_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>TANGGAL LAHIR</td>
            <td><input type="date" name="tgl_lahir" value="<?php echo $data['row']['tgl_lahir']; ?>" required></td>
        </tr>
        <tr>
            <td>STATUS</td>
            <td><input type="text" name="user_status" value="<?php echo $data['row']['user_status']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" class="btn" value="UPDATE"></td>
        </tr>
    </table>
</form>