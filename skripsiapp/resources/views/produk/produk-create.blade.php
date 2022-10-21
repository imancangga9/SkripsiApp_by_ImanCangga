@extends('layout.master')

@section('content')
    <!-- Content-->
    <div class="container-fluid">
        <div class="content-brand">
            <form action="/produk" method="POST" class="card-brief" enctype="multipart/form-data">
                @csrf 
                <!-- /resources/views/post/create.blade.php -->
 
                <h2 class="mb-5">Buat Produk Baru</h2>
                
                <!-- Create Post Form -->
                
                <x-input field="namaproduk" label="Nama Poduk" type="text" placeholder="nama Produk"/>

                <x-input field="nettoproduk" label="Netto" type="text" placeholder="netto Produk"/>

                <div class="form-group row">
                    <label for="statusproduk" class="col-sm-3 col-form-label">Nama Brand</label>                                       
                    <div class="col-sm-9">
                        <select class="btn-sm col-sm" name="id_brand" id="statusproduk" type="" value="{{old('statusproduk')}}">
                            <option class="btn" value="Plan">-- Pilih Brand --</option>
                            @foreach ($brands as $brand)
                                <option value="{{$brand->id_brand}}">{{$brand->nama_brand}}</option>
                            @endforeach
                        </select>                       
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="statusproduk" class="col-sm-3 col-form-label">Status Produk</label>                                       
                    <div class="col-sm-9">
                        <select class="btn-sm col-sm" name="statusproduk" id="statusproduk" type="" value="{{old('statusproduk')}}">
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
    