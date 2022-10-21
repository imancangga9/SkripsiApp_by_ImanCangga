<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Brand;
use App\Models\Brief;
use App\Models\Packaging;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    public function produk(){
        $produks = Produk::all();

        return view('produk.produk', compact('produks'));
    }

    public function create(){
        $brands = Brand::all();
        return view('produk.produk-create', compact('brands'));
    }

    public function show($slug){
        $packagings = Packaging::all();

        $produk = Produk::where('slug', $slug)->first();

        if($produk == null)
            abort(404);

        return view('produk.show', compact('produk', 'packagings'));
    }

    
    public function store(Request $request){
        
        $request->validate([
            'namaproduk' => 'required|max:255',
            'nettoproduk' => 'required|max:10',
            'id_brand' => 'required',
            'statusproduk' => 'required',
        ]);                
       
        Produk::create ([
            'nama_produk' => $request->namaproduk,
            'slug' => Str::slug($request->namaproduk, '-'),
            'netto_produk' => $request->nettoproduk,
            'id_brand' => $request->id_brand,
            'status_produk' => $request->statusproduk,
        ]);

        return redirect('/produk');
    }

    public function edit($id_produk)
    {        
        $produk = Produk::find($id_produk);

        return view('produk.produk-edit', compact('produk'));
    }

    public function update(Request $request, $id_produk)
    {
        $request->validate([
            'namaproduk' => 'required|max:255',
            'nettoproduk' => 'required',
            'nettoproduk' => 'required',
            'statusproduk' => 'required',
        ]);
        
        Produk::find($id_produk)->update([
            'nama_produk' => $request->namaproduk,
            'netto_produk' => $request->nettoproduk,
            'id_brand' => $request->id_brand,
            'status_produk' => $request->statusproduk,
        ]);

        return redirect('/produk');
    }

    public function destroy($id_produk)
    {
        $produk = Produk::find($id_produk);
        $produk->id_produk;
        $produk->delete();

        return redirect('/produk');
    }
    //one to many
    public function brand(){
        $brand = Brand::all();

        return view('aplikasi.brand', compact('brand'));
        
    }
    //one to one
    public function brief(){
        $briefs = Brief::all();
        // return view('brief.brief', ['brief' => $brief]);
        return view('brief.brief', compact('briefs'));
        
    }

    public function packaging(){
        $packagings = Packaging::all();
        
        return view('packaging.packaging', compact('packagings'));
        
    }
}
