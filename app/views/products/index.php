<h2>Products</h2>

<a href="<?php echo URL; ?>/products/input" class="btn">Input Product</a>

<table>
      <tr>
            <th>ID</th>
            <th>JENIS</th>
            <th>UMUR</th>
            <th>HARGA</th>
            <th>KETERANGAN HEWAN</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['product_jenis']; ?></td>
                  <td><?php echo $row['product_umur']; ?></td>
                  <td><?php echo $row['product_harga']; ?></td>
                  <td><?php echo $row['product_keterangan_hewan']; ?></td>
                  <td><a href="<?php echo URL; ?>/products/edit/<?php echo $row['product_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/products/delete/<?php echo $row['product_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>