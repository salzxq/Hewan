<h2>Input Data Pemilik</h2>

<form action="<?php echo URL; ?>/pemilikternak/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>NO.HP</td>
            <td><input type="text" name="no_hp" required></td>
        </tr>
        <tr>
            <td>TANGGAL LAHIR</td>
            <td><input type="date" name="tgl_lahir" required></td>
        </tr>
        <tr>
            <td>STATUS</td>
            <td><input type="text" name="user_status" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" class="btn btn-primary" value="SAVE"></td>
        </tr>
    </table>
</form>