<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Transaksi extends Model
{
    /**
     * Transaksi atribut
     * $this->attributes["id"] - int - merupakan id dari sebuah transaksi
     * $this->attributes["product_id"] - int - merupakan id dari sebuah produk
     * $this->attributes["quantity"] - int - merupakan quantity dari sebuah produk
     * $this->attributes["total"] - int - merupakan total dari sebuah produk
     * $this->attributes["bukti_tf"] - string - merupakan bukti transfer dari sebuah transaksi
     * $this->attributes["nama_pembeli"] - string - merupakan nama pembeli dari sebuah transaksi
     * $this->attributes["alamat"] - string - merupakan alamat pembeli dari sebuah transaksi
     * $this->attributes["no_hp"] - string - merupakan nomor hp pembeli dari sebuah transaksi
     * $this->attributes["kota"] - string - merupakan kota pembeli dari sebuah transaksi
     * $this->attributes["provinsi"] - string - merupakan provinsi pembeli dari sebuah transaksi
     * $this->attributes["kota"] - string - merupakan kota dari sebuah transaksi
     */
 
 
 
    public static function validate($request)
    {
        $request->validate([
            "qty" => "required|integer|gt:0",
            "total" => "required|string|max:15",
            "bukti_tf" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "nama_pembeli" => "required|string|max:255",
            "alamat" => "required|string|max:255",
            "no_hp" => "required|string|max:255",
            "kota" => "required|string|max:255",
            "provinsi" => "required|string|max:255",
            "email" => "required|string|max:255",
            "nama_produk" => "required|string|max:255",
            "merk" => "required|string",
            "ukuran" => "required|string",
            "motif" => "required|string",
        ]);
    }
    public function getId()
    {
        return $this->attributes["id"];
    }
    public function setId($id)
    {
        $this->attributes["id"] = $id;
    }
    public function getProductId()
    {
        return $this->attributes["product_id"];
    }
    public function setProductId($product_id)
    {
        $this->attributes["product_id"] = $product_id;
    }
    public function getQuantity()
    {
        return $this->attributes["qty"];
    }
    public function setQuantity($quantity)
    {
        $this->attributes["qty"] = $quantity;
    }
    public function getTotal()
    {
        return $this->attributes["total"];
    }
    public function setTotal($total)
    {
        $this->attributes["total"] = $total;
    }
    public function getBuktiTf()
    {
        return $this->attributes["bukti_tf"];
    }
    public function setBuktiTf($bukti_tf)
    {
        $this->attributes["bukti_tf"] = $bukti_tf;
    }
    public function getNamaPembeli()
    {
        return $this->attributes["nama_pembeli"];
    }
    public function setNamaPembeli($nama_pembeli)
    {
        $this->attributes["nama_pembeli"] = $nama_pembeli;
    }
    public function getAlamat()
    {
        return $this->attributes["alamat"];
    }
    public function setAlamat($alamat)
    {
        $this->attributes["alamat"] = $alamat;
    }
    public function getNoHp()
    {
        return $this->attributes["no_hp"];
    }
    public function setNoHp($no_hp)
    {
        $this->attributes["no_hp"] = $no_hp;
    }
    public function getKota()
    {
        return $this->attributes["kota"];
    }
    public function setKota($kota)
    {
        $this->attributes["kota"] = $kota;
    }
    public function getProvinsi()
    {
        return $this->attributes["provinsi"];
    }
    public function setProvinsi($provinsi)
    {
        $this->attributes["provinsi"] = $provinsi;
    }
    public function getEmail()
    {
        return $this->attributes["email"];
    }
    public function setEmail($email)
    {
        $this->attributes["email"] = $email;
    }
    public function getNamaProduk()
    {
        return $this->attributes["nama_produk"];
    }
    public function setNamaProduk($nama_produk)
    {
        $this->attributes["nama_produk"] = $nama_produk;
    }
    public function getMerk()
    {
        return $this->attributes["merk"];
    }
    public function setMerk($merk)
    {
        $this->attributes["merk"] = $merk;
    }
    public function getUkuran()
    {
        return $this->attributes["ukuran"];
    }
    public function setUkuran($ukuran)
    {
        $this->attributes["ukuran"] = $ukuran;
    }
    public function getMotif()
    {
        return $this->attributes["motif"];
    }
    public function setMotif($motif)
    {
        $this->attributes["motif"] = $motif;
    }
}