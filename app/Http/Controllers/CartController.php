<?php
    namespace App\Http\Controllers;

    use App\Models\Product;
    use Illuminate\Http\Request;

    class CartController extends Controller{
        public function index(Request $request){
            $total = 0;
            $hasil = 0;
            $productsInCart = [];

            $productsInSession = $request->session()->get('products');
            if($productsInSession){
                $productsInCart = Product::findMany(array_keys($productsInSession));
                $hasil = Product::sumByJumlah($productsInCart, $productsInSession);
                $total = 0;
            }
            $viewData = [];
            $viewData['title'] = 'Keranjang Pembelanjaan';
            $viewData['subtitle'] = 'Daftar Produk yang dibeli';
            $viewData['hasil'] = $hasil;
            $viewData['total'] = $total;
            $viewData['products'] = $productsInCart;
            return view('cart.index')->with("viewData", $viewData);
        }
        public function add(Request $request, $id){
            $products = $request->session()->get('products');
            $products[$id] = $request->input('quantity');
            $request->session()->put('products', $products);
            
            return redirect()->route('cart.index');
        }
        public function delete(Request $request){
            $request->session()->forget('products');
            return back();
        }
    }
