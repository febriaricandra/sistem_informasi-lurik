<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model{
    /**
     * DetailTransaksi atribut
     * this->attributes["id"] - int - merupakan id dari sebuah detail transaksi
     * this->attributes["transaksi_id"] - int - merupakan id dari sebuah transaksi
     * 
     */
    public static function validate($request){
        $request->validate([
            "transaksi_id" => "required|integer|gt:0",
            "product_id" => "required|integer|gt:0",
            "quantity" => "required|integer|gt:0",
            "total" => "required|integer|gt:0",
        ]);
    }
    public function getId(){
        return $this->attributes["id"];
    }
    public function setId($id){
        $this->attributes["id"] = $id;
    }
    public function getTransaksiId(){
        return $this->attributes["transaksi_id"];
    }
    public function setTransaksiId($transaksi_id){
        $this->attributes["transaksi_id"] = $transaksi_id;
    }
    public function getProductId(){
        return $this->attributes["product_id"];
    }
    public function setProductId($product_id){
        $this->attributes["product_id"] = $product_id;
    }
    public function getQuantity(){
        return $this->attributes["quantity"];
    }
    public function setQuantity($quantity){
        $this->attributes["quantity"] = $quantity;
    }
    public function getTotal(){
        return $this->attributes["total"];
    }
    public function setTotal($total){
        $this->attributes["total"] = $total;
    }
    
}