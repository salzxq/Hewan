<?php

namespace App\Models;

use App\Core\Model;

class Pemilik extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_pemilik";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $no_hp = $_POST['no_hp'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $user_status = $_POST['user_status'];

            $sql = "INSERT INTO tb_pemilik
            SET nama=:nama, alamat=:alamat, no_hp=:no_hp, tgl_lahir=:tgl_lahir, user_status=:user_status";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":no_hp", $no_hp);
            $stmt->bindParam(":tgl_lahir", $tgl_lahir);
            $stmt->bindParam(":user_status", $user_status);

            $stmt->execute();
      }

      public function edit($id)
      {
        var_dump($_POST);
        echo "ID: " . $id;
            $query = "SELECT * FROM tb_pemilik WHERE id_pemilik=:id_pemilik";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id_pemilik", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $no_hp = $_POST['no_hp'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $user_status = $_POST['user_status'];
            $id = $_POST['id'];

            $sql = "UPDATE tb_pemilik
            SET nama=:nama, alamat=:alamat, no_hp=:no_hp, tgl_lahir=:tgl_lahir, user_status=:user_status
            WHERE id_pemilik=:id_pemilik";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":no_hp", $no_hp);
            $stmt->bindParam(":tgl_lahir", $tgl_lahir);
            $stmt->bindParam(":user_status", $user_status);
            $stmt->bindParam(":id_pemilik", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_pemilik WHERE id_pemilik=:id_pemilik";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_pemilik", $id);
            $stmt->execute();
      }
}
