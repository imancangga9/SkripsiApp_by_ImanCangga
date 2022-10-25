<?php

namespace App\Http\Controllers;

use App\Models\Packaging;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackagingController extends Controller
{
    //one to one
    public function produk(){
        $produks = Produk::all();

        return view('produk.produk', compact('produks'));
    }

    //function for packaging

    public function packaging(){
        $packagings = Packaging::all();

        return view('packaging.packaging', compact('packagings'));
    }

    public function create(){
        $produks = Produk::all();
        return view('packaging.packaging-create', compact('produks'));
    }

    public function show($slug){
        $packaging = Packaging::where('slug', $slug)->first();
        // $packaging = packaging::find($id_packaging);
        if($packaging == null)
            abort(404);

        return view('packaging.show', compact('packaging'));
    }

    public function store(Request $request){
        $request->validate([
            'jenispackaging' => 'required',
            'fotopackaging' => 'mimes:jpeg,png,jpg',
            'id_produk' => 'required',
            // 'statusproduk' => 'required',
        ]);

        $imgName = $request->fotopackaging->getClientOriginalName() . '-' . time() 
                            . '.' . $request->fotopackaging->extension();
        $request->fotopackaging->move(public_path('images'), $imgName);
        
         Packaging::create ([
            'jenis_packaging' => $request->jenispackaging,
            'slug' => Str::slug($request->jenispackaging, '-'),
            'warna_packaging' => $request->warnapackaging,
            'id_produk' => $request->id_produk,
            'status_packaging' => $request->statuspackaging,
            'foto_packaging' =>  $imgName,
            
        ]);

        return redirect('/packaging');
    }

}
