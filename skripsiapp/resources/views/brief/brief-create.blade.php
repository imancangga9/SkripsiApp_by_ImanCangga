@extends('layout.master')

@section('content')
    <!-- Content-->
    <div class="container-fluid">
        <div class="content-brand">
            <form action="/brief" method="POST" class="card-brief" enctype="multipart/form-data">
                @csrf 
                <!-- /resources/views/post/create.blade.php -->
 
                <h1>Create Brief</h1>
                
                <!-- Create Post Form -->
                
                <x-textarea field="detailbrief" label="Brief" type="text" placeholder=""/>

                <x-inputimage field="filebrief" label="File Brief" />
                
                <div class="form-group row">
                    <label for="namaproduk" class="col-sm-3 col-form-label">Nama Produk</label>                                       
                    <div class="col-sm-9">
                        <select class="btn-sm col-sm" name="id_produk" id="statusproduk" type="" value="{{old('statusproduk')}}">
                            <option class="btn" value="Plan">-- Pilih Produk --</option>
                            @foreach ($produks as $produk)
                                <option value="{{$produk->id_produk}}">{{$produk->nama_produk}}</option>
                            @endforeach
                        </select>                       
                    </div>
                </div>
                <x-textarea field="banchmark" label="Banchmark" type="text" placeholder=""/>
                
                <div class="form-group row">
                    <label for="statusproduk" class="col-sm-3 col-form-label">Status Produk</label>                                       
                    <div class="col-sm-9">
                        <select class="btn-sm col-sm" name="statusproduk" id="statusproduk" type="" value="{{old('statusproduk')}}">
                            <option class="btn" value=" ">-</option>
                            <option class="btn" value="Plan">Plan</option>
                            <option class="btn" value="In Progress">In Progress</option>
                            <option class="btn" value="Canceled">Canceled</option>
                            <option class="btn" value="Done">Completed</option>
                        </select>                       
                        
                    </div>
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">                   
                    <button type="submit" value="send" class="btn w-100 btn-primary btn-md"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Save
                    </button>                                   
                </div>
            </form>
        </div>                    
    </div>
    <!--End Content-->
@endsection
    