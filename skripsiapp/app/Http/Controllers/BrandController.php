<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class BrandController extends Controller
{
    public function brand(){
        $brands = Brand::all();

        return view('aplikasi.brand', compact('brands'));
    }

    public function create(){
        return view('aplikasi.brand-create');
    }

    public function show($slug){
        $brand = Brand::where('slug', $slug)->first();
        // $brand = Brand::find($id_brand);
        if($brand == null)
            abort(404);

        return view('aplikasi.show', compact('brand'));
    }

    
    public function store(Request $request){
       
        $request->validate([
            'namabrand' => 'required|max:255',
            'logobrand' => 'mimes:jpeg,png,jpg',
        ]);

        $imgName = $request->logobrand->getClientOriginalName() . '-' . time() 
                            . '.' . $request->logobrand->extension();
        $request->logobrand->move(public_path('images'), $imgName);
        
         Brand::create ([
            'nama_brand' => $request->namabrand,
            'slug' => Str::slug($request->namabrand, '-'),
            'logo_brand' => $imgName,
        ]);

        // $brand = new Brand;
        // $brand->nama_brand = $request->namabrand;
        // $brand->slug = Str::slug($request->namabrand, '-'); 
        // $brand->logo_brand = $request->logobrand;
        // $brand->save();
        

        return redirect('/brand');
    }

    public function edit($id_brand)
    {        
        $brand = Brand::find($id_brand);

        return view('aplikasi.brand-edit', compact('brand'));
    }

    public function update(Request $request, $id_brand)
    {
        $request->validate([
            'namabrand' => 'required|max:255',
            'logobrand' => 'required',
        ]);

        $imgName = null;

        if($request->logobrand){
            $imgName = $request->logobrand->getClientOriginalName() . '-' . time() 
                                . '.' . $request->logobrand->extension();
            $request->logobrand->move(public_path('images'), $imgName);
        }

        Brand::find($id_brand)->update([
            'nama_brand' => $request->namabrand,
            'logo_brand' => $imgName,
        ]);

        // $brand = Brand::find($id_brand);
        // $brand->nama_brand = $request->namabrand;
        // $brand->logo_brand = $request->logobrand;
        // $brand->save();

        return redirect('/brand');
    }

    public function destroy($id_brand)
    {
        $brand = Brand::find($id_brand);
        $brand->id_brand;
        $brand->delete();

        return redirect('/brand');
    }

    public function produk(){
        
        $produks = Produk::all();

        return view('produk.produk', compact('produks'));
    }
}
