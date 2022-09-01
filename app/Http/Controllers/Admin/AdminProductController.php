<?php

    namespace App\Http\Controllers\Admin;
    use App\Models\Product;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Http\Request;

    class AdminProductController extends Controller
    {
        public function index()
        {
            $viewData = [];
            $viewData["title"] = "Admin Page - Product - Online Store";
            $viewData["products"] = Product::all();
            return view('admin.product.index')->with('viewData', $viewData);
        }
        public function store(Request $request){
            Product::validate($request);
            $newProduct = new Product();
            $newProduct->setKodeProduk($request->input('kode_produk'));
            $newProduct->setNamaProduk($request->input('nama_produk'));
            $newProduct->setMotif($request->input('motif'));
            $newProduct->setMerk($request->input('merk'));
            $newProduct->setBahan($request->input('bahan'));
            $newProduct->setHarga($request->input('harga'));
            $newProduct->setUkuran($request->input('ukuran'));
            $newProduct->setKeterangan($request->input('keterangan'));
            $newProduct->setStock($request->input('stock'));
            $newProduct->setGambar('safe.png');
            $newProduct->save();

            if($request->hasFile('gambar')){
                $imageName = $newProduct->getId().".".$request->file('gambar')->extension();
                Storage::disk('public')->put(
                    $imageName,
                    file_get_contents($request->file('gambar')->getRealPath())
                );
                $newProduct->setGambar($imageName);
                $newProduct->save();
                return back();
            }
            return back();
        }
        public function delete($id){
            Product::destroy($id);
            return back();
        }
        public function edit($id){
            $viewData = [];
            $viewData["title"] = "Admin Page - Edit Product - Online Store";
            $viewData["product"] = Product::findOrFail($id);
            return view('admin.product.edit')->with('viewData', $viewData);
        }
        public function update(Request $request, $id){
            Product::validate($request);
            $product = Product::findOrFail($id);
            $product->setKodeProduk($request->input('kode_produk'));
            $product->setNamaProduk($request->input('nama_produk'));
            $product->setMotif($request->input('motif'));
            $product->setMerk($request->input('merk'));
            $product->setBahan($request->input('bahan'));
            $product->setHarga($request->input('harga'));
            $product->setStock($request->input('stock'));
            $product->setUkuran($request->input('ukuran'));
            $product->setKeterangan($request->input('keterangan'));
            if($request->hasFile('gambar')){
                $imageName = $product->getId().".".$request->file('gambar')->extension();
                Storage::disk('public')->put(
                    $imageName,
                    file_get_contents($request->file('gambar')->getRealPath())
                );
                $product->setGambar($imageName);
                $product->save();
            }
            $product->save();
            return redirect()->route('admin.product.index');
        }
    }