<?php

namespace App\Models;

use App\Core\Model;
use PDO;

class Pemeliharaan extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_pemeliharaan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $hewan_pem = $_POST['hewan_pem'];
            $gambar = $_FILES['gambar'];
            $catatan = $_POST['catatan'];
            $estimasi = $_POST['estimasi'];
            $harga_pem = $_POST['harga_pem'];
            
            $uploadDir = 'public/img/';
            $gambarName = uniqid() . '_' . $gambar['name'];
            $gambarPath = $uploadDir . $gambarName;
            move_uploaded_file($gambar['tmp_name'], $gambarPath);

            $sql = "INSERT INTO tb_pemeliharaan
            SET hewan_pem=:hewan_pem, gambar=:gambar, catatan=:catatan, estimasi=:estimasi, harga_pem=:harga_pem";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":hewan_pem", $hewan_pem);
            $stmt->bindParam(":gambar", $gambarName);
            $stmt->bindParam(":catatan", $catatan);
            $stmt->bindParam(":estimasi", $estimasi);
            $stmt->bindParam(":harga_pem", $harga_pem);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_pemeliharaan WHERE id_pemeliharaan=:id_pemeliharaan";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id_pemeliharaan", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

     //  public function update()
     //  {
     //      $hewan_pem = $_POST['hewan_pem'];
     //      $gambarLama=$_POST['gambar_pem'];
     //      $gambar = $_FILES['gambar'];
     //      $catatan = $_POST['catatan'];
     //      $estimasi = $_POST['estimasi'];
     //      $harga_pem = $_POST['harga_pem'];
     //        $id = $_POST['id'];
            
     //        if ($gambar['size'] > 0) {
     //              $uploadDir = 'public/img/';
     //              $gambarName = uniqid() . '_' . $gambar['name'];
     //              $gambarPath = $uploadDir . $gambarName;
     //              unlink($uploadDir . $gambarLama);
     //              move_uploaded_file($gambar['tmp_name'], $gambarPath);            
     //        }

     //        if ($gambar['size'] > 0) {
     //              $sql = "UPDATE tb_pemeliharaan
     //                    SET hewan_pem=:hewan_pem, gambar=:gambar, catatan=:catatan, estimasi=:estimasi, harga_pem=:harga_pem
     //                    WHERE id_pemeliharaan=:id_pemeliharaan";
     //        } else {
     //              $sql = "UPDATE tb_pemeliharaan
     //                    SET hewan_pem=:hewan_pem, catatan=:catatan, estimasi=:estimasi, harga_pem=:harga_pem
     //                    WHERE id_pemeliharaan=:id_pemeliharaan";
     //        }

     //        $stmt = $this->db->prepare($sql);

     //        $stmt->bindParam(":hewan_pem", $hewan_pem);
     //        if ($gambar['size'] > 0) {
     //              $stmt->bindParam(":gambar", $gambarName);
     //        }
     //        $catatan = $_POST['catatan'];
     //        $estimasi = $_POST['estimasi'];
     //        $harga_pem = $_POST['harga_pem'];
     //        $stmt->bindParam(":id_pemeliharaan", $id);

     //        $stmt->execute();
     //  }
     public function update()
      {
            $hewan_pem = $_POST['hewan_pem'];
            $gambarLama=$_POST['gambar_pem'];
            $gambar = $_FILES['gambar'];
            $catatan = $_POST['catatan'];
            $estimasi = $_POST['estimasi'];
            $harga_pem = $_POST['harga_pem'];
            $id = $_POST['id'];
            
            if ($gambar['size'] > 0) {
                  $uploadDir = 'public/img/';
                  $gambarName = uniqid() . '_' . $gambar['name'];
                  $gambarPath = $uploadDir . $gambarName;
                  unlink($uploadDir . $gambarLama);
                  move_uploaded_file($gambar['tmp_name'], $gambarPath);            
            }

            if ($gambar['size'] > 0) {
                  $sql = "UPDATE tb_pemeliharaan
                        SET hewan_pem=:hewan_pem, gambar=:gambar, catatan=:catatan, estimasi=:estimasi, harga_pem=:harga_pem
                        WHERE id_pemeliharaan=:id_pemeliharaan";
            } else {
                  $sql = "UPDATE tb_pemeliharaan
                        SET hewan_pem=:hewan_pem, catatan=:catatan, estimasi=:estimasi, harga_pem=:harga_pem
                        WHERE id_pemeliharaan=:id_pemeliharaan";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":hewan_pem", $hewan_pem);
            if ($gambar['size'] > 0) {
                  $stmt->bindParam(":gambar", $gambarName);
            }

            $stmt->bindParam(":hewan_pem", $hewan_pem);
            $stmt->bindParam(":catatan", $catatan);
            $stmt->bindParam(":estimasi", $estimasi);
            $stmt->bindParam(":harga_pem", $harga_pem);
            $stmt->bindParam(":id_pemeliharaan", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sqlSelect = "SELECT gambar FROM tb_pemeliharaan WHERE id_pemeliharaan=:id_pemeliharaan";
            $stmtSelect = $this->db->prepare($sqlSelect);
            $stmtSelect->bindParam(":id_pemeliharaan", $id);
            $stmtSelect->execute();
            $result = $stmtSelect->fetch(PDO::FETCH_ASSOC);

            $gambarPath = 'public/img/' . $result['gambar'];
            unlink($gambarPath);

            $sqlDelete = "DELETE FROM tb_pemeliharaan WHERE id_pemeliharaan=:id_pemeliharaan";
            $stmtDelete = $this->db->prepare($sqlDelete);
            $stmtDelete->bindParam(":id_pemeliharaan", $id);
            $stmtDelete->execute();
      }

}