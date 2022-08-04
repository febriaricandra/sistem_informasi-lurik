<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class HomeController extends Controller{
        public function index(){
            $viewData = [];
            $viewData["title"] = 'Penjualan kain lurik';
            $viewData["subtitle"] = 'Kain lurik';
            return view('home.index')->with('viewData', $viewData);
        }
        public function about(){
            $viewData = [];
            $viewData["title"] = 'About us - pengembangan';
            $viewData["subtitle"] = 'Mengenai proyek pengembangan web';
            $viewData["description"] = 'ini tugas';
            $viewData["author"] = 'febriari candra guritno';
            return view('home.about')->with('viewData', $viewData);
        }
    }