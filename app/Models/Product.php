<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    /**
     * Product atribut
     * $this->attributes["id"] - int - merupakan id dari sebuah produk
     * $this->attributes["kode_produk"] - int - merupakan kode produk dari sebuah produk
     * $this->attributes["nama_produk"] - string - merupakan nama produk dari sebuah produk
     * $this->attributes["motif"] - string - merupakan motif dari sebuah produk
     * $this->attributes["bahan"] - string - merupakan bahan dari sebuah produk
     * $this->attributes["harga"] - int - merupakan harga dari sebuah produk
     * $this->attributes["merk"] - string - merupakan merk dari sebuah produk
     * $this->attributes["ukuran"] - string - merupakan ukuran dari sebuah produk
     * $this->attributes["keterangan"] - string - merupakan keterangan dari sebuah produk
     * $this->attributes["gambar"] - string - merupakan gambar dari sebuah produk
     */

    public static function validate($request){
        $request->validate([
            "kode_produk" => "required|integer|gt:0",
            "nama_produk" => "required|string|max:255",
            "motif" => "required|string|max:255",
            "bahan" => "required|string|max:255",
            "harga" => "required|integer|gt:0",
            "merk" => "required|string|max:255",
            "ukuran" => "required|string|max:10",
            "keterangan" => "string",
            "gambar" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);
    }
    public static function sumByQuantities($products, $productsInSession){
        $total = 0;
        foreach($products as $product){
            $total = $total + ($product->getHarga()*$productsInSession[$product->getId()]);
        }
        return $total;
    }
    public function getId(){
        return $this->attributes["id"];
    }
    public function setId($id){
        $this->attributes["id"] = $id;
    }
    public function getKodeProduk(){
        return $this->attributes["kode_produk"];
    }
    public function setKodeProduk($kode_produk){
        $this->attributes["kode_produk"] = $kode_produk;
    }
    public function getNamaProduk(){
        return $this->attributes["nama_produk"];
    }
    public function setNamaProduk($nama_produk){
        $this->attributes["nama_produk"] = $nama_produk;
    }
    public function getMotif(){
        return $this->attributes["motif"];
    }
    public function setMotif($motif){
        $this->attributes["motif"] = $motif;
    }
    public function getBahan(){
        return $this->attributes["bahan"];
    }
    public function setBahan($bahan){
        $this->attributes["bahan"] = $bahan;
    }
    public function getHarga(){
        return $this->attributes["harga"];
    }
    public function setHarga($harga){
        $this->attributes["harga"] = $harga;
    }
    public function getMerk(){
        return $this->attributes["merk"];
    }
    public function setMerk($merk){
        $this->attributes["merk"] = $merk;
    }
    public function getUkuran(){
        return $this->attributes["ukuran"];
    }
    public function setUkuran($ukuran){
        $this->attributes["ukuran"] = $ukuran;
    }
    public function getKeterangan(){
        return $this->attributes["keterangan"];
    }
    public function setKeterangan($keterangan){
        $this->attributes["keterangan"] = $keterangan;
    }
    public function getGambar(){
        return $this->attributes["gambar"];
    }
    public function setGambar($gambar){
        $this->attributes["gambar"] = $gambar;
    }
}