<?php

    namespace App\Http\Controllers\Admin;
    use App\Models\Transaksi;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Http\Request;
    use PDF;

    class AdminTransaksiController extends Controller
    {
        public function index()
        {
            /**
             * $transaksi = Transaksi::all();
             * return view('admin.transaksi.index', compact('transaksi'));
             */
            $viewData = [];
            $viewData['title'] = 'Transaksi';
            $viewData['transaksi'] = Transaksi::all();
            
            return view('admin.transaksi.index')->with('viewData', $viewData);
        }
        public function show($id){
            $viewData = [];
            $viewData['title'] = 'Transaksi';
            $viewData['transaksi'] = Transaksi::findOrFail($id);
            return view('admin.transaksi.show')->with('viewData', $viewData);
        }
        public function delete($id){
            Transaksi::destroy($id);
            return back();
        }
    }