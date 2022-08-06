<?php
    namespace App\Http\Controllers;

    use App\Models\Product;
    use Illuminate\Http\Request;

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
            $viewData['Total'] = $total;
            return view('form.index')->with("viewData", $viewData);
        }
        public function store(){
            //asu asu
        }
    }