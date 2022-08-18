<?php
    namespace App\Http\Controllers;

    use App\Models\Transaksi;
    use App\Models\Product;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades;
    use Illuminate\Support\Facades\Storage;

    class FormController extends Controller{
        public function index(Request $request){
            $total = 0;
            $productsInCart = [];
            $productsInSession = $request->session()->get('products');
            if($productsInSession){
                $productsInCart = Product::findMany(array_keys($productsInSession));
                $total = Product::sumByQuantities($productsInCart, $productsInSession);
            }
            $viewData = [];
            $viewData['title'] = 'Form Pembelian';
            $viewData['subtitle'] = 'Form Pembelian';
            $viewData['products'] = $productsInCart;
            $viewData['total'] = $total;
            return view('form.index')->with("viewData", $viewData);
        }
        public function store(Request $request){
            Transaksi::validate($request);
            $imageName = 'safe.png';
            if($request->hasFile('bukti_tf')){
                $imageName = time().".".$request->file('bukti_tf')->extension();
                Storage::disk('public')->put(
                    $imageName,
                    file_get_contents($request->file('bukti_tf'))
                );
            } 

            $transaksi = new Transaksi();
            $transaksi->setNamaPembeli($request->input('nama_pembeli'));
            $transaksi->setAlamat($request->input('alamat'));
            $transaksi->setNoHp($request->input('no_hp'));
            $transaksi->setKota($request->input('kota'));
            $transaksi->setEmail($request->input('email'));
            $transaksi->setBuktiTf($imageName);
            $transaksi->setTotal($request->input('total'));
            $transaksi->setQuantity($request->input('qty'));
            $transaksi->setProvinsi($request->input('provinsi'));
            $transaksi->setNamaProduk($request->input('nama_produk'));
            $transaksi->setMerk($request->input('merk'));
            $transaksi->setUkuran($request->input('ukuran'));
            $transaksi->setMotif($request->input('motif'));
            $transaksi->save(); 

            return redirect('/');
        }
    }