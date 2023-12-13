<h2>Users</h2>

<a href="<?php echo URL; ?>/pemeliharaan/input" class="btn">Input Pemeliharaan</a>

<table>
      <tr>
            <th>NO</th>
            <th>HEWAN PEMELIHARAN</th>
            <th>GAMBAR</th>
            <th>ESTIMASI</th>
            <th>HARGA</th>
            <th>CATATAN</th>
            <th colspan='2'>AKSI</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['hewan_pem']; ?></td>
                  <td><img style="height: 140px;" src="public/img/<?php echo $row['gambar']; ?>" alt="<?php echo $row['gambar']; ?>"></td>
                  <td><?php echo $row['estimasi']; ?></td>
                  <td><?php echo $row['harga_pem']; ?></td>
                  <td><?php echo $row['catatan']; ?></td>
                  <td><a href="<?php echo URL; ?>/pemeliharaan/edit/<?php echo $row['id_pemeliharaan']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pemeliharaan/delete/<?php echo $row['id_pemeliharaan']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>