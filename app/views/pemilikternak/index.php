<h2>Pemilik Ternak</h2>

<a href="<?php echo URL; ?>/pemilikternak/input" class="btn btn-primary">Input admin</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO.HP</th>
            <th>TANGGAL LAHIR</th>
            <th>STATUS</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><?php echo $row['no_hp']; ?></td>
                  <td><?php echo $row['tgl_lahir']; ?></td>
                  <td><?php echo $row['user_status']; ?></td>
                  <td><a href="<?php echo URL; ?>/pemilikternak/edit/<?php echo $row['id_pemilik']; ?>" class="btn btn-primary">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pemilikternak/delete/<?php echo $row['id_pemilik']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>