@extends('layout.master')

@section('content')
    <!-- Content-->
    <div class="container-fluid">
        <div class="content-brand">
            <form action="/produk/{{$produk->id_produk}}" method="POST" class="card-brief" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                <!-- /resources/views/post/create.blade.php -->
 
                <h1>Edit produk</h1>
                
                <!-- Create Post Form -->
                <x-input field="namaproduk" label="Nama produk" type="text" placeholder="nama produk" value="{{$produk->nama_produk}}"/>
                
                <x-input field="nettoproduk" label="netto produk" type="text" placeholder="netto produk" value="{{$produk->netto_produk}}"/>

                
                <div class="form-group row">
                    <label for="statusproduk" class="col-sm-3 col-form-label">Status Produk</label>                                       
                    <div class="col-sm-9">
                        <select class="btn-sm col-sm" name="statusproduk" id="statusproduk" type="" value="{{old('statusproduk') ? old('statusproduk') : $produk->status_produk}}">
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
    