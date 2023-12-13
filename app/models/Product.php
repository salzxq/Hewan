<?php

namespace App\Models;

use App\Core\Model;

class Product extends Model
{

    public function show()
    {
            $query = "SELECT * FROM tb_products";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
    }

    public function save()
    {
            $id = $_POST['id'];
            $jenis = $_POST['jenis'];
            $umur = $_POST['umur'];
            $harga = $_POST['harga'];
            $keterangan_hewan = $_POST['keterangan_hewan'];

            $sql = "INSERT INTO tb_products
            SET product_id=:product_id, product_jenis=:product_jenis, product_umur=:product_umur, product_harga=:product_harga, product_keterangan_hewan=:product_keterangan_hewan";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":product_id", $id);
            $stmt->bindParam(":product_jenis", $jenis);
            $stmt->bindParam(":product_umur", $umur);
            $stmt->bindParam(":product_harga", $harga);
            $stmt->bindParam(":product_keterangan_hewan", $keterangan_hewan);

            $stmt->execute();
    }

    public function edit($id)
    {
            $query = "SELECT * FROM tb_products WHERE product_id=:product_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":product_id", $id);
            $stmt->execute();

            return $this->select($stmt);
    }

    public function update()
    {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $full_name = $_POST['full_name'];
            $id = $_POST['id'];

            if (!empty($password)) {
                $sql = "UPDATE tb_users
                SET user_email=:user_email, user_password=PASSWORD(:user_password), user_full_name=:user_full_name
                WHERE user_id=:user_id";
            } else {
                $sql = "UPDATE tb_users
                SET user_email=:user_email, user_full_name=:user_full_name
                WHERE user_id=:user_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $email);
            $stmt->bindParam(":user_password", $password);
            $stmt->bindParam(":user_full_name", $full_name);
            $stmt->bindParam(":user_id", $id);

            $stmt->execute();
    }

    public function delete($id)
    {
            $sql = "DELETE FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
    }
}
