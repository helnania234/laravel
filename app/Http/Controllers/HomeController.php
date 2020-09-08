<?php

namespace App\Http\Controllers;

use App\Book;
use App\Penjualan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome', ['title' => 'Home']);
    }
    public function pembelian()
    {
        return view('pembelian', ['title' => 'Pembelian']);
    }

    public function orang()
    {
        return view('tambah', ['title' => 'Tambah Pembelian']);
    }

    public function store(Request $req)
    {
        $data = [
            "nama" => $req->nama,
            "umur" => $req->umur,
            "alamat" => $req->alamat
        ];
        $post = Penjualan::insert($data);

        if ($post) {
            return redirect()->route('books');
        }
    }

    public function orangs()
    {
        $data = [
            'orang' => Penjualan::all(),
            'title' => "Orang"
        ];

        return View('data', $data);
    }

    function delete($id)
    {
        $del = Penjualan::where('id', $id)->delete();
        if ($del) {
            return redirect()->route('books')->with('pesan', "Data Berhasil dihapus!!");
        }
    }
}
