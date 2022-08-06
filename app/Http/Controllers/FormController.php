<?php
    namespace App\Http\Controllers;

    use App\Models\Product;
    use Illuminate\Http\Request;

    class FormController extends Controller{
        public function index(){
            $viewData = [];
            $viewData['title'] = 'Form Pembelian';
            $viewData['subtitle'] = 'Form Pembelian';
            return view('form.index')->with("viewData", $viewData);
        }
    }