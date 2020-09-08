<?php

namespace App\Http\Controllers;

use App\Book;
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
        return view('welcome');
    }
    public function pembelian()
    {
        return view('pembelian');
    }

    public function orang()
    {
        return view('tambah');
    }

    public function store(Request $req)
    {
        $data = [
            "nama" => $req->nama,
            "umur" => $req->umur,
            "alamat" => $req->alamat
        ];
        $post = Book::insert($data);

        if ($post) {
            return redirect()->route('books');
        }
    }

    public function books()
    {
        $data = [
            'books' => Book::all(),
        ];

        return View('data', $data);
    }

    function delete($id)
    {
        $del = Book::where('id', $id)->delete();
        if ($del) {
            return redirect()->route('books')->with('pesan', "Data Berhasil dihapus!!");
        }
    }
}
