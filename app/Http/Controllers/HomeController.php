<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class HomeController extends Controller{
        public function index(){
            $viewData = [];
            $viewData["title"] = 'MulyaTEX';
            $viewData["subtitle"] = 'Kain lurik';
            return view('home.index')->with('viewData', $viewData);
        }
        public function about(){
            $viewData = [];
            $viewData["title"] = 'Tentang Kami - Mulyatex';
            $viewData["subtitle"] = 'Mulyatex lurik pedan';
            $viewData["description"] = '---';
            $viewData["author"] = 'febriari candra guritno';
            return view('home.about')->with('viewData', $viewData);
        }
    }