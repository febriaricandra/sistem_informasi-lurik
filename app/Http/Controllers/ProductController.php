<?php
    namespace App\Http\Controllers;
    use App\Models\Product;
    use Illuminate\Http\Request;

    class ProductController extends Controller{
        public function index(){
            $viewData = [];
            $viewData["title"] = 'MulyaTEX';
            $viewData["subtitle"] = 'Kain lurik';
            $viewData["products"] = Product::all();
            return view('product.index')->with("viewData",$viewData);
        }
        public function show($id){
            $viewData = [];
            $product = Product::findOrFail($id);
            $viewData["title"] = $product->getNamaProduk().' Penjualan kain batik';
            $viewData["subtitle"] = 'informasi produk '.$product->getNamaProduk();
            $viewData["product"] = $product;
            return view('product.show')->with("viewData",$viewData);
        }
    }