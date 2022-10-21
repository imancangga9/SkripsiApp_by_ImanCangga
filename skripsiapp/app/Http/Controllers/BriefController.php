<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BriefController extends Controller
{
    
    public function brief()
    {
        $briefs = Brief::all();

        return view('brief.brief', compact('briefs'));
    }

    public function create()
    {
        $produks = Produk::all();

        return view('brief.brief-create', compact('produks'));
        
        // return view('brief.brief-create');
    }
    public function store(Request $request){
        
        $request->validate([
            
            'id_produk' => 'required',
            'statusbrief' => 'required',
        ]);                
       
        Produk::create ([
            'detail_brief' => $request->detailbrief,
            'slug' => Str::slug($request->banchmark, '-'),
            'file_brief' => $request->filebrief,
            'id_produk' => $request->id_produk,
            'status_brief' => $request->statusbrief,
        ]);

        return redirect('/brief');
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'statusbrief' => 'required',
    //         'id_produk' => 'required',
    //         // 'filebrief' => 'mimes:doc,docx,pdf,ppt,pptx,xls,xlsx'
    //     ]);     
        
    //     $document = $request->filebrief->getClientOriginalName() . '-' . time() 
    //             . '.' . $request->filebrief->extension();
    //     $request->filebrief->move(public_path('documents'), $document); 
       
    //     Produk::create ([
    //         'detail_brief' => $request->detailbrief,
    //         'slug' => Str::slug($request->idbrief,'-'),
    //         'file_brief' => $request->filebrief,
    //         'banchmark' => $request->banchmark,            
    //         'status_brief' => $request->statusbrief,
    //         'id_produk' => $request->id_produk,
    //     ]);
       

    //     return redirect('/brief');
    // }

    
    public function show($slug)
    {
        $brief = Brief::where('slug', $slug)->first();

        if($brief == null)
            abort(404);

        return view('brief.show', compact('brief'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_brief)
    {
        $brief = Brief::find($id_brief);

        return view('brief.brief-edit', compact('brief'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_brief)
    {
        $request->validate([
            // 'statusbrief' => 'required',
            // 'id_produk' => 'required',
            // 'filebrief' => 'mimes:doc,docx,pdf,ppt,pptx,xls,xlsx'
        ]);

        $document = null;

        if($request->filebrief){
            $document = $request->filebrief->getClientOriginalName() . '-' . time() 
                                . '.' . $request->filebrief->extension();
            $request->filebrief->move(public_path('documents'), $document);
        }

        Brief::find($id_brief)->update([
            'detail_brief' => $request->detailbrief,
            'file_brief' => $document,
            'banchmark' => $request->banchmark,
            'id_produk' => $request->id_produk,
            'status_brief' => $request->statusbrief,
        ]);
    }

    public function produk(){
        $produk = Produk::all();

        return view('produk.produk', compact('produk'));
    }
}
